<?php

namespace Database\Factories;

use App\Models\Torneos;
use Illuminate\Database\Eloquent\Factories\Factory;

class TorneosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Torneos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $modalidades = ['Individual', 'Dobles', 'Individuales y Dobles'];
        $categorias = ['Master 1000', 'Master 200', 'Master 350'];
        $superficies = ['Dura', 'Hierba', 'Arcilla'];

        // Shuffle the modalidades array to randomize the order
        shuffle($categorias);

        return [
            'ubicacion' => $this->faker->city,
            'modalidad' => $modalidad = array_pop($modalidades),
            'categoria' => $categoria = $this->faker->randomElement($categorias),
            'superficie' => $this->faker->randomElement($superficies),
            'vacantes' => $this->faker->numberBetween(1, 100),
            'premios' => $this->faker->sentence,
            'fecha_inicio' => $this->faker->dateTimeBetween('now', '+1 year')->format('Y-m-d'),
            'fecha_fin' => $this->faker->dateTimeBetween('+1 year', '+2 years')->format('Y-m-d'),
            'imagen' => 'https://placeholder.com/300x300',
        ];
    }
}
