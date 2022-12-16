<?php

namespace App\Http\Controllers;
//REVISAR
use Illuminate\Http\Request;

use App\Models\User;


class Datos{
    public $cod_usuario;
    public $cod_trabajador;
    public $cod_ofertante;

    public function __construct($cod_ofertante, $cod_trabajador, $cod_usuario){}
}

class UsersController extends Controller
{
    public function getUsuarios(){
        $usuarios = User::all();
        return $usuarios;
    }
    public function getUsuarioPorId(Request $request){
        $input = $request->all();
        $usuario = User::findOrFail($input["id"]);
        return $usuario;
    }
    public function getUserPorIdDatosTO(Request $request){
        $input = $request->all();
        
        $usuario = User::findOrFail($input["id"]);
        $ofertante = Ofertante::where('cod_usuario',$input["id"])->get()->first();
        $datos_completos = (object)[
            "cod_usuario"=>$usuario['id'],
            "name" => $usuario['name'],
            "apellido" => $usuario['apellido'],
            "fecha_nac" => $usuario['fecha_nac'],
            "email" => $usuario['email'],
            "estado" => $usuario['estado'],
        ];
        
        return $datos_completos;
    }
    public function actualizarUsuario(Request $request){
        $input = $request->all();
        $usuario = User::findOrFail($input["id"]);
        $antiguo = $usuario;
        $usuario->name=$input["name"];
        $usuario->apellido = $input["apellido"];
        $usuario->sexo = $input["sexo"];
        $usuario->fecha_nac = $input["fecha_nac"];
        $usuario->email = $antiguo->email;
        $usuario->estado = $antiguo->estado;
        $usuario->password = $antiguo->password;
        $usuario->save();

        return $usuario;
    }


    public function desactivarUsuario(Request $request){
        $input = $request->all();
        $usuario = User::findOrFail($input["id"]);

        $usuario_antiguo = $usuario;
        $usuario->estado = $input["estado"];
        $usuario->save();

        return $usuario;
    }

    public function activarUsuario(Request $request){
        $input = $request->all();
        $usuario = User::findOrFail($input["id"]);

        $usuario_antiguo = $usuario;
        $usuario->estado = $input["estado"];
        $usuario->save();
        
        return $usuario;
    }    
    }