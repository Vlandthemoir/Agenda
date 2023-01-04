<?php

namespace App\Policies;
use App\Models\Correo;
use App\Models\Conocido;
use App\Models\Usuarios;
use Illuminate\Auth\Access\HandlesAuthorization;

class CorreoPolicy
{
    use HandlesAuthorization;
/*
    public function index($id){
      $conocido = Conocido::findOrFail($id);
      if(auth()->user()->id == $conocido->usuario_id){
        return true;
      }else{
        return false;
      }
    }
    */
}
