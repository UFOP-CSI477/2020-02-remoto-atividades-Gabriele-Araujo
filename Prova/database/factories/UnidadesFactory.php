<?php

namespace Database\Factories;

use App\Models\Unidades;
use Illuminate\Database\Eloquent\Factories\Factory;

class UnidadesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Unidades::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->randomElement(['Hospital A', 'Posto de Saúde A', 'Centro de Saúde A', 'Hospital B', 'Posto de Saúde B', 'Centro de Saúde B', 'Hospital C', 'Posto de Saúde C', 'Centro de Saúde C']),
            'bairro' => $this->faker->streetName,
            'cidade' => $this->faker->city
        ];
    }
}
