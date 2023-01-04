<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConocidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('conocidos')->insert([
        'usuario_id' => '1',
        'nombre' => 'Berenice',
      ]);
      DB::table('conocidos')->insert([
        'usuario_id' => '1',
        'nombre' => 'Bulmaro',
      ]);
      DB::table('conocidos')->insert([
        'usuario_id' => '2',
        'nombre' => 'Ciro',
      ]);
      DB::table('conocidos')->insert([
        'usuario_id' => '2',
        'nombre' => 'Consuelo',
      ]);
      DB::table('conocidos')->insert([
        'usuario_id' => '3',
        'nombre' => 'Deyanira',
      ]);
      DB::table('conocidos')->insert([
        'usuario_id' => '3',
        'nombre' => 'Dionicio',
      ]);
    }
}
