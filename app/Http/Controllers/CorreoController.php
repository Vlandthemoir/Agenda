<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Correo;
use App\Models\Conocido;
class CorreoController extends Controller
{
  public function index($id){
    //obtengo todos los datos del conocido al que le pertenece ese recurso
    $conocido = Conocido::findOrFail($id);
    //comparo esos datos para saber si puede acceder al recurso
    if(auth()->user()->id == $conocido->usuario_id){
      $datos = DB::table('correos')
                  ->select('id','correo')
                  ->where('conocido_id', '=',$id)
                  ->get();
      return view('Correos.view',compact('datos','conocido'));
    }else{
      return 'No tienes permitido acceder a este recurso';
    }

  }
  public function store(Request $request,$conocido){
    //obtengo los datos del conocido al que se le creara el correo
    $datos = Conocido::findOrFail($conocido);
    //verifico si conocido pertenece al usuario
    if(auth()->user()->id == $datos->usuario_id){
      $correo = new Correo();
      $correo->conocido_id = $conocido;
      $correo->correo = $request->post('correo');
      $correo->save();
      return redirect()->route("correo.index",$conocido);
    }else{
      return 'No tienes permitido crear este recurso';
    }

  }
  public function edit($id){
    //se obtienen todos los datos del correo
    $correo = Correo::findOrFail($id);
    //obtengo el dato del conocido al que le pertenece el correo
    $conocido = Conocido::findOrFail($correo->conocido_id);
    if(auth()->user()->id == $conocido->usuario_id){
      return view("Correos.update" , compact('correo'));
    }else{
      return 'No tienes permitido acceder a este recurso';
    }

  }
  public function update(Request $request, $id){
    //obtengo el id del conocido en el que estaba
    $conocido = DB::table('correos')
                ->where('id', '=',$id)
                ->value('conocido_id');
    //compruebo si puede actualizar el correo
    if(auth()->user()->id == $conocido){
      $correo = Correo::find($id);
      $correo->correo = $request->input('correo');
      $correo->save();
      return redirect()->route("correo.index",$conocido);
    }else{
      return 'No tienes permitido modificar a este recurso';
    }

  }
  public function destroy($id){
    //obtengo el id del conocido en el que estaba
    $conocido = DB::table('correos')
                ->where('id', '=',$id)
                ->value('conocido_id');
    //compruebo si puede eliminar el correo
    if(auth()->user()->id == $conocido){
      $correo = Correo::find($id);
      $correo->delete();
      return redirect()->route("correo.index",$conocido);
    }else{
      return 'No tienes permitido eliminar a este recurso';
    }

  }
}
