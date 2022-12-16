<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\album;
use App\Models\trabajador;

class albumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAlbum(){
        $album=album::all();

        return $album;
    }
    
    public function crearAlbum(Request $request){
        $input = $request->all();
        $album = new album();
        $album->id_album=$input["id_album"];
        $album->N_asociado=$input["N_asociado"];
        $album->nombre_album=$input["nombre_album"];

        $album->save();
        return $album;
    }

    public function getAlbumPorId(Request $request){
        $input = $request->all();
        $id = $input["id_album"];
        $album = album::findOrFail($id);
        return $album;
    }

    public function actualizarAlbum(Request $request){
        $input = $request->all();
        $album = album::findOrFail($input["id_album"]);
        $album->nombre_album=$input["nombre_album"];

        $album->save();
        return $album;
    }

    public function eliminarAlbum(Request $request){
        $input = $request->all();
        $album = album::findOrFail($input["id_album"]);
        $album->delete();
        return "album eliminada del registro";
    }
}
