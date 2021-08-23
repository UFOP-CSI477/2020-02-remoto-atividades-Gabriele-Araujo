<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pessoas;
use SebastianBergmann\FileIterator\Factory;

class PessoasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pessoas::factory()->count(5)->create();
    }
}
