<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Certificate;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\MemoryDrawing;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;




class certicadosExport implements FromCollection, WithHeadings, WithMapping, WithDrawings, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Certificate::all();

    }

    public function headings(): array
    {
        // Agrega los encabezados deseados, incluyendo el encabezado "QR"
        return ['ID', 'Nombre', 'Apellido', 'QR'];
    }

    public function map($row): array
    {
        $qrCode = QrCode::format('png')->size(200)->generate('http:192.168.1.15/iesiz/public/certificates/verificacion/'.$row->id_hash);
        // Guarda la imagen del código QR temporalmente
        $qrPath = 'public/qrcodes/' . $row->id .'_qr.png';
        Storage::put($qrPath, $qrCode);

        return [$row->id, $row->Matricula, $row->Nombre, $row->id .'_qr.png'];
    }

    public function drawings()
    {
        $spreadsheet = new Spreadsheet(); // Crear una nueva instancia de la hoja de cálculo
        $drawings = [];

        foreach ($this->collection() as $index => $row) {
            $qrPath = $row[3];

            $drawing = new Drawing();
            $drawing->setName('QR_' . $row->id);
            $drawing->setOffsetX(10);
            $drawing->setOffsetY(10);
            $drawing->setDescription('QR Code');
            $drawing->setPath(public_path('storage/qrcodes/' . $row->id .'_qr.png'));
            $drawing->setHeight(100);
            $drawing->setCoordinates('D' . ($index + 2)); // Ajusta la fila según tu necesidad

            $drawings[] = $drawing;
        }
        return $drawings;
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                // Ajusta el ancho de la columna
                $event->sheet->getColumnDimension('A')->setWidth(15);
                $event->sheet->getColumnDimension('B')->setWidth(30);
                $event->sheet->getColumnDimension('C')->setWidth(50);
                $event->sheet->getColumnDimension('D')->setWidth(80);

                // Ajusta la altura de las filas según tu necesidad
                foreach ($this->collection() as $index => $row) {
                    $event->sheet->getRowDimension($index + 2)->setRowHeight(100);
                    // Ajusta más filas según sea necesario
                }

            },
        ];

    }
}
