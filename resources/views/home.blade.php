<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Pagina principal de Matricula</title>
</head>
<body>

    <div class="container" style= "margin-top:40px">
    <h1><b>Gestion de Matricula</b></h1>
    <br>
    <br>
    <a href="{{route('alumno.crear')}}" class = 'btn btn-primary btn-lg'>Agregar Alumno</a>
    <br>
    <br>
   </div>


  <div class="container">
    <table class="table">
        <thead>
          <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($alumnos as $alumno)
            <tr>
                <td>{{ $alumno->codigoAlumno }}</td>
                <td>{{ $alumno->nombre }}</td>
                <td>{{ $alumno->apellido }}</td>
                <td>{{ $alumno->correo }}</td>
                <td>{{ $alumno->telefono }}</td>
                <td>
                  <a href="{{route('alumno.editar', $alumno->codigoAlumno)}}">Editar</a>
                </td>
                <td>
                  <a href="{{route('alumno.eliminar', $alumno->codigoAlumno)}}">Eliminar</a>
                </td>
            </tr>
          @endforeach
        </tbody>
      </table>
  </div>
   
</body>
</html>