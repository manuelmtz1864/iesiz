<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Certificate;

class CertificatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Certificate::create([
            'ClaveEscuela' => '05PSU0090Q',
                'Turno' => 'Matutino',
                'PlanEstudios' => 'LICENCIATURA EN CIENCIAS DE LA EDUCACIÓN',
                'Folio' => '00211',
                'ID_HASH' => 'eb163727917cbba1eea208541a643e74',
                'Matricula' => '270820001E',
                'CURP' => 'CURP1',
                'Nombre' => 'DANA NATALIA ADAME BELTRAN',
                'Timbrado' => true,
                'TipoCertificado' => 'Final',
                'Fecha' => '2023-06-11',
                'Cadena' => 'Beta cadena',
                'FechaHoraTimbrado' => now(),
                'NombreArea' => 'Direccion del area de licenciatura',
                'Firmante' => 'MC. Nidia',
        ]);
        /*$certificates = [
            [
                'ClaveEscuela' => '05PSU0090Q',
                'Turno' => 'Matutino',
                'PlanEstudios' => 'LICENCIATURA EN CIENCIAS DE LA EDUCACIÓN',
                'Folio' => '00211',
                'ID_HASH' => 'eb163727917cbba1eea208541a643e74',
                'Matricula' => '270820001E',
                'CURP' => 'CURP1',
                'Nombre' => 'DANA NATALIA ADAME BELTRAN',
                'Timbrado' => true,
                'TipoCertificado' => 'Final',
                'Fecha' => '2023-06-11',
                'Cadena' => 'Beta cadena',
                'FechaHoraTimbrado' => now(),
                'NombreArea' => 'Direccion del area de licenciatura',
                'Firmante' => 'MC. Nidia',
            ],
            // ... Puedes agregar más datos aquí ...
        ];

        foreach ($certificates as $certificate) {
            DB::table('certificates')->insert($certificate);
        }*/
    }
}
