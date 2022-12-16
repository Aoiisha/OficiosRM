<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\documento;
use App\Models\tipoDocumento;
use App\Models\trabajador;

class documentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getDocumento(){
        $documento=documento::all();

        return $documento;
    }
    
    public function crearDocumento(Request $request){
        $input = $request->all();
        $documento = new documento();
        $documento->codigo_doc=$input["codigo_doc"];
        $documento->detalle=$input["detalle"];
        $documento->archivo=$input["archivo"];
        $documento->N_asociado = $input["N_asociado"];
        $documento->id_tipoDoc=$input["id_tipoDoc"];

        $documento->save();
        return $documento;
    }

    public function getDocumentoPorCod(Request $request){
        $input = $request->all();
        $id = $input["codigo_doc"];
        $documento = documento::findOrFail($id);
        return $documento;
    }

    public function getDocumentoPorTipo(Request $request){
        $input = $request->all();
        $id = $input["id_tipoDoc"];
        $documento = documento::where("id",$id)->get();
        return $documento;
    }

    public function actualizarDocumento(Request $request){
        $input = $request->all();
        $documento = documento::findOrFail($input["codigo_doc"]);
        $documento->detalle=$input["detalle"];
        $documento->archivo=$input["archivo"];

        $documento->save();
        return $documentod;
    }

    public function eliminarDocumento(Request $request){
        $input = $request->all();
        $documento = documento::findOrFail($input["codigo_doc"]);
        $documento->delete();
        return "documento eliminada del registro";
    }
}
