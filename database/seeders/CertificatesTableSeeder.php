<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CertificatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $certificates = [
            [
                'ClaveEscuela' => '05PSU0090Q',
                'Turno' => 'Matutino',
                'PlanEstudios' => 'LICENCIATURA EN CIENCIAS DE LA EDUCACIÓN',
                'Folio' => '00211',
                'ID_HASH' => 'eb163727917cbba1eea208541a643e74',
                'Matricula' => '270820001E',
                'CURP' => 'CURP1',
                'NOMBRE' => 'DANA NATALIA ADAME BELTRAN',
                'TIMBRADO' => 'True',
                'TipoCertificado' => 'Final',
                'Fecha' => '11/06/2023',
                'Cadena' => 'Beta cadena',
                'FechaHoraTimbrado' => 'Beta Cadena',
                'NombreArea' => 'Direccion del area de licenciatura',
                'Firmante' => 'MC. Nidia',
            ],
            // ... Repite esta estructura para cada conjunto de datos ...
        ];
        foreach ($certificates as $certificate) {
            DB::table('certificates')->insert($certificate);
        }
    }
}
