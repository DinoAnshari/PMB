<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Domisili Tidak Lulus</title>
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

        <h3 style="background-color: rgb(30, 161, 179); color: white; padding: 5px;">Daftar Siswa Jalur Domisili (Tidak Lulus)</h3>
        <table class="data-table" border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NISN</th>
                    <th>Sekolah Tujuan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($domicileTracks as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->user->name ?? '-' }}</td>
                    <td>{{ $item->user->biodata->nisn ?? '-' }}</td>
                    <td>{{ $item->user->sekolah->nama_sekolah ?? '-' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <footer style="text-align: center; margin-top: 20px; font-size: 14px;">
        Copyright © 2025 PPDB SMPN Maju Jaya.
    </footer>
</body>

</html>