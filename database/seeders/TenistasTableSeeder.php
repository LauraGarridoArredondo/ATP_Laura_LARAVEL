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
                'imagen' => 'https://media.gettyimages.com/id/51618212/es/foto/flushing-meadows-united-states-cristiano-caratti-of-italy-hits-a-forehand-to-goran-ivanisevic-of.jpg?s=612x612&w=gi&k=20&c=f0swC1KIQj1RQxdu92iPxAVXJAFo1SzT-BEA2-2UIbI=',
            ],
            [
                'id' => 2,
                'nombre' => 'Carlos',
                'pais' => 'España',
                'fecha_nacimiento' => '1985-02-05',
                'edad' => 28,
                'altura' => 175,
                'peso' => 75,
                'fecha_debut' => '2020-01-01',
                'mano' => 'zurdo',
                'reves' => 'una_mano',
                'entrenador' => 'Juan',
                'dinero_ganado' => 500000,
                'mejor_ranking' => 5,
                'num_victorias' => 17,
                'num_derrotas' => 5,
                'imagen' => 'https://murciaplaza.com/public/Image/2023/8/Alcaraz-ATPTour-Tenis_NoticiaAmpliada.jpg',
            ],
            [
                'id' => 3,
                'nombre' => 'Camila',
                'pais' => 'Brasil',
                'fecha_nacimiento' => '1990-01-05',
                'edad' => 33,
                'altura' => 185,
                'peso' => 80,
                'fecha_debut' => '2004-05-01',
                'mano' => 'diestro',
                'reves' => 'dos_manos',
                'entrenador' => 'Eugenio',
                'dinero_ganado' => 196000,
                'mejor_ranking' => 7,
                'num_victorias' => 7,
                'num_derrotas' => 5,
                'imagen' => 'https://e00-marca.uecdn.es/assets/multimedia/imagenes/2022/12/24/16718868633433.jpg',
            ],
            [
                'id' => 4,
                'nombre' => 'Maria',
                'pais' => 'Peru',
                'fecha_nacimiento' => '1985-02-05',
                'edad' => 37,
                'altura' => 135,
                'peso' => 70,
                'fecha_debut' => '2007-07-12',
                'mano' => 'zurdo',
                'reves' => 'una_mano',
                'entrenador' => 'Adrian',
                'dinero_ganado' => 650000,
                'mejor_ranking' => 4,
                'num_victorias' => 18,
                'num_derrotas' => 8,
                'imagen' => 'https://estaticos.elmundo.es/assets/multimedia/imagenes/2016/03/08/14574590469239.jpg',
            ],
            [
                'id' => 5,
                'nombre' => 'Roger',
                'pais' => 'Francia',
                'fecha_nacimiento' => '1908-02-10',
                'edad' => 34,
                'altura' => 195,
                'peso' => 78,
                'fecha_debut' => '2006-03-12',
                'mano' => 'diestro',
                'reves' => 'una_mano',
                'entrenador' => 'Pascal',
                'dinero_ganado' => 450000,
                'mejor_ranking' => 17,
                'num_victorias' => 10,
                'num_derrotas' => 8,
                'imagen' => 'https://s.france24.com/media/display/5301008a-34fd-11ed-81ea-005056bfa79e/w:1280/p:1x1/fa82ab9d4965dc99a40ad048032ba12a7347296d.jpg',
            ],
            [
                'id' => 6,
                'nombre' => 'Serena',
                'pais' => 'Brazil',
                'fecha_nacimiento' => '1979-04-9',
                'edad' => 36,
                'altura' => 175,
                'peso' => 76,
                'fecha_debut' => '2007-04-01',
                'mano' => 'diestro',
                'reves' => 'una_mano',
                'entrenador' => 'Cristiano',
                'dinero_ganado' => 900000,
                'mejor_ranking' => 1,
                'num_victorias' => 20,
                'num_derrotas' => 7,
                'imagen' => 'https://forbes.es/wp-content/uploads/2022/08/hGettyImages-1172995766-3-1200x800.jpg',
            ]
        ]);
    }
}
