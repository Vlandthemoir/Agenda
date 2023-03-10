<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call(UsuariosSeeder::class);
      $this->call(ConocidosSeeder::class);
      $this->call(CorreosSeeder::class);
      $this->call(TelefonosSeeder::class);

    }
}
