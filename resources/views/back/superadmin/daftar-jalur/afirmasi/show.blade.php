@extends('layouts.back')

@section('title', 'Data Jalur Afirmasi - PPDB SMPN Maju Jaya')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <h2>Data Andi Saputra</h2>
                </div>
                <div class="col-sm-6 col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <i class="iconly-Home icli svg-color"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Jalur Afirmasi</a></li>
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
                                    <tr><td>3</td><td>Jarak ke Sekolah</td><td>1.5 km</td></tr>
                                    <tr><td>4</td><td>NISN</td><td>1234567890</td></tr>
                                    <tr><td>5</td><td>NIK</td><td>32011234567890</td></tr>
                                    <tr><td>6</td><td>No. KK</td><td>32101123456789</td></tr>
                                    <tr><td>7</td><td>No Hp Orang Tua</td><td>081234567890</td></tr>
                                    <tr><td>8</td><td>No Hp Orang Tua Wali</td><td>082345678901</td></tr>
                                    <tr><td>9</td><td>Jenis Kelamin</td><td>Laki-laki</td></tr>
                                    <tr><td>10</td><td>Tanggal Lahir</td><td>01-01-2011</td></tr>
                                    <tr><td>11</td><td>Tempat Lahir</td><td>Pematangsiantar</td></tr>
                                    <tr><td>12</td><td>Pas Foto</td><td><img src="/storage/pasfoto.jpg" width="100" alt="Pas Foto"></td></tr>
                                    <tr><td>13</td><td>Tinggal Dengan</td><td>Orang Tua</td></tr>
                                    <tr><td>14</td><td>Rata-Rata Keseluruhan</td><td>87.5</td></tr>

                                    {{-- Rapot dan Nilai --}}
                                    <tr><td>15</td><td>Rapot Kelas 5 Semester 1</td><td><a href="#">Lihat Rapot</a></td></tr>
                                    <tr><td>16</td><td>Nilai B Indo Kelas 5 Semester 1</td><td>85</td></tr>
                                    <tr><td>17</td><td>Nilai Matematika Kelas 5 Semester 1</td><td>88</td></tr>
                                    <tr><td>18</td><td>Nilai IPA Kelas 5 Semester 1</td><td>86</td></tr>
                                    <tr><td>19</td><td>Nilai B Inggris Kelas 5 Semester 1</td><td>84</td></tr>
                                    <tr><td>20</td><td>Nilai PAI Kelas 5 Semester 1</td><td>89</td></tr>
                                    <tr><td>21</td><td>Rata-Rata Kelas 5 Semester 1</td><td>86.4</td></tr>

                                    {{-- (duplikasikan pola di atas untuk Kelas 5 Semester 2, Kelas 6 Semester 1 & 2) --}}

                                    {{-- Sertifikat --}}
                                    <tr><td>22</td><td>Sertifikat Akademik Kab/Kota 1</td><td>Juara 1 Olimpiade</td></tr>
                                    <tr><td>23</td><td>Nilai Akademik Kab/Kota 1</td><td>92</td></tr>
                                    <tr><td>24</td><td>Sertifikat Non Akademik Kab/Kota 1</td><td>Juara 2 Futsal</td></tr>
                                    <tr><td>25</td><td>Nilai Non Akademik Kab/Kota 1</td><td>85</td></tr>
                                    <tr><td>26</td><td>Sertifikat Akademik Provinsi 1</td><td>Peserta Lomba Sains</td></tr>
                                    <tr><td>27</td><td>Nilai Akademik Provinsi 1</td><td>88</td></tr>
                                    <tr><td>28</td><td>Total Nilai Sertifikat</td><td>265</td></tr>
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
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $("#basic-6").DataTable({
            lengthMenu: [[25, 50, 100, -1], [25, 50, 100, "All"]],
            pageLength: 50
        });
    });
</script>
@endsection
