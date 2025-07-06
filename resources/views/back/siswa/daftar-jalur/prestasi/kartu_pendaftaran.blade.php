<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Pendaftaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        .container {
            width: 90%;
            margin: auto;
            border: 1px solid #000;
            padding: 20px;
        }

        .title {
            font-size: 22px;
            font-weight: bold;
            text-align: center;
        }

        .header {
            text-align: center;
            margin-bottom: 5px;
        }

        .data-table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        .data-table th,
        .data-table td {
            text-align: left;
            padding: 8px;
        }

        .data-table th {
            color: black;
        }

        .data-table td {
            border-bottom: 1px solid #ddd;
        }

        .page-break {
            page-break-before: always;
        }
    </style>
</head>

<body>
    <div class="container">
       @php
        $manualPath = public_path('images/header.png');

        $fileExists = file_exists($manualPath);
        $imageData = $fileExists ? base64_encode(file_get_contents($manualPath)) : null;
        $type = pathinfo($manualPath, PATHINFO_EXTENSION);


        @endphp

        <div class="header">
            @if ($imageData)
            <img src="data:image/{{ $type }};base64,{{ $imageData }}" class="logo" height="150">
            @else
            <p>Gambar tidak ditemukan.</p>
            @endif
        </div>

        <h3 style="background-color: rgb(30, 161, 179); color: white; padding: 5px;">Data Siswa Jalur Prestasi</h3>
        <table class="data-table">
            <tr>
                <th>Foto 3x4</th>
                @php
                $filename = $prestasi->student->pas_foto;
                $path = $filename ? storage_path('app/public/' . $filename) : null;
                $fotoData = $path && file_exists($path) ? base64_encode(file_get_contents($path)) : null;
                $fotoType = $path ? pathinfo($path, PATHINFO_EXTENSION) : null;
                @endphp

                @if ($fotoData)
                <img src="data:image/{{ $fotoType }};base64,{{ $fotoData }}" width="100">
                @else
                <span>Gambar tidak ditemukan</span>
                @endif
            </tr>
            <tr>
                <th>Tanggal dan Jam Mendaftar</th>
                <td>: {{ $prestasi->user->created_at }}</td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>: {{ $prestasi->user->name }}</td>
            </tr>
            <tr>
                <th>Nomor Pendaftaran</th>
                <td>: {{ 'PPDB-' . str_pad($prestasi->id, 3, '0', STR_PAD_LEFT) }}</td>
            </tr>
            <tr>
                <th>Sekolah Tujuan</th>
                <td>: {{ $prestasi->user->sekolah->nama_sekolah ?? '-' }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>: {{ $prestasi->user->email }}</td>
            </tr>
            <tr>
                <th>NISN</th>
                <td>: {{ $prestasi->student->nisn ?? '-' }}</td>
            </tr>
            <tr>
                <th>NIK</th>
                <td>: {{ $prestasi->student->nik ?? '-' }}</td>
            </tr>
            <tr>
                <th>No. KK</th>
                <td>: {{ $prestasi->student->no_kk ?? '-' }}</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>: {{ $prestasi->student->jenis_kelamin ?? '-' }}</td>
            </tr>
            <tr>
                <th>Tempat, Tanggal Lahir</th>
                <td>: {{ $prestasi->student->tempat_lahir ?? '-' }}, {{ $prestasi->student->tanggal_lahir ?? '-' }}</td>
            </tr>
            <tr>
                <th>Agama</th>
                <td>: {{ $prestasi->student->agama ?? '-' }}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>: {{ $prestasi->student->alamat ?? '-' }}</td>
            </tr>
            <tr>
                <th>Kecamatan</th>
                <td>: {{ $prestasi->student->kecamatan ?? '-' }}</td>
            </tr>
            <tr>
                <th>Kelurahan</th>
                <td>: {{ $prestasi->student->kelurahan ?? '-' }}</td>
            </tr>
            <tr>
                <th>Asal Sekolah</th>
                <td>: {{ $prestasi->student->asal_sekolah ?? '-' }}</td>
            </tr>
            <tr>
                <th>Alamat Asal Sekolah</th>
                <td>: {{ $prestasi->student->alamat_asal_sekolah ?? '-' }}</td>
            </tr>
            <tr>
                <th>Tinggal Dengan</th>
                <td>: {{ $prestasi->student->tinggal_dengan ?? '-' }}</td>
            </tr>
        </table>
    </div>

    <div class="page-break"></div>

    <div class="container">
        <h3 style="background-color: rgb(30, 161, 179); color: white; padding: 5px;">Data Orang Tua</h3>
        <table class="data-table">
            <tr>
                <th>Nama Ayah</th>
                <td>: {{ $prestasi->student->parent->nama_ayah ?? '-' }}</td>
            </tr>
            <tr>
                <th>Pekerjaan Ayah</th>
                <td>: {{ $prestasi->student->parent->pekerjaan_ayah ?? '-' }}</td>
            </tr>
            <tr>
                <th>Nama Ibu</th>
                <td>: {{ $prestasi->student->parent->nama_ibu ?? '-' }}</td>
            </tr>
            <tr>
                <th>Pekerjaan Ibu</th>
                <td>: {{ $prestasi->student->parent->pekerjaan_ibu ?? '-' }}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>: {{ $prestasi->student->parent->alamat ?? '-' }}</td>
            </tr>
            <tr>
                <th>No. HP</th>
                <td>: {{ $prestasi->student->parent->no_hp ?? '-' }}</td>
            </tr>
        </table>

        <h3 style="background-color:rgb(30, 161, 179); color: white; padding: 5px;">Data Wali</h3>
        <table class="data-table">
            <tr>
                <th>Nama Wali</th>
                <td>: {{ $prestasi->student->guardian->nama_wali ?? '-' }}</td>
            </tr>
            <tr>
                <th>Pekerjaan Wali</th>
                <td>: {{ $prestasi->student->guardian->pekerjaan_wali ?? '-' }}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>: {{ $prestasi->student->guardian->alamat ?? '-' }}</td>
            </tr>
            <tr>
                <th>No. HP</th>
                <td>: {{ $prestasi->student->guardian->no_hp ?? '-' }}</td>
            </tr>
        </table>
    </div>
    <div class="page-break"></div>

    <div class="container">
        <h3 style="background-color: rgb(30, 161, 179); color: white; padding: 5px;">Data Prestasi</h3>
        <table class="data-table">
            @php
            $fields = [
            'skl_ijazah' => 'SKL / Ijazah',
            'kartu_keluarga' => 'Kartu Keluarga',

        
            'rapot_kelas6_semester1' => 'Rapot Kelas 6 Semester 1',
            'nilai_b_indo_kelas6_semester1' => 'Nilai Bahasa Indonesia',
            'nilai_matematika_kelas6_semester1' => 'Nilai Matematika',
            'nilai_ipa_kelas6_semester1' => 'Nilai IPA',
            'nilai_b_inggris_kelas6_semester1' => 'Nilai Bahasa Inggris',
            'nilai_pai_kelas6_semester1' => 'Nilai Pendidikan Agama dan Budi Pekerti (PAI)',
            'rata_rata_kelas6_semester1' => 'Rata-rata',

            'rapot_kelas6_semester2' => 'Rapot Kelas 6 Semester 2',
            'nilai_b_indo_kelas6_semester2' => 'Nilai Bahasa Indonesia',
            'nilai_matematika_kelas6_semester2' => 'Nilai Matematika',
            'nilai_ipa_kelas6_semester2' => 'Nilai IPA',
            'nilai_b_inggris_kelas6_semester2' => 'Nilai Bahasa Inggris',
            'nilai_pai_kelas6_semester2' => 'Nilai Pendidikan Agama dan Budi Pekerti (PAI)',
            'rata_rata_kelas6_semester2' => 'Rata-rata',

            'rata_rata_keseluruhan' => 'Rata-rata Keseluruhan',
            'sertifikat_akademik_kabkota_1' => 'Sertifikat Akademik Kab/Kota 1',
            'nilai_akademik_kabkota_1' => 'Nilai Akademik Kab/Kota 1',
            'sertifikat_akademik_kabkota_2' => 'Sertifikat Akademik Kab/Kota 2',
            'nilai_akademik_kabkota_2' => 'Nilai Akademik Kab/Kota 2',
            'sertifikat_akademik_provinsi_1' => 'Sertifikat Akademik Provinsi',
            'nilai_akademik_provinsi_1' => 'Nilai Akademik Provinsi',
            'sertifikat_akademik_nasional_1' => 'Sertifikat Akademik Nasional',
            'nilai_akademik_nasional_1' => 'Nilai Akademik Nasional',
            'sertifikat_akademik_internasional_1' => 'Sertifikat Akademik Internasional',
            'nilai_akademik_internasional_1' => 'Nilai Akademik Internasional',

            // Sertifikat Non-Akademik
            'sertifikat_non_akademik_kabkota_1' => 'Sertifikat Non-Akademik Kab/Kota 1',
            'nilai_non_akademik_kabkota_1' => 'Nilai Non-Akademik Kab/Kota 1',
            'sertifikat_non_akademik_kabkota_2' => 'Sertifikat Non-Akademik Kab/Kota 2',
            'nilai_non_akademik_kabkota_2' => 'Nilai Non-Akademik Kab/Kota 2',
            'sertifikat_non_akademik_provinsi_1' => 'Sertifikat Non-Akademik Provinsi',
            'nilai_non_akademik_provinsi_1' => 'Nilai Non-Akademik Provinsi',
            'sertifikat_non_akademik_nasional_1' => 'Sertifikat Non-Akademik Nasional',
            'nilai_non_akademik_nasional_1' => 'Nilai Non-Akademik Nasional',
            'sertifikat_non_akademik_internasional_1' => 'Sertifikat Non-Akademik Internasional',
            'nilai_non_akademik_internasional_1' => 'Nilai Non-Akademik Internasional',

            'total_nilai_sertifikat' => 'Total Nilai Sertifikat',
            ];
            @endphp

            @foreach ($fields as $key => $label)
            <tr>
                <th>{{ $label }}</th>
                <td>:
                    @php
                    $value = $prestasi->$key ?? null;
                    $isImage = $value && str_starts_with($value, 'uploads/') && preg_match('/\.(jpg|jpeg|png|gif)$/i', $value);
                    $path = $value ? storage_path('app/public/' . $value) : null;
                    $imageData = $path && file_exists($path) ? base64_encode(file_get_contents($path)) : null;
                    $imageType = $path ? pathinfo($path, PATHINFO_EXTENSION) : null;
                    @endphp

                    @if ($imageData)
                    <img src="data:image/{{ $imageType }};base64,{{ $imageData }}" width="100" style="margin-top: 50px;">
                    @elseif ($isImage)
                    <img src="{{ asset($value) }}" alt="{{ $label }}" style="max-width: 200px; height: auto; margin-top: 10px;">
                    @else
                    {{ $value ?? '-' }}
                    @endif
                </td>
            </tr>
            @endforeach
        </table>
    </div>


    <footer style="text-align: center; margin-top: 20px; font-size: 14px;">
        Copyright © 2025 SPMB Online Dinas Pendidikan Maju Jaya.
    </footer>
</body>

</html>