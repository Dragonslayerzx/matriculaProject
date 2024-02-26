<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Eliminar Alumno</title>
</head>
<body>
    <div class="container" style = "margin-top:30px">
        <h1><b>Eliminar alumnos</b></h1>
    <br>
    <br>
        <table class="table">
            <thead>
              <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $alumno->codigoAlumno }}</td>
                    <td>{{ $alumno->nombre }}</td>
                    <td>{{ $alumno->apellido }}</td>
                    <td>{{ $alumno->correo }}</td>
                </tr>
            </tbody>
        </table>
        <div class="form-group">
            <a href="{{route('alumno.index')}}" class="btn btn-warning btn-lg">Cancelar</a>
            <a href="{{route('alumno.destroy', $alumno->codigoAlumno)}}" class="btn btn-danger btn-lg">Eliminar</a>
    </div>
</body>
</html>