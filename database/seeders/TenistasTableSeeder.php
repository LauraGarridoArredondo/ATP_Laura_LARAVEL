<?php

namespace Database\Seeders;

use App\Models\Tenistas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TenistasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tenistas::truncate();
        DB::table('tenistas')->insert([
            [
                'id' => 1,
                'nombre' => 'Cristiano',
                'pais' => 'Portugal',
                'fecha_nacimiento' => '1985-02-05',
                'edad' => 33,
                'altura' => 185,
                'peso' => 80,
                'fecha_debut' => '2022-01-01',
                'mano' => 'diestro',
                'reves' => 'una_mano',
                'entrenador' => 'Cristiano',
                'dinero_ganado' => 100000,
                'mejor_ranking' => 1,
                'num_victorias' => 10,
                'num_derrotas' => 0,
                'imagen' => 'https://',
            ],
            [
                'id' => 2,
                'nombre' => 'Messi',
                'pais' => 'Argentina',
                'fecha_nacimiento' => '1985-02-05',
                'edad' => 33,
                'altura' => 185,
                'peso' => 80,
                'fecha_debut' => '2022-01-01',
                'mano' => 'diestro',
                'reves' => 'una_mano',
                'entrenador' => 'Cristiano',
                'dinero_ganado' => 100000,
                'mejor_ranking' => 1,
                'num_victorias' => 10,
                'num_derrotas' => 0,
                'imagen' => 'https://',
            ],
            [
                'id' => 3,
                'nombre' => 'Neymar',
                'pais' => 'Brasil',
                'fecha_nacimiento' => '1985-02-05',
                'edad' => 33,
                'altura' => 185,
                'peso' => 80,
                'fecha_debut' => '2022-01-01',
                'mano' => 'diestro',
                'reves' => 'una_mano',
                'entrenador' => 'Cristiano',
                'dinero_ganado' => 100000,
                'mejor_ranking' => 1,
                'num_victorias' => 10,
                'num_derrotas' => 0,
                'imagen' => 'https://',
            ],
            [
                'id' => 4,
                'nombre' => 'Messi',
                'pais' => 'Argentina',
                'fecha_nacimiento' => '1985-02-05',
                'edad' => 33,
                'altura' => 185,
                'peso' => 80,
                'fecha_debut' => '2022-01-01',
                'mano' => 'diestro',
                'reves' => 'una_mano',
                'entrenador' => 'Cristiano',
                'dinero_ganado' => 100000,
                'mejor_ranking' => 1,
                'num_victorias' => 10,
                'num_derrotas' => 0,
                'imagen' => 'https://',
            ],
            [
                'id' => 5,
                'nombre' => 'Rafael',
                'pais' => 'Venezuela',
                'fecha_nacimiento' => '1905-03-05',
                'edad' => 54,
                'altura' => 185,
                'peso' => 70,
                'fecha_debut' => '2004-01-01',
                'mano' => 'diestro',
                'reves' => 'dos_manos',
                'entrenador' => 'Pedro',
                'dinero_ganado' => 100000,
                'mejor_ranking' => 1,
                'num_victorias' => 10,
                'num_derrotas' => 0,
                'imagen' => 'https://',
            ],
            [
                'id' => 6,
                'nombre' => 'Messi',
                'pais' => 'Argentina',
                'fecha_nacimiento' => '1985-02-05',
                'edad' => 33,
                'altura' => 185,
                'peso' => 80,
                'fecha_debut' => '2022-01-01',
                'mano' => 'diestro',
                'reves' => 'una_mano',
                'entrenador' => 'Cristiano',
                'dinero_ganado' => 100000,
                'mejor_ranking' => 1,
                'num_victorias' => 10,
                'num_derrotas' => 0,
                'imagen' => 'https://',
            ]
        ]);
    }
}
