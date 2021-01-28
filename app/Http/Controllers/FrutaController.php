<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrutaController extends Controller
{
    public function index(){
        $frutas = DB::table('frutas')
            ->orderBy('id','desc')
            ->get();

        return view('fruta.index', array(
            'frutas'=>$frutas
        ));
    }

    public function details($id){
        $fruta = DB::table('frutas')->where('id','=',$id)->first();

        return view('fruta.detail',array(
           'fruta'=>$fruta
        ));
    }

    public function crear(){
        return view('fruta.create');
    }

    public function save(Request $request){
        $nombre = $request->input('nombre');
        $descripcion = $request->input('descripcion');
        $precio = $request->input('precio');
        $fecha = date('Y-m-d');

        $fruta = DB::table('frutas')->insert(array(
           'nombre'=>$nombre,
           'descripcion'=>$descripcion,
           'precio'=>$precio,
           'fecha'=>$fecha
        ));

        return redirect()->route('frutas')->with('status', 'Fruta creada correctamente');
    }

    public function delete($id){
        $fruta = DB::table('frutas')->where('id', $id)->delete();
        return redirect()->route('frutas')->with('status', 'Fruta borrada correctamente');
    }

    public function edit($id){
        //sacar el registro de la bd
        $fruta = DB::table('frutas')->where('id', $id)->first();

        //pasarle a la vista el objeto y rellenar el formulario
        return view('fruta.create', array(
            'fruta' => $fruta
        ));
    }

    public function update(Request $request){
        $id = $request->input('id');
        $nombre = $request->input('nombre');
        $descripcion = $request->input('descripcion');
        $precio = $request->input('precio');
        $fecha = date('Y-m-d');

        $fruta = DB::table('frutas')
            ->where('id', $id)
            ->update(array(
               'nombre'=>$nombre,
               'descripcion'=>$descripcion,
               'precio'=>$precio,
               'fecha'=>$fecha
            ));

        return redirect()->route('frutas')->with('status', 'Fruta actualizada correctamente');
    }
}
