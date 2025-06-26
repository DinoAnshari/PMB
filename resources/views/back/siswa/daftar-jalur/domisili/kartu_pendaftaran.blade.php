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
        }
        .header {
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
            <img src="logo.png" alt="Logo Sekolah" height="150">
        </div>

        <h3 style="background-color: rgb(30, 161, 179); color: white; padding: 5px;">Data Siswa Jalur Domisili</h3>
        <table class="data-table">
            <tr>
                <th>Foto 3x4</th>
                <td><img src="pasfoto.jpg" width="100" alt="Foto Siswa"></td>
            </tr>
            <tr><th>Tanggal dan Jam Mendaftar</th><td>: 2025-06-26 08:00</td></tr>
            <tr><th>Nama</th><td>: Budi Santoso</td></tr>
            <tr><th>Nomor Pendaftaran</th><td>: PPDB-001</td></tr>
            <tr><th>Sekolah Tujuan</th><td>: SMPN Maju Jaya</td></tr>
            <tr><th>Email</th><td>: budi@example.com</td></tr>
            <tr><th>NISN</th><td>: 1234567890</td></tr>
            <tr><th>NIK</th><td>: 3210987654321000</td></tr>
            <tr><th>No. KK</th><td>: 1234567890123456</td></tr>
            <tr><th>Jenis Kelamin</th><td>: Laki-laki</td></tr>
            <tr><th>Tempat, Tanggal Lahir</th><td>: Medan, 15 Agustus 2012</td></tr>
            <tr><th>Agama</th><td>: Islam</td></tr>
            <tr><th>Alamat</th><td>: Jl. Pendidikan No. 123</td></tr>
            <tr><th>Kecamatan</th><td>: Siantar Utara</td></tr>
            <tr><th>Kelurahan</th><td>: Martoba</td></tr>
            <tr><th>Asal Sekolah</th><td>: SDN 101</td></tr>
            <tr><th>Alamat Asal Sekolah</th><td>: Jl. Sekolah Lama No. 10</td></tr>
            <tr><th>Tinggal Dengan</th><td>: Orang Tua</td></tr>
        </table>
    </div>

    <div class="page-break"></div>

    <div class="container">
        <h3 style="background-color: rgb(30, 161, 179); color: white; padding: 5px;">Data Orang Tua</h3>
        <table class="data-table">
            <tr><th>Nama Ayah</th><td>: Sugeng Santoso</td></tr>
            <tr><th>Pekerjaan Ayah</th><td>: Pegawai Negeri</td></tr>
            <tr><th>Nama Ibu</th><td>: Rina Marlina</td></tr>
            <tr><th>Pekerjaan Ibu</th><td>: Ibu Rumah Tangga</td></tr>
            <tr><th>Alamat</th><td>: Jl. Pendidikan No. 123</td></tr>
            <tr><th>No. HP</th><td>: 081234567890</td></tr>
        </table>

        <h3 style="background-color:rgb(30, 161, 179); color: white; padding: 5px;">Data Wali</h3>
        <table class="data-table">
            <tr><th>Nama Wali</th><td>: -</td></tr>
            <tr><th>Pekerjaan Wali</th><td>: -</td></tr>
            <tr><th>Alamat</th><td>: -</td></tr>
            <tr><th>No. HP</th><td>: -</td></tr>
        </table>
    </div>

    <div class="page-break"></div>

    <div class="container">
        <h3 style="background-color: rgb(30, 161, 179); color: white; padding: 5px;">Data Domisili</h3>
        <table class="data-table">
            <tr><th>Jarak dari Sekolah</th><td>: 3.2 km</td></tr>
            <tr><th>SKL / Ijazah</th><td>: skl_ijazah.pdf</td></tr>
            <tr><th>Kartu Keluarga</th><td>: kk.pdf</td></tr>

            <tr><th>Rapot Kelas 5 Semester 1</th><td>: rapot_5_1.pdf</td></tr>
            <tr><th>Nilai Bahasa Indonesia</th><td>: 85</td></tr>
            <tr><th>Nilai Matematika</th><td>: 88</td></tr>
            <tr><th>Nilai IPA</th><td>: 87</td></tr>
            <tr><th>Nilai Bahasa Inggris</th><td>: 84</td></tr>
            <tr><th>Nilai Pendidikan Agama dan Budi Pekerti (PAI)</th><td>: 86</td></tr>
            <tr><th>Rata-rata</th><td>: 86.0</td></tr>

            <tr><th>Rapot Kelas 5 Semester 2</th><td>: rapot_5_2.pdf</td></tr>
            <tr><th>Rata-rata Keseluruhan</th><td>: 86.25</td></tr>

            <tr><th>Sertifikat Akademik Kab/Kota 1</th><td>: sertifikat_kab1.pdf</td></tr>
            <tr><th>Nilai Akademik Kab/Kota 1</th><td>: 20</td></tr>
            <tr><th>Sertifikat Non-Akademik Nasional</th><td>: sertifikat_non_nasional.pdf</td></tr>
            <tr><th>Nilai Non-Akademik Nasional</th><td>: 25</td></tr>

            <tr><th>Total Nilai Sertifikat</th><td>: 45</td></tr>
        </table>
    </div>

    <footer style="text-align: center; margin-top: 20px; font-size: 14px;">
        Copyright © 2025 PPDB Online Dinas Pendidikan Maju Jaya.
    </footer>
</body>
</html>
