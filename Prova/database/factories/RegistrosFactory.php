<?php

namespace Database\Factories;

use App\Models\Registros;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegistrosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Registros::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pessoa_id' => Pessoas::factory(),
            'unidade_id' => Unidades::factory(),
            'vacina_id' => Vacinas::factory(),
            'doses' => $this->faker->randomElement([0, 1, 2]),
            'data' => $this->faker->date
        ];
    }
}
