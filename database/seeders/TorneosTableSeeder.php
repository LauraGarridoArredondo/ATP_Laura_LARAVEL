<?php

namespace Database\Seeders;

use App\Models\Torneos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TorneosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Torneos::truncate();
        DB::table('torneos')->insert([
            [
                'id' => 1,
                'ubicacion' => 'Barcelona',
                'modalidad' => 'Individual',
                'categoria' => 'Master1000',
                'superficie' => 'duro',
                'vacantes' => 1,
                'premios' => '10.000.000',
                'fecha_inicio' => '2022-01-01',
                'fecha_fin' => '2022-12-31',
                'imagen' => 'https://',
            ],
            [
                'id' => 2,
                'ubicacion' => 'Madrid',
                'modalidad' => 'Dobles',
                'categoria' => 'Master200',
                'superficie' => 'hierba',
                'vacantes' => 2,
                'premios' => '10.000.000',
                'fecha_inicio' => '2022-01-01',
                'fecha_fin' => '2022-12-31',
                'imagen' => 'https://',
            ],
            [
                'id' => 3,
                'ubicacion' => 'Valencia',
                'modalidad' => 'Individual y Dobles',
                'categoria' => 'Master350',
                'superficie' => 'arcilla',
                'vacantes' => 3,
                'premios' => '10.000.000',
                'fecha_inicio' => '2022-01-01',
                'fecha_fin' => '2022-12-31',
                'imagen' => 'https://',
            ],
            [
                'id' => 4,
                'ubicacion' => 'Sevilla',
                'modalidad' => 'Individual',
                'categoria' => 'Master1000',
                'superficie' => 'duro',
                'vacantes' => 4,
                'premios' => '10.000.000',
                'fecha_inicio' => '2022-01-01',
                'fecha_fin' => '2022-12-31',
                'imagen' => 'https://',
            ],
            [
                'id' => 5,
                'ubicacion' => 'Malaga',
                'modalidad' => 'Dobles',
                'categoria' => 'Master200',
                'superficie' => 'hierba',
                'vacantes' => 5,
                'premios' => '10.000.000',
                'fecha_inicio' => '2022-01-01',
                'fecha_fin' => '2022-12-31',
                'imagen' => 'https://',
            ],
            [
                'id' => 6,
                'ubicacion' => 'Cordoba',
                'modalidad' => 'Individual y Dobles',
                'categoria' => 'Master350',
                'superficie' => 'arcilla',
                'vacantes' => 6,
                'premios' => '10.000.000',
                'fecha_inicio' => '2022-01-01',
                'fecha_fin' => '2022-12-31',
                'imagen' => 'https://',
            ]
        ]);
    }
}
