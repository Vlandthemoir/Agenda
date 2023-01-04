<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuarios extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
      'seudonimo',
      'clave',
      'nombre',
      'rol',
    ];
    //sobreescritura de las convenciones
    protected $table = 'usuarios';
    /**
    * The name of the "created at" column.
    *
    * @var string
    */
    const CREATED_AT = 'fecha_creado';
    /**
    * The name of the "updated at" column.
    *
    * @var string
    */
    const UPDATED_AT = 'fecha_modificado';

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
