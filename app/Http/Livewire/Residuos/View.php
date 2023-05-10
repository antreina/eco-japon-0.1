<?php

namespace App\Http\Livewire\Residuos;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Residuos;
use Livewire\WithPagination;
use Illuminate\Support\Facades\validator;
use CedulaEcuador;


class View extends Component
{
    use WithPagination;
    protected $paginationTheme='bootstrap';
    public $view='create';
    public $residuo_id,$residuo,$description,$estado,$cantidad,$cedula='';
    public $keyWord;
    public function render()
    {
        $keyWord= '%'.$this->keyWord.'%';
        $cedula=Auth::user()->cedula;
        // dd($cedula);
         if ($cedula=='1722352695') {
             $residuos=Residuos::latest()
             ->where('residuo','like',$keyWord)
             ->paginate(5);
         }
         else 
         {
            $residuos=Residuos::latest()
            ->where('cedula',$cedula)
            ->where(function($query)use($keyWord)
            {
                    $query->where('residuo','like',$keyWord);
            })
            ->paginate(5);
         }
         return view('livewire.residuos.view',compact('residuos'));
    }

        //metodo para eliminar
        public function destroy($id)
        {
            Residuos::destroy($id);
        }
    
        //metodo para guardar
        public function save()
        {
            // $validatedData = Validator::make(
            //       ['cedula'=> $this->cedula],
            //       ['cedula'=>['required', new CedulaEcuador]]
            //   )->validate();

            $this->validate([
                'residuo'=> 'required',
                'description'=> 'required',
                'estado'=> 'required',
                'cantidad'=> 'required',
            ]);
            Residuos::create([
                'residuo'  =>$this->residuo,
                'description'=>$this->description,
                'estado'=>$this->estado,
                'cantidad'=>$this->cantidad,
                'cedula'=>Auth::user()->cedula,

            ]);
            $this->reset();
        }
    
        public function edit($id)
        {
            $residuos=Residuos::find($id);
            $this->residuo_id=$residuos->id;
            $this->residuo=$residuos->residuo;
            $this->description=$residuos->description;
            $this->estado=$residuos->estado;
            $this->cantidad=$residuos->cantidad;
            $this->view='edit';
        }
    
        public function update()
        {
            $this->validate([
                'residuo'=> 'required',
                'description'=> 'required',
                'estado'=> 'required',
                'cantidad'=> 'required',
            ]);
            $residuos=Residuos::find($this->residuo_id);
            $residuos->update([
                'residuo'  =>$this->residuo,
                'description'=>$this->description,
                'estado'=>$this->estado,
                'cantidad'=>$this->cantidad,
            ]);
            $this->reset();
        }
    
        public function resetear()
        {
            $this->reset(['residuo','description','estado','cantidad']);
            $this->reset();
        }
}
