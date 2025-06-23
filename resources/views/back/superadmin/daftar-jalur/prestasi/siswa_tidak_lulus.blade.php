<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Prestasi Tidak Lulus</title>
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
        <div class="header">
            <img src="images/logo/header.png" class="logo" height="150" alt="Logo Header">
        </div>

        <h3 style="background-color: rgb(30, 161, 179); color: white; padding: 5px;">Daftar Siswa Jalur Prestasi (Tidak Lulus)</h3>
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
                <tr>
                    <td>1</td>
                    <td>Dewi Lestari</td>
                    <td>3344556677</td>
                    <td>SMP Negeri 4</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Rizki Hidayat</td>
                    <td>5566778899</td>
                    <td>SMP Negeri 5</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Melati Sari</td>
                    <td>6677889900</td>
                    <td>SMP Negeri 6</td>
                </tr>
            </tbody>
        </table>
    </div>

    <footer style="text-align: center; margin-top: 20px; font-size: 14px;">
        Copyright © 2025 PPDB SMPN Maju Jaya.
    </footer>
</body>

</html>
