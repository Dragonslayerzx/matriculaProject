<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Agregar Alumno</title>
</head>
<br>
<body>
    <div class="container">
        <h1><b>Agregar nuevo alumno</b></h1>
        <form action="{{route('alumno.guardar')}}" method="POST"> <!-- al especificarle el metodo le decimos que viajara al sever y con la accion que viajara a ruta especificada-->
            @csrf
            <div class="form-group">
                <label>Nombre:</label>
                <input type="text" class="form-control" name="nombre">   
            </div>
            <div class="form-group">
                <label>Apellido:</label>
                <input type="text" class="form-control" name="apellido">   
            </div>  
            <div class="form-group">
                <label>Correo:</label>
                <input type="text" class="form-control" name="correo">   
            </div>
            <div class="form-group">
                <label>Telefono:</label>
                <input type="text" class="form-control" name="telefono">   
            </div>
            <div class="form-group">
                <label>Direccion:</label>
                <input type="text" class="form-control" name="direccion">   
            </div>
            <div class="form-group">
                <label>Codigo de Carrera:</label>
                <input type="text" class="form-control" name="codigoCarrera">   
            </div>
            <div class="form-group">
                <label>Fecha de Nacimiento:</label>
                <input type="date" class="form-control" name="fechaNacimiento">   
            </div>
            <div class="form-group">
                <label>Numero de Cuenta:</label>
                <input type="text" class="form-control" name="numeroCuenta">   
            </div>
            <div class="form-group">
            <a href="{{route('alumno.index')}}" class="btn btn-danger btn-lg">Cancelar</a>
            <button type="submit" class="btn btn-success btn-lg">Agregar</button>
            </div>
          </form>
    </div>
</body>
</html>