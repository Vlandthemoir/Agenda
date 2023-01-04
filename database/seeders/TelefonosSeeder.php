<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TelefonosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('telefonos')->insert([
        'conocido_id' => '1',
        'telefono' => '9611011111',
        'tipo' => 'Publico',
      ]);
      DB::table('telefonos')->insert([
        'conocido_id' => '1',
        'telefono' => '9611021111',
        'tipo' => 'Privado',
      ]);
      DB::table('telefonos')->insert([
        'conocido_id' => '2',
        'telefono' => '9611031111',
        'tipo' => 'Publico',
      ]);
      DB::table('telefonos')->insert([
        'conocido_id' => '2',
        'telefono' => '9611041111',
        'tipo' => 'Publico',
      ]);
      DB::table('telefonos')->insert([
        'conocido_id' => '3',
        'telefono' => '9611051111',
        'tipo' => 'Publico',
      ]);
      DB::table('telefonos')->insert([
        'conocido_id' => '3',
        'telefono' => '9611061111',
        'tipo' => 'Publico',
      ]);
      DB::table('telefonos')->insert([
        'conocido_id' => '4',
        'telefono' => '9611071111',
        'tipo' => 'Publico',
      ]);
      DB::table('telefonos')->insert([
        'conocido_id' => '4',
        'telefono' => '9611081111',
        'tipo' => 'Publico',
      ]);
      DB::table('telefonos')->insert([
        'conocido_id' => '5',
        'telefono' => '9611091111',
        'tipo' => 'Publico',
      ]);
      DB::table('telefonos')->insert([
        'conocido_id' => '5',
        'telefono' => '9611101111',
        'tipo' => 'Publico',
      ]);
      DB::table('telefonos')->insert([
        'conocido_id' => '6',
        'telefono' => '9611111111',
        'tipo' => 'Publico',
      ]);
      /*
      DB::table('telefonos')->insert([
        'conocido_id' => '7',
        'telefono' => '9611011111',
        'tipo' => 'Publico',
      ]);
      DB::table('telefonos')->insert([
        'conocido_id' => '7',
        'telefono' => '9611021111',
        'tipo' => 'Privado',
      ]);*/
    }
}
