<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\tipoPago;

class tipoPagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getTipoPago(){
        $tipoPago=tipoPago::all();

        return $tipoPago;
    }
    
    public function crearTipoPago(Request $request){
        $input = $request->all();
        $tipoPago = new tipoPago();
        $tipoPago->id_tipoPago=$input["id_tipoPago"];
        $tipoPago->detalle=$input["detalle"];

        $tipoPago->save();
        return $tipoPago;
    }

    public function getTipoPagoPorID(Request $request){
        $input = $request->all();
        $id = $input["id_tipoPago"];
        $tipoPago = tipoPago::findOrFail($id);
        return $tipoPago;
    }

    public function actualizarTipoPago(Request $request){
        $input = $request->all();
        $tipoPago = tipoPago::findOrFail($input["id_tipoPago"]);
        $tipoPago->detalle=$input["detalle"];

        $tipoPago->save();
        return $tipoPago;
    }

    public function eliminarTipoPago(Request $request){
        $input = $request->all();
        $tipoPago = tipoPago::findOrFail($input["id_tipoPago"]);
        $tipoPago->delete();
        return "tipo de pago eliminado del registro";
    }
}
