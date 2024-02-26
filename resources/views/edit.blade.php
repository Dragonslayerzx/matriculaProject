<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Editar datos</title>
</head>
<body>
    <div class="container" style = "margin-top:40px">
        <h1><b>Editar datos de alumno</b></h1>
        <form action="{{route('alumno.actualizar', $alumno->codigoAlumno)}}" method="POST"> <!-- al especificarle el metodo le decimos que viajara al sever y con la accion que viajara a ruta especificada-->
            @csrf 
            @method('PUT')
            <div class="form-group">
                <label>Codigo de Alumno:</label>
                <input type="text" class="form-control" name="codigoAlumno" value = "{{$alumno -> codigoAlumno}}" readonly>   
            </div>
            <div class="form-group">
                <label>Nombre:</label>
                <input type="text" class="form-control" name="nombre" value = "{{$alumno -> nombre}}">   <!-- ocuparemos los valors obtenidos en la vista -->
            </div>
            <div class="form-group">
                <label>Apellido:</label>
                <input type="text" class="form-control" name="apellido" value = "{{$alumno -> apellido}}">   
            </div>  
            <div class="form-group">
                <label>Correo:</label>
                <input type="text" class="form-control" name="correo" value = "{{$alumno -> correo}}">   
            </div>
            <div class="form-group">
                <label>Telefono:</label>
                <input type="text" class="form-control" name="telefono" value = "{{$alumno -> telefono}}" >   
            </div>
            <div class="form-group">
                <label>Direccion:</label>
                <input type="text" class="form-control" name="direccion" value = "{{$alumno -> direccion}}">   
            </div>
            <div class="form-group">
                <label>Codigo de Carrera:</label>
                <input type="text" class="form-control" name="codigoCarrera" value = "{{$alumno -> codigoCarrera}}">   
            </div>
            <div class="form-group">
                <label>Fecha de Nacimiento:</label>
                <input type="date" class="form-control" name="fechaNacimiento" value = "{{$alumno -> fechaNacimiento}}">   
            </div>
            <div class="form-group">
                <label>Numero de Cuenta:</label>
                <input type="text" class="form-control" name="numeroCuenta" value = "{{$alumno -> numeroCuenta}}">   
            </div>
            <a href="{{route('alumno.index')}}" class="btn btn-warning btn-lg">Volver</a>
            <button type="submit" class="btn btn-success btn-lg">Actualizar</button>
          </form>
    </div>
</body>
</html>