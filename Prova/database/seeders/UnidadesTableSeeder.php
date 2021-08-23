<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Unidades;

class UnidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Unidades::factory()->count(5)->create();
    }
}
