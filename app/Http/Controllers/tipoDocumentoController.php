<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\tipoDocumento;

class tipoDocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getTipoDocumento(){
        $tipoDocumento=tipoDocumento::all();

        return $tipoDocumento;
    }
    
    public function crearTipoDocumento(Request $request){
        $input = $request->all();
        $tipoDocumento = new tipoDocumento();
        $tipoDocumento->id_tipoDoc=$input["id_tipoDoc"];
        $tipoDocumento->detalle=$input["detalle"];

        $tipoDocumento->save();
        return $tipoDocumento;
    }

    public function getTipoDocumentoPorID(Request $request){
        $input = $request->all();
        $id = $input["id_tipoDoc"];
        $tipoDocumento = tipoDocumento::findOrFail($id);
        return $tipoDocumento;
    }

    public function actualizarTipoDocumento(Request $request){
        $input = $request->all();
        $tipoDocumento = tipoDocumento::findOrFail($input["id_tipoDoc"]);
        $tipoDocumento->detalle=$input["detalle"];

        $tipoDocumento->save();
        return $tipoDocumento;
    }

    public function eliminarTipoDocumento(Request $request){
        $input = $request->all();
        $tipoDocumento = tipoDocumento::findOrFail($input["id_tipoDoc"]);
        $tipoDocumento->delete();
        return "tipo de documento eliminado del registro";
    }
}

