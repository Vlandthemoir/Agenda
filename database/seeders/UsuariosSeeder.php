<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('usuarios')->insert([
        'seudonimo' => 'benito',
        'clave' => bcrypt('123'),
        'nombre' => 'Benito Juarez Garcia',
        'rol' => 'Propietario',
      ]);
      DB::table('usuarios')->insert([
        'seudonimo' => 'carlos',
        'clave' => bcrypt('123'),
        'nombre' => 'Carlos 1 de España',
        'rol' => 'Propietario',
      ]);
      DB::table('usuarios')->insert([
        'seudonimo' => 'daniel',
        'clave' => bcrypt('123'),
        'nombre' => 'Daniel Jacob Radcliffe',
        'rol' => 'Propietario',
      ]);
      DB::table('usuarios')->insert([
        'seudonimo' => 'admin',
        'clave' => bcrypt('123'),
        'nombre' => 'Administrador',
        'rol' => 'Administrador',
      ]);
    }
}
