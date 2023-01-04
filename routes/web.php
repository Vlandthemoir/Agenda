<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ConocidoController;
use App\Http\Controllers\CorreoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\TelefonoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
return view('home');
})
->middleware('auth')
->name('home.index');
/*rutas para el login*/
Route::get('/',[LoginController::class,'index'])
->middleware('guest')
->name('login.index');
Route::post('/login',[LoginController::class,'store'])
->name('login.store');
Route::get('/logout',[LoginController::class,'destroy'])
->name('login.destroy');
/*rutas para el registro*/
Route::get('/registro',[RegistroController::class,'index'])
->name('register.index');
Route::post('/register-usuarios',[RegistroController::class,'store'])
->name('register.store');
/*rutas para los conocidos*/
Route::get('/conocido', [ConocidoController::class, 'index'])
->middleware('auth')
->name('conocido.index');
Route::post('/conocido-create', [ConocidoController::class, 'store'])
->middleware('auth')
->name('conocido.store');
Route::get('/conocido-edit/{id}', [ConocidoController::class, 'edit'])
->middleware('auth')
->name('conocido.edit');
Route::put('/conocido-update/{id}', [ConocidoController::class, 'update'])
->middleware('auth')
->name('conocido.update');
Route::delete('/conocido-delete/{id}',[ConocidoController::class,'destroy'])
->middleware('auth')
->name('conocido.delete');
/*rutas para los correos de los conocidos*/
Route::get('/correo/{id}', [CorreoController::class, 'index'])
->middleware('auth')
->name('correo.index');
Route::post('/correo-create/{id}', [CorreoController::class, 'store'])
->middleware('auth')
->name('correo.store');
Route::get('/correo-edit/{id}', [CorreoController::class, 'edit'])
->middleware('auth')
->name('correo.edit');
Route::put('/correo-update/{id}', [CorreoController::class, 'update'])
->middleware('auth')
->name('correo.update');
Route::delete('/correo-delete/{id}',[CorreoController::class,'destroy'])
->middleware('auth')
->name('correo.delete');
/*rutas para los telefonos de los conocidos*/
Route::get('/telefono/{id}', [TelefonoController::class, 'index'])
->middleware('auth')
->name('telefono.index');
Route::post('/telefono-create/{id}', [TelefonoController::class, 'store'])
->middleware('auth')
->name('telefono.store');
Route::get('/telefono-edit/{id}', [TelefonoController::class, 'edit'])
->middleware('auth')
->name('telefono.edit');
Route::put('/telefono-update/{id}', [TelefonoController::class, 'update'])
->middleware('auth')
->name('telefono.update');
Route::delete('/telefono-delete/{id}',[TelefonoController::class,'destroy'])
->middleware('auth')
->name('telefono.delete');
