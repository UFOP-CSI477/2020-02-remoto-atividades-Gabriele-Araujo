<?php

namespace Database\Factories;

use App\Models\Vacinas;
use Illuminate\Database\Eloquent\Factories\Factory;

class VacinasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vacinas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    
    

    public function definition()
    {
        $nome = $this->faker->randomElement(['CoronaVac', 'AstraZeneca', 'Pfizer', 'Janssen']);

        if($nome == 'CoronaVac'){
            $fabricante = 'Sinovac';
            $doses = 2;
        } else if($nome == 'AstraZeneca'){
            $fabricante = 'Universidade de Oxford';
            $doses = 2;
        } else if($nome == 'Janssen'){
            $fabricante = 'Janssen';
            $doses = 1;
        } else {
            $fabricante = 'Pfizer';
            $doses = 2;
        }
    
        return [
            'nome' => $nome,
            'fabricante' => $fabricante,
            'doses' => $doses
        ];
    }
}
