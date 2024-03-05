<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumno;
use App\Models\Idioma;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private function get_idiomas(): array {
        $idiomas_hablados = [];
        $idiomas = config('idiomas.idiomas');
        $numero_idiomas = rand(0, 4);

        if ($numero_idiomas != 0) {
            $index_idiomas_hablados = array_rand($idiomas, $numero_idiomas);
            // Asegurar que $index_idiomas_hablados sea siempre un array
            if (!is_array($index_idiomas_hablados)) {
                $index_idiomas_hablados = [$index_idiomas_hablados];
            }
            foreach ($index_idiomas_hablados as $index) {
                $idiomas_hablados[] = $idiomas[$index];
            }
        }

        return $idiomas_hablados;
    }

    public function run(): void
    {

        Alumno::factory()->count(20)->create()->each(function ($alumno){
            $idiomas_hablados = $this->get_idiomas();
            dump($idiomas_hablados);
            foreach ($idiomas_hablados as $idioma_hablado) {
                $idioma = new Idioma();
                $idioma->alumno_id = $alumno->id;
                $idioma->idioma = $idioma_hablado;
                $idioma->save();
            }
        }

        );



        //
    }
}
