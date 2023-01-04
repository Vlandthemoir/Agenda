<?php

namespace App\Http\Controllers;
use App\Models\Conocido;
use App\Models\Correo;
use App\Models\Telefono;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ApiController extends Controller
{
  public function buscarPorCorreo($correo){
    //resultado con logica mal
    /*
    //uso el correo para saber el id del conocido al que le pertenece
    $dato = Correo::where('correo','=',$correo)->value('conocido_id');
    //uso ese id para obtener el nombre del conocido
    $nombre = Conocido::where('id','=',$dato)->value('nombre');
    //uso el nombre del conocido en un inner join de usuarios con conocidos
    //para saber que usuarios tienen registrado a ese conocido
    $resultado = DB::table('usuarios')
                ->join('conocidos', 'usuarios.id','=','conocidos.usuario_id')
                ->where('conocidos.nombre', '=',$nombre)
                ->select('usuarios.nombre')
                ->get();
      */
      //resultado con logica bien
      /*
      $resultado = DB::table('usuarios')
                    ->join('conocidos','conocidos.usuario_id','=','usuarios.id')
                    ->join('correos','correos.conocido_id','=','conocidos.id')
                    ->where('correos.correo','=',$correo)
                    ->get();
      return response()->json($resultado);
      */
  }
  public function buscarPorTelefono($telefono){
    $resultado = DB::table('usuarios')
                  ->join('conocidos','conocidos.usuario_id','=','usuarios.id')
                  ->join('telefonos','telefonos.conocido_id','=','conocidos.id')
                  ->where('telefonos.telefono','=',$telefono)
                  ->get();
    return response()->json($resultado);
  }
  public function generarLibretaDeConocidos($id){

  }
}
