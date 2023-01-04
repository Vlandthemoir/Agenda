<?php

namespace App\Policies;

use App\Models\Conocido;
use App\Models\Usuarios;
use Illuminate\Auth\Access\HandlesAuthorization;

class ConocidoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Usuarios $usuarios)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @param  \App\Models\Conocido  $conocido
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Usuarios $usuarios, Conocido $conocido)
    {
      if ($conocido->usuario_id == $usuarios->id)
          return true;
      else
          return false;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Usuarios $usuarios)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @param  \App\Models\Conocido  $conocido
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Usuarios $usuarios, Conocido $conocido)
    {
      return $conocido->usuario_id == $usuarios->id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @param  \App\Models\Conocido  $conocido
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Usuarios $usuarios, Conocido $conocido)
    {
      return $conocido->usuario_id == $usuarios->id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @param  \App\Models\Conocido  $conocido
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Usuarios $usuarios, Conocido $conocido)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @param  \App\Models\Conocido  $conocido
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Usuarios $usuarios, Conocido $conocido)
    {
        //
    }
}
