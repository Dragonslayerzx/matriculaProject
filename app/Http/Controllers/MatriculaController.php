<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class MatriculaController extends Controller
{
    //
    public function index(){
        //metodo que devuelve todos lso registros en la base de datos de la tabla mapeada en el modelo Alumno
        $alumnos = Alumno::all(); 
        //Ahora le pasamos esos parametros a las vistas
        // echo $alumnos; //comprobamos que nos trae las datos
        return view('home', compact('alumnos')); //mandamos un arreglo
    }

    public function crear(){
        return view('add');
    }

    public function guardar(Request $request){
        $nvoAlumno = new Alumno();
        $nvoAlumno->nombre = $request->input('nombre');
        $nvoAlumno->apellido = $request->input('apellido');
        $nvoAlumno->correo = $request->input('correo');
        $nvoAlumno->telefono = $request->input('telefono');
        $nvoAlumno->direccion = $request->input('direccion');
        $nvoAlumno->codigoCarrera = $request->input('codigoCarrera');
        $nvoAlumno->fechaNacimiento = $request->input('fechaNacimiento');
        $nvoAlumno->numeroCuenta = $request->input('numeroCuenta');
        $nvoAlumno->save();
        return redirect('/alumnos');
    }

    public function editar($id){
        $alumno = Alumno::find($id);
        return view('edit', compact('alumno')); //Recordar pasar la info a las vistas
    }

    public function actualizar(Request $request, $id){
        $alumno = Alumno::find($id); //aqui recuperamos el objeto a actualizar
        //no necesitamos instanciar cuando el objeto ya existe
        $alumno->nombre = $request->input('nombre');
        $alumno->apellido = $request->input('apellido');
        $alumno->correo = $request->input('correo');
        $alumno->telefono = $request ->input('telefono');
        $alumno->direccion = $request->input('direccion');
        $alumno->codigoCarrera = $request->input('codigoCarrera');
        $alumno->fechaNacimiento = $request->input('fechaNacimiento');
        $alumno->numeroCuenta = $request->input('numeroCuenta');
        $alumno->save(); //el save se da cuenta que el registro existe por tanto solo lo actualiza
        return redirect('/alumnos');
    }

    public function eliminar($id){
        $alumno = Alumno::find($id);
        return view('eliminar', compact('alumno'));
    }

    public function destroy($id){
        $alumno = Alumno::find($id);
        $alumno->delete();
        return redirect('/alumnos');
    }
}
