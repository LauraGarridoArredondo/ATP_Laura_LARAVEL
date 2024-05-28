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
                'premios' => '20.000.000',
                'fecha_inicio' => '2024-05-01',
                'fecha_fin' => '2024-06-01',
                'imagen' => 'https://www.atptour.com/-/media/images/news/2022/06/10/14/28/rome-tournament-profile.jpg',
            ],
            [
                'id' => 2,
                'ubicacion' => 'Madrid',
                'modalidad' => 'Dobles',
                'categoria' => 'Master200',
                'superficie' => 'hierba',
                'vacantes' => 2,
                'premios' => '8.000.000',
                'fecha_inicio' => '2024-07-30',
                'fecha_fin' => '2024-08-25',
                'imagen' => 'https://www.atptour.com/-/media/images/atp-tournaments/tournament-images/geneva2021.jpg',
            ],
            [
                'id' => 3,
                'ubicacion' => 'Valencia',
                'modalidad' => 'Individual y Dobles',
                'categoria' => 'Master350',
                'superficie' => 'arcilla',
                'vacantes' => 3,
                'premios' => '30.000.000',
                'fecha_inicio' => '2024-01-01',
                'fecha_fin' => '2024-05-13',
                'imagen' => 'https://www.atptour.com/-/media/images/atp-tournaments/tournament-images/lyon_tournimage_2019_court.jpg',
            ],
            [
                'id' => 4,
                'ubicacion' => 'Sevilla',
                'modalidad' => 'Individual',
                'categoria' => 'Master1000',
                'superficie' => 'duro',
                'vacantes' => 4,
                'premios' => '59.000.000',
                'fecha_inicio' => '2024-07-10',
                'fecha_fin' => '2024-12-18',
                'imagen' => 'https://www.atptour.com/-/media/images/news/2023/06/12/09/16/roland-garros-tournament-profile.jpg',
            ],
            [
                'id' => 5,
                'ubicacion' => 'Malaga',
                'modalidad' => 'Dobles',
                'categoria' => 'Master200',
                'superficie' => 'hierba',
                'vacantes' => 5,
                'premios' => '18.000.000',
                'fecha_inicio' => '2024-08-17',
                'fecha_fin' => '2024-09-27',
                'imagen' => 'https://www.atptour.com/-/media/images/atp-tournaments/tournament-images/stuttgart_tournimage_july_30_2022.jpg',
            ],
            [
                'id' => 6,
                'ubicacion' => 'Cordoba',
                'modalidad' => 'Individual y Dobles',
                'categoria' => 'Master350',
                'superficie' => 'arcilla',
                'vacantes' => 6,
                'premios' => '78.000.000',
                'fecha_inicio' => '2024-02-01',
                'fecha_fin' => '2024-02-28',
                'imagen' => 'https://www.atptour.com/-/media/images/news/2022/06/13/05/57/libema-open-tournament-profile-image-2022.jpg',
            ]
        ]);
    }
}
