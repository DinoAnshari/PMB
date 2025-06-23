@extends('layouts.back')

@section('title', 'Data Jalur Domisili - PPDB SMPN Maju Jaya')

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
                            <a href="#"><i class="iconly-Home icli svg-color"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Jalur Domisili</a></li>
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
                                    <tr><td>3</td><td>Jarak ke Sekolah</td><td>1.25 km</td></tr>
                                    <tr><td>4</td><td>NISN</td><td>1234567890</td></tr>
                                    <tr><td>5</td><td>NIK</td><td>1234567890123456</td></tr>
                                    <tr><td>6</td><td>No. KK</td><td>9876543210123456</td></tr>
                                    <tr><td>7</td><td>No Hp Orang Tua</td><td>081234567890</td></tr>
                                    <tr><td>8</td><td>No Hp Orang Tua Wali</td><td>081298765432</td></tr>
                                    <tr><td>9</td><td>Jenis Kelamin</td><td>Laki-laki</td></tr>
                                    <tr><td>10</td><td>Tanggal Lahir</td><td>01-01-2012</td></tr>
                                    <tr><td>11</td><td>Tempat Lahir</td><td>Siantar</td></tr>
                                    <tr><td>12</td><td>Pas Foto</td><td><img src="#" width="100" alt="Pas Foto"></td></tr>
                                    <tr><td>13</td><td>Tinggal Dengan</td><td>Orang Tua</td></tr>
                                    <tr><td>14</td><td>Rata-Rata Keseluruhan</td><td>88.5</td></tr>

                                    {{-- Rapot dan Nilai --}}
                                    @php $no = 15; @endphp
                                    @for($kelas = 5; $kelas <= 6; $kelas++)
                                        @for($semester = 1; $semester <= 2; $semester++)
                                            <tr><td>{{ $no++ }}</td><td>Rapot Kelas {{ $kelas }} Semester {{ $semester }}</td><td><a href="#" target="_blank">Lihat Rapot</a></td></tr>
                                            <tr><td>{{ $no++ }}</td><td>Nilai B Indo Kelas {{ $kelas }} Semester {{ $semester }}</td><td>85</td></tr>
                                            <tr><td>{{ $no++ }}</td><td>Nilai Matematika Kelas {{ $kelas }} Semester {{ $semester }}</td><td>88</td></tr>
                                            <tr><td>{{ $no++ }}</td><td>Nilai IPA Kelas {{ $kelas }} Semester {{ $semester }}</td><td>87</td></tr>
                                            <tr><td>{{ $no++ }}</td><td>Nilai B Inggris Kelas {{ $kelas }} Semester {{ $semester }}</td><td>84</td></tr>
                                            <tr><td>{{ $no++ }}</td><td>Nilai PAI Kelas {{ $kelas }} Semester {{ $semester }}</td><td>89</td></tr>
                                            <tr><td>{{ $no++ }}</td><td>Rata-Rata Kelas {{ $kelas }} Semester {{ $semester }}</td><td>86.6</td></tr>
                                        @endfor
                                    @endfor

                                    {{-- Sertifikat --}}
                                    @php $kategori = ['akademik', 'non_akademik']; $tingkat = ['kab/kota', 'provinsi', 'nasional', 'internasional']; @endphp
                                    <tr><td>{{ $no++ }}</td><td>Sertifikat Akademik Kab/Kota 1</td><td>Ada</td></tr>
                                    <tr><td>{{ $no++ }}</td><td>Nilai Akademik Kab/Kota 1</td><td>90</td></tr>
                                    <tr><td>{{ $no++ }}</td><td>Sertifikat Non Akademik Provinsi 1</td><td>Tidak Ada</td></tr>
                                    <tr><td>{{ $no++ }}</td><td>Nilai Non Akademik Provinsi 1</td><td>0</td></tr>

                                    <tr><td>{{ $no++ }}</td><td>Total Nilai Sertifikat</td><td>90</td></tr>
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
            lengthMenu: [
                [25, 50, 100, -1],
                [25, 50, 100, "All"],
            ],
            pageLength: 50
        });
    });
</script>
@endsection
