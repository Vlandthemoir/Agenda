<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Conocido;


class ConocidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $datos = DB::table('conocidos')
                  ->select('id','nombre')
                  ->where('usuario_id', '=', auth()->user()->id)
                  ->get();
	    return view('Conocidos.view', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $encontrado = Auth::user();

      $conocido = new Conocido();
      $conocido->usuario_id = $encontrado->id;
      $conocido->nombre = $request->post('nombre');
      $conocido->save();
      return redirect()->route("conocido.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

      $conocido = Conocido::findOrFail($id);
      $this->authorize('update',$conocido);
      return view("Conocidos.update" , compact('conocido'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

      $conocido = Conocido::find($id);
      $this->authorize('update',$conocido);
  		$conocido->nombre = $request->input('nombre');
  		$conocido->save();
  		return redirect()->route("conocido.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      $conocido = Conocido::find($id);
      $this->authorize('delete',$conocido);
    	$conocido->delete();
    	return redirect()->route("conocido.index");
    }
}
