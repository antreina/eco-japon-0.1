<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>

    <div>
        <br>
        <H2 class="text-center">ECO-JAPON</H2> </div>
        <br>
        <H2 class="text-center">REPORTE DE RESIDUOS </H2> </div>
      <table class="table table-striped">
        <br>
        <thead>
            <tr class="bg-body">
                <th>Cod.</th>
                <th>RESIDUO</th>
                <th>DESCRIPCIÓN</th>
                <th>ESTADO</th>
                <th>CANTIDAD</th>
                <th>CEDULA</th>
            </tr>
        </thead>
        <tbody >
            @foreach ($residuos as $res)
            <tr>
            <td>{{ $res->id }}</td>
			<td>{{ $res->residuo}}</td>
			<td>{{ $res->description }}</td>
			<td>{{ $res->estado }}</td>
			<td>{{ $res->cantidad  }}</td>
            <td>{{ $res->cedula }}</td>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
        </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>

