<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Registros;

class RegistrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Registros::factory()->count(5)->create();
    }
}
