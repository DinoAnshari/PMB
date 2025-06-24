@extends('layouts.back')

@section('title', 'Data Prestasi - PPDB SMPN Maju Jaya')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <h2>Data Prestasi Aulia Rahman</h2>
                </div>
                <div class="col-sm-6 col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#"><i class="iconly-Home icli svg-color"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Prestasi</a></li>
                        <li class="breadcrumb-item">Detail Siswa</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

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
                                    <tr><td>1</td><td>SKL/Ijazah</td><td><a href="#" target="_blank">Lihat SKL/Ijazah</a></td></tr>
                                    <tr><td>2</td><td>Kartu Keluarga</td><td><a href="#" target="_blank">Lihat Kartu Keluarga</a></td></tr>
                                    <tr><td>3</td><td>Rata-Rata Keseluruhan</td><td>88.50</td></tr>

                                    <!-- Rapot dan Nilai -->
                                    @for ($kelas = 4; $kelas <= 6; $kelas++)
                                        @for ($semester = 1; $semester <= 2; $semester++)
                                            <tr><td>#</td><td>Rapot Kelas {{ $kelas }} Semester {{ $semester }}</td><td><a href="#" target="_blank">Lihat Rapot</a></td></tr>
                                            <tr><td>#</td><td>Nilai B Indo Kelas {{ $kelas }} Semester {{ $semester }}</td><td>85</td></tr>
                                            <tr><td>#</td><td>Nilai Matematika Kelas {{ $kelas }} Semester {{ $semester }}</td><td>88</td></tr>
                                            <tr><td>#</td><td>Nilai IPA Kelas {{ $kelas }} Semester {{ $semester }}</td><td>90</td></tr>
                                            <tr><td>#</td><td>Nilai B Inggris Kelas {{ $kelas }} Semester {{ $semester }}</td><td>86</td></tr>
                                            <tr><td>#</td><td>Nilai PAI Kelas {{ $kelas }} Semester {{ $semester }}</td><td>89</td></tr>
                                            <tr><td>#</td><td>Rata-Rata Kelas {{ $kelas }} Semester {{ $semester }}</td><td>87.6</td></tr>
                                        @endfor
                                    @endfor

                                    <!-- Sertifikat -->
                                    @foreach(['Akademik', 'Non Akademik'] as $kategori)
                                        <tr><td>#</td><td>Sertifikat {{ $kategori }} Kab/Kota 1</td><td><a href="#">Lihat Sertifikat</a></td></tr>
                                        <tr><td>#</td><td>Nilai {{ $kategori }} Kab/Kota 1</td><td>85</td></tr>
                                        <tr><td>#</td><td>Sertifikat {{ $kategori }} Kab/Kota 2</td><td>Tidak Ada</td></tr>
                                        <tr><td>#</td><td>Nilai {{ $kategori }} Kab/Kota 2</td><td>0</td></tr>

                                        <tr><td>#</td><td>Sertifikat {{ $kategori }} Provinsi</td><td><a href="#">Lihat Sertifikat</a></td></tr>
                                        <tr><td>#</td><td>Nilai {{ $kategori }} Provinsi</td><td>90</td></tr>
                                        <tr><td>#</td><td>Sertifikat {{ $kategori }} Nasional</td><td>Tidak Ada</td></tr>
                                        <tr><td>#</td><td>Nilai {{ $kategori }} Nasional</td><td>0</td></tr>
                                        <tr><td>#</td><td>Sertifikat {{ $kategori }} Internasional</td><td>Tidak Ada</td></tr>
                                        <tr><td>#</td><td>Nilai {{ $kategori }} Internasional</td><td>0</td></tr>
                                    @endforeach

                                    <tr><td>#</td><td>Total Nilai Sertifikat</td><td>175</td></tr>
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

    <!-- DataTables Script -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#basic-6').DataTable({
                lengthMenu: [
                    [25, 50, 100, -1],
                    [25, 50, 100, "All"]
                ],
                pageLength: 50
            });
        });
    </script>
</div>
@endsection
