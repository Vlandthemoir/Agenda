<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Telefono;
use App\Models\Conocido;
class TelefonoController extends Controller
{
  public function index($id){
    //obtengo todos los datos del conocido al que le pertenece ese recurso
    $conocido = Conocido::findOrFail($id);
    //comparo esos datos para saber si puede acceder al recurso
    if(auth()->user()->id == $conocido->usuario_id){
      $datos = DB::table('telefonos')
                  ->select('id','telefono','tipo')
                  ->where('conocido_id', '=',$id)
                  ->get();
      return view('Telefonos.view',compact('datos','conocido'));
    }else{
      return 'No tienes permitido acceder a este recurso';
    }
  }
  public function store(Request $request,$conocido){
    //obtengo los datos del conocido al que se le creara el telefono
    $datos = Conocido::findOrFail($conocido);
    //verifico si conocido pertenece al usuario
    if(auth()->user()->id == $datos->usuario_id){
      $telefono = new Telefono();
      $telefono->conocido_id = $conocido;
      $telefono->telefono = $request->post('telefono');
      $telefono->tipo = $request->post('tipo');
      $telefono->save();
      return redirect()->route("telefono.index",$conocido);
    }else{
      return 'No tienes permitido crear este recurso';
    }
  }
  public function edit($id){
    //se obtienen todos los datos del telefono
    $telefono = Telefono::findOrFail($id);
    //obtengo el dato del conocido al que le pertenece el telefono
    $conocido = Conocido::findOrFail($telefono->conocido_id);
    if(auth()->user()->id == $conocido->usuario_id){
      return view("Telefonos.update" , compact('telefono'));
    }else{
      return 'No tienes permitido acceder a este recurso';
    }
  }
  public function update(Request $request, $id){
    //obtengo el id del conocido en el que estaba
    $conocido = DB::table('telefonos')
                ->where('id', '=',$id)
                ->value('conocido_id');
    //compruebo si puede actualizar el telefono
    if(auth()->user()->id == $conocido){
      $telefono = Telefono::find($id);
      $telefono->telefono = $request->input('telefono');
      $telefono->tipo = $request->input('tipo');
      $telefono->save();
      return redirect()->route("telefono.index",$conocido);
    }else{
      return 'No tienes permitido modificar a este recurso';
    }
  }
  public function destroy($id){
    //obtengo el id del conocido en el que estaba
    $conocido = DB::table('telefonos')
                ->where('id', '=',$id)
                ->value('conocido_id');
    //compruebo si puede eliminar el telefono
    if(auth()->user()->id == $conocido){
      $telefono = Telefono::find($id);
      $telefono->delete();
      return redirect()->route("telefono.index",$conocido);
    }else{
      return 'No tienes permitido eliminar a este recurso';
    }
  }
}
