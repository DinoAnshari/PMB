<?php

namespace App\Exports;


use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class PrestasiStatusLulusExport implements FromCollection, WithHeadings, WithStyles, WithColumnWidths, WithEvents
{
    protected $achievementTracks;

    public function __construct($achievementTracks)
    {
        $this->achievementTracks = $achievementTracks;
    }

    public function collection()
    {
        return $this->achievementTracks->map(function ($item) {
            return [
                'Nama' => $item->user->name ?? '-',
                'Sekolah Tujuan' => $item->user->sekolah->nama_sekolah ?? '-',
                'Email' => $item->user->email ?? '-',
                'NISN' => $item->student->nisn ?? '-',
                'NIK' => $item->student->nik ?? '-',
                'Tempat Lahir' => $item->student->tempat_lahir ?? '-',
                'Tanggal Lahir' => $item->student->tanggal_lahir ?? '-',
                'Jenis Kelamin' => $item->student->jenis_kelamin ?? '-',
                'Agama' => $item->student->agama ?? '-',
                'Alamat' => $item->student->alamat ?? '-',
                'Asal Sekolah' => $item->student->asal_sekolah ?? '-',
                'Alamat Asal Sekolah' => $item->student->alamat_asal_sekolah ?? '-',
                'Status Pendaftaran' => $item->statusPendaftaran->status ?? '-',
            ];
        });
    }

    public function headings(): array
    {
        return [
            'Nama',
            'Sekolah Tujuan',
            'Email',
            'NISN',
            'NIK',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Jenis Kelamin',
            'Agama',
            'Alamat',
            'Asal Sekolah',
            'Alamat Asal Sekolah',
            'Status Pendaftaran',
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true]],
        ];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 20,
            'B' => 25,
            'C' => 15,
            'D' => 20,
            'E' => 18,
            'F' => 18,
            'G' => 18,
            'H' => 15,
            'I' => 25,
            'J' => 25,
            'K' => 30,
            'L' => 20,
            'M' => 20,
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $sheet = $event->sheet;
                $headingRange = 'A1:L1';
                $sheet->getDelegate()->getStyle($headingRange)->applyFromArray([
                    'fill' => [
                        'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                        'color' => ['rgb' => 'D9E1F2'],
                    ],
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                            'color' => ['argb' => '000000'],
                        ],
                    ],
                    'alignment' => [
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                        'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
                        'wrapText' => true,
                    ],
                ]);
            },
        ];
    }
}
