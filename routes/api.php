<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\albumController;
use App\Http\Controllers\comunaController;
use App\Http\Controllers\documentoController;
use App\Http\Controllers\evaluacionController;
use App\Http\Controllers\fotografiaController;
use App\Http\Controllers\provinciaController;
use App\Http\Controllers\solicitudController;
use App\Http\Controllers\tipoDocumentoController;
use App\Http\Controllers\tipoPagoController;
use App\Http\Controllers\trabajoController;
use App\Http\Controllers\transaccionController;
use App\Http\Controllers\userController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//ALBUMCONTROLLERS
//ESPERANDO REVISION
Route::get("album/get",[albumController::class,"getAlbum"]);
Route::get("album/get/id",[albumController::class,"getAlbumPorId"]);
Route::post("album/delete",[albumController::class,"eliminarAlbum"]);
Route::post("album/update",[albumController::class,"actualizarAlbum"]);
Route::post("album/create",[albumController::class,"crearAlbum"]);

//COMUNACONTROLLERS
//ESPERANDO REVISION
Route::get("comuna/get",[comunaController::class,"getcomunas"]);
Route::get("comuna/get/id",[comunaController::class,"getComunaPorID"]);
Route::get("comuna/get/id_provincia",[comunaController::class,"getComunaPorProvincia"]);
Route::post("comuna/delete",[comunaController::class,"eliminarComuna"]);
Route::post("comuna/update",[comunaController::class,"actualizarComuna"]);
Route::post("comuna/create",[comunaController::class,"crearComuna"]);

//DOCUMENTOCONTROLLERS
//ESPERANDO REVISION
Route::get("documento/get",[documentoController::class,"getDocumento"]);
Route::get("documento/get/cod",[documentoController::class,"getDocumentoPorCod"]);
Route::get("documento/get/tipo",[documentoController::class,"getDocumentoPorTipo"]);
Route::post("documento/delete",[documentoController::class,"eliminarDocumento"]);
Route::post("documento/update",[documentoController::class,"actualizarDocumento"]);
Route::post("documento/create",[documentoController::class,"crearDocumento"]);

//EVALUACIONCONTROLLERS
//ESPERANDO DESARROLLO



//FOTOGRAFIACONTROLLERS
//ESPERANDO REVISION
Route::get("fotografia/get",[fotografiaController::class,"getFotografia"]);
Route::get("fotografia/get/id",[fotografiaController::class,"getTFotografiaPorID"]);
Route::get("fotografia/get/album",[fotografiaController::class,"getFotografiaPorAlbum"]);
Route::post("fotografia/delete",[fotografiaController::class,"eliminarFotografia"]);
Route::post("fotografia/update",[fotografiaController::class,"actualizarFotografia"]);
Route::post("fotografia/create",[fotografiaController::class,"crearFotografia"]);

//PROVINCIACONTROLLERS
//ESPERANDO REVISION
Route::get("[provincia/get",[provinciaController::class,"getprovincias"]);
Route::get("[provincia/get/id",[provinciaController::class,"getProvinciaPorID"]);
Route::post("[provincia/delete",[provinciaController::class,"eliminarProvincia"]);
Route::post("[provincia/update",[provinciaController::class,"actualizarProvincia"]);
Route::post("[provincia/create",[provinciaController::class,"crearProvincia"]);

//SOLICITUDCONTROLLERS
//ESPERANDO REVISION 
Route::get("solicitud/get",[solicitudController::class,"getSolicitudes"]);
Route::get("solicitud/get/N_solicitud",[solicitudController::class,"getSolicitudPorN"]);
Route::get("solicitud/get/usuario",[solicitudController::class,"getSolicitudesPorUsuario"]);
Route::post("solicitud/delete",[solicitudController::class,"eliminarReclamo"]);
Route::post("solicitud/update",[solicitudController::class,"actualizarSolicitud"]);
Route::post("solicitud/create",[solicitudController::class,"crearSolicitud"]);

//TIPODOCUMENTOCONTROLLERS
//ESPERANDO REVISION
Route::get("[tipoDocumento/get",[tipoDocumentoController::class,"getTipoDocumento"]);
Route::get("[tipoDocumento/get/id",[tipoDocumentoController::class,"getTipoDocumentoPorID"]);
Route::post("[tipoDocumento/delete",[tipoDocumentoController::class,"eliminarTipoDocumento"]);
Route::post("[tipoDocumento/update",[tipoDocumentoController::class,"actualizarTipoDocumento"]);
Route::post("[tipoDocumento/create",[tipoDocumentoController::class,"crearTipoDocumento"]);

//TIPOPAGOCONTROLLERS
//ESPERANDO REVISION
Route::get("[tipoPago/get",[tipoPagoController::class,"getTipoPago"]);
Route::get("[tipoPago/get/id",[tipoPagoController::class,"getTipoPagoPorID"]);
Route::post("[tipoPago/delete",[tipoPagoController::class,"eliminarTipoPago"]);
Route::post("[tipoPago/update",[tipoPagoController::class,"actualizarTipoPago"]);
Route::post("[tipoPago/create",[tipoPagoController::class,"crearTipoPago"]);

//TRABAJADORCONTROLLERS
//ESPERANDO DESARROLLO

//TRABAJOCONTROLLERS
//ESPERANDO REVISION
Route::get("[trabajo/get",[trabajoController::class,"getTrabajo"]);
Route::get("[trabajo/get/id",[trabajoController::class,"getTrabajoPorID"]);
Route::post("[trabajo/delete",[trabajoController::class,"eliminarTrabajo"]);
Route::post("[trabajo/update",[trabajoController::class,"actualizarTrabajo"]);
Route::post("[trabajo/create",[trabajoController::class,"crearTrabajo"]);

//TRANSACCIONCONTROLLERS
//ESPERANDO DESARROLLO

//USERCONTROLLERS
//ESPERANDO REVISION
Route::get("users/get/id",[UsersController::class,"getUsuarioPorId"]);
Route::get("users/get/datos/completos",[UsersController::class,"getUserPorIdDatosTO"]);
Route::get("users/get",[UsersController::class,"getUsuarios"]);
Route::post("users/update",[UsersController::class,"actualizarUsuario"]);
Route::post("users/delete",[UsersController::class,"eliminarUsuario"]);
Route::post("users/desactivar",[UsersController::class,"desactivarUsuario"]);
Route::post("users/activar",[UsersController::class,"activarUsuario"]);