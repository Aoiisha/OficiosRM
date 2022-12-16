<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\solicitud;
use App\Models\users;

class solicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getSolicitudes(){
        $solicitud=solicitud::all();

        return $solicitud;
    }
    
    public function crearSolicitud(Request $request){
        $input = $request->all();
        $solicitud = new solicitud();
        $solicitud->id=$input["id"];
        $solicitud->id_tipoSol=$input["id_tipoSol"];
        $solicitud->descripcion=$input["descripcion"];
        $solicitud->img1 = $input["img1"];
        $solicitud->img2=$input["img2"];
        $solicitud->img3=$input["img3"];

        $solicitud->save();
        return $solicitud;
    }

    public function getSolicitudPorN(Request $request){
        $input = $request->all();
        $id = $input["N_solicitud"];
        $solicitud = solicitud::findOrFail($id);
        return $solicitud;
    }

    public function getSolicitudesPorUsuario(Request $request){
        $input = $request->all();
        $id = $input["filtro"];
        $solicitud = solicitud::where("id",$id)->get();
        return $solicitud;
    }

    public function actualizarSolicitud(Request $request){
        $input = $request->all();
        $solicitud = solicitud::findOrFail($input["N_solicitud"]);
        $solicitud->fecha_respuesta=$input["fecha_respuesta"];
        $solicitud->contenido_respuesta=$input["contenido_respuesta"];
        $solicitud->id=$input["id"]; //del administrador que respondio

        $solicitud->save();
        return $solicitud;
    }

    public function eliminarReclamo(Request $request){
        $input = $request->all();
        $solicitud = solicitud::findOrFail($input["N_solicitud"]);
        $solicitud->delete();
        return "solicitud eliminada del registro";
    }
}

