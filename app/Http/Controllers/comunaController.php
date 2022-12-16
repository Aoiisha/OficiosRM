<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\comuna;

class comunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getcomunas(){
        $comuna=comuna::all();

        return $comuna;
    }
    
    public function crearComuna(Request $request){
        $input = $request->all();
        $comuna = new comuna();
        $comuna->id_comuna=$input["id_comuna"];
        $comuna->nombre_comuna=$input["nombre_comuna"];
        $comuna->id_provincia=$input["id_provincia"];

        $comuna->save();
        return $comuna;
    }

    public function getComunaPorID(Request $request){
        $input = $request->all();
        $id = $input["id_comuna"];
        $comuna = comuna::findOrFail($id);
        return $comuna;
    }

    public function getComunaPorProvincia(Request $request){
        $input = $request->all();
        $id = $input["filtro"];
        $comuna = comuna::where("id",$id)->get();
        return $comuna;
    }

    public function actualizarComuna(Request $request){
        $input = $request->all();
        $comuna = comuna::findOrFail($input["id_comuna"]);
        $comuna->nombre_comuna=$input["nombre_comuna"];

        $comuna->save();
        return $comuna;
    }

    public function eliminarComuna(Request $request){
        $input = $request->all();
        $comuna = provincia::findOrFail($input["id_comuna"]);
        $comuna->delete();
        return "comuna eliminada del registro";
    }
}
