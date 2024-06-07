<?php

namespace Database\Factories;

use App\Models\Tenistas;
use Illuminate\Database\Eloquent\Factories\Factory;

class TenistasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tenistas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'pais' => $this->faker->country,
            'fecha_nacimiento' => $this->faker->date(),
            'edad' => $this->faker->numberBetween(18, 40),
            'altura' => $this->faker->numberBetween(160, 200),
            'peso' => $this->faker->numberBetween(50, 100),
            'fecha_debut' => $this->faker->date(),
            'mano' => $this->faker->randomElement(['Derecha', 'Izquierda']),
            'reves' => $this->faker->randomElement(['Una mano', 'Dos manos']),
            'entrenador' => $this->faker->name,
            'dinero_ganado' => $this->faker->numberBetween(10000, 1000000),
            'mejor_ranking' => $this->faker->numberBetween(1, 100),
            'num_victorias' => $this->faker->numberBetween(50, 500),
            'num_derrotas' => $this->faker->numberBetween(10, 200),
            'imagen' => 'https://placeholder.com/300x300', // Default image URL
        ];
    }
}
