<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conocido extends Model
{
    use HasFactory;
    protected $fillable = [
      'usuario_id',
      'nombre',
    ];
    //sobreescritura de las convenciones
    protected $table = 'conocidos';
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
}
