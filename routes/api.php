<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
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
//rutas para los metodos de busqueda y generacion
Route::get('buscarPorCorreo/{correo}',[ApiController::class,'buscarPorCorreo']);
Route::get('buscarPorTelefono/{telefono}',[ApiController::class,'buscarPorTelefono']);
Route::get('generarLibretaDeConocidos/{id}',[ApiController::class,'generarLibretaDeConocidos']);
