<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CorreosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('correos')->insert([
        'conocido_id' => '1',
        'correo' => 'berenice@gmail.com',
      ]);
      DB::table('correos')->insert([
        'conocido_id' => '2',
        'correo' => 'bulmaro@gmail.com',
      ]);
      DB::table('correos')->insert([
        'conocido_id' => '3',
        'correo' => 'ciro@gmail.com',
      ]);
      DB::table('correos')->insert([
        'conocido_id' => '4',
        'correo' => 'consuelo@gmail.com',
      ]);
      DB::table('correos')->insert([
        'conocido_id' => '5',
        'correo' => 'deyanira@gmail.com',
      ]);
      DB::table('correos')->insert([
        'conocido_id' => '6',
        'correo' => 'dioniocio@gmail.com',
      ]);
    }
}
