<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    public function index($nombre = null){
        $nom = $nombre;
        $titulo = 'Listado de mis peliculas';
        return view('pelicula.index', array(
            'titulo'=>$titulo,
            'nombre'=>$nombre
        ));
    }

    public function detalle($year = null){
        $tittle = "Detalle de la pelicula";
        return view('pelicula.detalle', array(
          'tittle'=>$tittle
       ));
    }

    public function redirigir(){
        return redirect('/');
        //return redirect()->route('pelicula');
    }
    public function formulario(){
        return view('pelicula.formulario');
    }

    public function recibir(Request $request){
        //obtener los datos es necesario usar la clase de laravel request

        $nombre = $request->input('nombre');
        $email = $request->input('email');
        var_dump($nombre);

        return view('pelicula.recibir', array(
            'nombre'=>$nombre,
            'email'=>$email
        ));
    }
}
