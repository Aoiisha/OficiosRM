<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\travajo;

class trabajoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getTrabajo(){
        $trabajo=trabajo::all();

        return $trabajo;
    }
    
    public function crearTrabajo(Request $request){
        $input = $request->all();
        $trabajo = new trabajo();
        $trabajo->id_trabajo=$input["id_trabajo"];
        $trabajo->nombre_trabajo=$input["nombre_trabajo"];
        $trabajo->categoria_la=$input["categoria_la"];

        $trabajo->save();
        return $trabajo;
    }

    public function getTrabajoPorID(Request $request){
        $input = $request->all();
        $id = $input["id_trabajo"];
        $trabajo = trabajo::findOrFail($id);
        return $trabajo;
    }

    public function actualizarTrabajo(Request $request){
        $input = $request->all();
        $trabajo = trabajo::findOrFail($input["id_trabajo"]);
        $trabajo->nombre_trabajo=$input["nombre_trabajo"];
        $trabajo->categoria_la=$input["categoria_la"];

        $trabajo->save();
        return $trabajo;
    }

    public function eliminarTrabajo(Request $request){
        $input = $request->all();
        $trabajo = trabajo::findOrFail($input["id_trabajo"]);
        $trabajoo->delete();
        return "tipo de pago eliminado del registro";
    }
}
