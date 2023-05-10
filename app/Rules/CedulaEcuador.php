namespace App\Rules;
use Illuminate\Contracts\Validation\Rule;
class CedulaEcuador implements Rule

{

    public function passes($attribute, $value)

    {
        if (strlen($value) != 10) {
        return false;
        }
            $coeficientes = array(2, 1, 2, 1, 2, 1, 2, 1, 2);
            $cedula = str_split($value);
            $suma = 0;
     for ($i = 0; $i < count($coeficientes); $i++) {
        $valor = $cedula[$i] * $coeficientes[$i];
        if ($valor >= 10) {
        $valor = substr($valor, 0, 1) + substr($valor, 1, 1);
        }
     $suma += $valor;
     }
     $ultimo_digito = 10 - substr($suma, -1);
     if ($ultimo_digito == substr($value, -1)) {
     return true;
     } else {
     return false;
     }
    }
    public function message()
     {
     return 'La cédula ingresada no es válida.';
     }
}