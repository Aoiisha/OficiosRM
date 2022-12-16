<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\fotografia;
use App\Models\album;

class fotografiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getFotografia(){
        $fotografia=fotografia::all();

        return $fotografia;
    }
    
    public function crearFotografia(Request $request){
        $input = $request->all();
        $fotografia = new fotografia();
        $fotografia->id_foto=$input["id_foto"];
        $fotografia->id_album=$input["id_album"];
        $fotografia->ruta_image=$input["ruta_image"];

        $fotografia->save();
        return $fotografia;
    }

    public function getTFotografiaPorID(Request $request){
        $input = $request->all();
        $id = $input["id_foto"];
        $fotografia = fotografia::findOrFail($id);
        return $fotografia;
    }

    public function getFotografiaPorAlbum(Request $request){
        $input = $request->all();
        $id = $input["id_album"];
        $fotografia = fotografia::where("id",$id)->get();
        return $fotografia;
    }

    public function actualizarFotografia(Request $request){
        $input = $request->all();
        $fotografia = fotografia::findOrFail($input["id_foto"]);
        $fotografia->ruta_image=$input["ruta_image"];

        $fotografia->save();
        return $fotografia;
    }

    public function eliminarFotografia(Request $request){
        $input = $request->all();
        $fotografia = fotografia::findOrFail($input["id_foto"]);
        $fotografia->delete();
        return "fotografia eliminada del registro";
    }
}
