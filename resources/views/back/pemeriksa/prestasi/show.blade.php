@extends('layouts.back')

@section('title', 'Data Prestasi - PPDB SMPN Maju Jaya')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <h2>Data Prestasi {{ $achievementTrack->user->name }}</h2>
                </div>
                <div class="col-sm-6 col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ url('dashboard/index_pemeriksa_prestasi') }}">
                                <i class="iconly-Home icli svg-color"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ url('dashboard/index_pemeriksa_prestasi') }}">Prestasi</a>
                        </li>
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
                                    @php $no = 1; @endphp
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>SKL/Ijazah</td>
                                        <td>
                                            @if($achievementTrack->skl_ijazah)
                                            <a href="{{ asset('storage/' . $achievementTrack->skl_ijazah) }}" target="_blank">Lihat SKL/Ijazah</a>
                                            @else
                                            Tidak Ada
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Kartu Keluarga</td>
                                        <td>
                                            @if($achievementTrack->kartu_keluarga)
                                            <a href="{{ asset('storage/' . $achievementTrack->kartu_keluarga) }}" target="_blank">Lihat Kartu Keluarga</a>
                                            @else
                                            Tidak Ada
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Rata-Rata Keseluruhan</td>
                                        <td>{{ $achievementTrack->rata_rata_keseluruhan ?? 'Tidak Ada' }}</td>
                                    </tr>

                                    @foreach([6] as $kelas)
                                    @foreach([1, 2] as $semester)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Rapot Kelas {{ $kelas }} Semester {{ $semester }}</td>
                                        <td>
                                            @if($achievementTrack["rapot_kelas{$kelas}_semester{$semester}"])
                                            <a href="{{ asset('storage/' . $achievementTrack["rapot_kelas{$kelas}_semester{$semester}"]) }}" target="_blank">Lihat Rapot</a>
                                            @else
                                            Tidak Ada
                                            @endif
                                        </td>
                                    </tr>
                                    @foreach(['b_indo', 'matematika', 'ipa', 'b_inggris', 'pai'] as $mapel)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Nilai {{ ucfirst(str_replace('_', ' ', $mapel)) }} Kelas {{ $kelas }} Semester {{ $semester }}</td>
                                        <td>{{ $achievementTrack["nilai_{$mapel}_kelas{$kelas}_semester{$semester}"] ?? 'Tidak Ada' }}</td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Rata-Rata Kelas {{ $kelas }} Semester {{ $semester }}</td>
                                        <td>{{ $achievementTrack["rata_rata_kelas{$kelas}_semester{$semester}"] ?? 'Tidak Ada' }}</td>
                                    </tr>
                                    @endforeach
                                    @endforeach

                                    @foreach(['akademik', 'non_akademik'] as $kategori)
                                    @foreach([1, 2] as $tingkat)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Sertifikat {{ ucfirst($kategori) }} Kab/Kota {{ $tingkat }}</td>
                                        <td>{{ $achievementTrack["sertifikat_{$kategori}_kabkota_{$tingkat}"] ?? 'Tidak Ada' }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Nilai {{ ucfirst($kategori) }} Kab/Kota {{ $tingkat }}</td>
                                        <td>{{ $achievementTrack["nilai_{$kategori}_kabkota_{$tingkat}"] ?? 'Tidak Ada' }}</td>
                                    </tr>
                                    @endforeach
                                    @foreach(['provinsi', 'nasional', 'internasional'] as $tingkat)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Sertifikat {{ ucfirst($kategori) }} {{ ucfirst($tingkat) }} 1</td>
                                        <td>{{ $achievementTrack["sertifikat_{$kategori}_{$tingkat}_1"] ?? 'Tidak Ada' }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Nilai {{ ucfirst($kategori) }} {{ ucfirst($tingkat) }} 1</td>
                                        <td>{{ $achievementTrack["nilai_{$kategori}_{$tingkat}_1"] ?? 'Tidak Ada' }}</td>
                                    </tr>
                                    @endforeach
                                    @endforeach

                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Total Nilai Sertifikat</td>
                                        <td>{{ $achievementTrack->total_nilai_sertifikat ?? 'Tidak Ada' }}</td>
                                    </tr>

                                    @if(!$achievementTrack)
                                    <tr>
                                        <td colspan="3" class="text-center">Belum ada data prestasi.</td>
                                    </tr>
                                    @endif
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
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
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