<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
  public function index(){
    return view('Auth.login');
  }
  public function store(Request $request){

    $seudonimo = request()->input('seudonimo');
    $encontrado = Usuarios::where('seudonimo', '=', $seudonimo)
                ->first();
    if(is_null($encontrado)){
      return 'el usuario no existe';
    }else{
      $clave = request()->input('clave');
      $clave_encontrada =$encontrado->clave;
      if(Hash::check($clave,$clave_encontrada)){
        //se abre la Sesion
        Auth::login($encontrado);
        return redirect()->to('/home');
      }else{
        return 'todo bad';
      }
    }
  }
  public function destroy(){
    auth()->logout();
    return redirect()->to('/');
  }
}
