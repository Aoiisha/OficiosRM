<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\provincia;

class provinciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getprovincias(){
        $provincia=provincia::all();

        return $provincia;
    }
    
    public function crearProvincia(Request $request){
        $input = $request->all();
        $provincia = new provincia();
        $provincia->id_comuna=$input["id_provincia"];
        $provincia->nombre_comuna=$input["nombre_provincia"];

        $provincia->save();
        return $provincia;
    }

    public function getProvinciaPorID(Request $request){
        $input = $request->all();
        $id = $input["id_provincia"];
        $provincia = provincia::findOrFail($id);
        return $provincia;
    }

    public function actualizarProvincia(Request $request){
        $input = $request->all();
        $provincia = provincia::findOrFail($input["id_provincia"]);
        $provincia->nombre_provincia=$input["nombre_provincia"];

        $provincia->save();
        return $provincia;
    }

    public function eliminarProvincia(Request $request){
        $input = $request->all();
        $provincia = provincia::findOrFail($input["id_provincia"]);
        $provincia->delete();
        return "provincia eliminada del registro";
    }
}
