<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    use HasFactory;
    protected $fillable = [
      'conocido_id',
      'telefono',
      'tipo',
    ];
    //sobreescritura de las convenciones
    protected $table = 'telefonos';
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
}
