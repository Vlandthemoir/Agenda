<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;

class RegistroController extends Controller
{
  public function index(){
    return view('Auth.register');
  }
  public function store(Request $request){
    $usuarios = new Usuarios();
    $usuarios->seudonimo = $request->post('seudonimo');
    $usuarios->nombre = $request->post('nombre');

    $clave = $request->post('clave');
    $claveEncriptada = bcrypt($clave);
    $usuarios->clave =$claveEncriptada;

    $usuarios->rol = 'Propietario';
    $usuarios->save();
    return redirect()->route("login.index");
  }
}
