@extends('layouts.back')

@section('title', 'Data Jalur Domisili - PPDB SMPN Pematangsiantar')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <h2>Data Ahmad Yusuf</h2>
                </div>
                <div class="col-sm-6 col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#"><i class="iconly-Home icli svg-color"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Jalur Domisili</a></li>
                        <li class="breadcrumb-item">Detail Siswa</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-6">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>List</th>
                                        <th>Data</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>1</td><td>SKL/Ijazah</td><td><a href="#">Lihat SKL/Ijazah</a></td></tr>
                                    <tr><td>2</td><td>Kartu Keluarga</td><td><a href="#">Lihat Kartu Keluarga</a></td></tr>
                                    <tr><td>3</td><td>NISN</td><td>1234567890</td></tr>
                                    <tr><td>4</td><td>NIK</td><td>3276011234567890</td></tr>
                                    <tr><td>5</td><td>No. KK</td><td>3210987654321234</td></tr>
                                    <tr><td>6</td><td>Jenis Kelamin</td><td>Laki-laki</td></tr>
                                    <tr><td>7</td><td>Tanggal Lahir</td><td>12-05-2012</td></tr>
                                    <tr><td>8</td><td>Tempat Lahir</td><td>Pematangsiantar</td></tr>
                                    <tr><td>9</td><td>Pas Foto</td><td><img src="#" width="100" alt="Pas Foto"></td></tr>
                                    <tr><td>10</td><td>Tinggal Dengan</td><td>Orang Tua</td></tr>
                                    <tr><td>11</td><td>Rata-Rata Keseluruhan</td><td>85.7</td></tr>

                                    <!-- Dummy Rapot dan Nilai -->
                                    <tr><td>12</td><td>Rapot Kelas 5 Semester 1</td><td><a href="#">Lihat Rapot</a></td></tr>
                                    <tr><td>13</td><td>Nilai B Indo Kelas 5 Semester 1</td><td>88</td></tr>
                                    <tr><td>14</td><td>Nilai Matematika Kelas 5 Semester 1</td><td>84</td></tr>
                                    <tr><td>15</td><td>Nilai Ipa Kelas 5 Semester 1</td><td>86</td></tr>
                                    <tr><td>16</td><td>Nilai B Inggris Kelas 5 Semester 1</td><td>83</td></tr>
                                    <tr><td>17</td><td>Nilai Pai Kelas 5 Semester 1</td><td>87</td></tr>
                                    <tr><td>18</td><td>Rata-Rata Kelas 5 Semester 1</td><td>85.6</td></tr>

                                    <!-- Lanjutkan dummy data lainnya sesuai pola -->
                                    <tr><td>19</td><td>Rapot Kelas 5 Semester 2</td><td><a href="#">Lihat Rapot</a></td></tr>
                                    <tr><td>20</td><td>Nilai B Indo Kelas 5 Semester 2</td><td>87</td></tr>
                                    <tr><td>21</td><td>Nilai Matematika Kelas 5 Semester 2</td><td>85</td></tr>
                                    <tr><td>22</td><td>Nilai IPA Kelas 5 Semester 2</td><td>84</td></tr>
                                    <tr><td>23</td><td>Nilai B Inggris Kelas 5 Semester 2</td><td>86</td></tr>
                                    <tr><td>24</td><td>Nilai PAI Kelas 5 Semester 2</td><td>88</td></tr>
                                    <tr><td>25</td><td>Rata-Rata Kelas 5 Semester 2</td><td>86.0</td></tr>

                                    <!-- Tambahkan data lainnya sesuai kebutuhan -->

                                    <!-- Sertifikat -->
                                    <tr><td>40</td><td>Sertifikat Akademik Kab/Kota 1</td><td><a href="#">Lihat Sertifikat</a></td></tr>
                                    <tr><td>41</td><td>Nilai Akademik Kab/Kota 1</td><td>90</td></tr>
                                    <tr><td>42</td><td>Sertifikat Non Akademik Kab/Kota 1</td><td><a href="#">Lihat Sertifikat</a></td></tr>
                                    <tr><td>43</td><td>Nilai Non Akademik Kab/Kota 1</td><td>82</td></tr>
                                    <tr><td>44</td><td>Sertifikat Akademik Nasional 1</td><td><a href="#">Lihat Sertifikat</a></td></tr>
                                    <tr><td>45</td><td>Nilai Akademik Nasional 1</td><td>88</td></tr>

                                    <!-- Total -->
                                    <tr><td>50</td><td>Total Nilai Sertifikat</td><td>90.0</td></tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>List</th>
                                        <th>Data</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambahan script DataTable -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#basic-6").DataTable({
                lengthMenu: [
                    [25, 50, 100, -1],
                    [25, 50, 100, "All"],
                ],
                pageLength: 50
            });
        });
    </script>
</div>
@endsection
