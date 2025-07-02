@extends('layouts.back')

@section('title', 'Data Jalur Afirmasi - PPDB SMPN Maju Jaya')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <h2>Data {{$affirmationTrack->user->name}}</h2>
                </div>
                <div class="col-sm-6 col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ url('dashboard/index_super_admin') }}">
                                <i class="iconly-Home icli svg-color"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ url('dashboard/afirmasi') }}">Jalur Afirmasi</a>
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
                                    @if($affirmationTrack)
                                    @php $no = 1; @endphp
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>SKL/Ijazah</td>
                                        <td><a href="{{ asset('storage/' . $affirmationTrack->skl_ijazah) }}" target="_blank">Lihat SKL/Ijazah</a></td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Kartu Keluarga</td>
                                        <td><a href="{{ asset('storage/' . $affirmationTrack->kartu_keluarga) }}" target="_blank">Lihat Kartu Keluarga</a></td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Dokumen Pendukung</td>
                                        <td><a href="{{ asset('storage/' . $affirmationTrack->dokumen_pendukung) }}" target="_blank">Lihat Dokumen Pendukung</a></td>
                                    </tr>


                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>NISN</td>
                                        <td>{{ $affirmationTrack->student->nisn }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>NIK</td>
                                        <td>{{ $affirmationTrack->student->nik }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>No. KK</td>
                                        <td>{{ $affirmationTrack->student->no_kk }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Jenis Kelamin</td>
                                        <td>{{ $affirmationTrack->student->jenis_kelamin }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Tanggal Lahir</td>
                                        <td>{{ \Carbon\Carbon::parse($affirmationTrack->student->tanggal_lahir)->format('d-m-Y') }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Tempat Lahir</td>
                                        <td>{{ $affirmationTrack->student->tempat_lahir }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Agama</td>
                                        <td>{{ $affirmationTrack->student->agama }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Alamat</td>
                                        <td>{{ $affirmationTrack->student->alamat }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Kecamatan</td>
                                        <td>{{ $affirmationTrack->student->kecamatan }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Kelurahan</td>
                                        <td>{{ $affirmationTrack->student->kelurahan }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Asal Sekolah</td>
                                        <td>{{ $affirmationTrack->student->asal_sekolah }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Alamat Asal Sekolah</td>
                                        <td>{{ $affirmationTrack->student->alamat_asal_sekolah }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Pas Foto</td>
                                        <td><img src="{{ asset('storage/' . $affirmationTrack->student->pas_foto) }}" alt="Pas Foto" width="100"></td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Tinggal Dengan</td>
                                        <td>{{ $affirmationTrack->student->tinggal_dengan }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Rata-Rata Keseluruhan</td>
                                        <td>{{ $affirmationTrack->rata_rata_keseluruhan ?? 'Tidak Ada' }}</td>
                                    </tr>
                                    @foreach([6] as $kelas)
                                    @foreach([1, 2] as $semester)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Rapot Kelas {{ $kelas }} Semester {{ $semester }}</td>
                                        <td>
                                            @if($affirmationTrack["rapot_kelas{$kelas}_semester{$semester}"])
                                            <a href="{{ asset('storage/' . $affirmationTrack["rapot_kelas{$kelas}_semester{$semester}"]) }}" target="_blank">Lihat Rapot</a>
                                            @else
                                            Tidak Ada
                                            @endif
                                        </td>
                                    </tr>
                                    @foreach(['b_indo', 'matematika', 'ipa', 'b_inggris', 'pai'] as $mapel)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Nilai {{ ucfirst(str_replace('_', ' ', $mapel)) }} Kelas {{ $kelas }} Semester {{ $semester }}</td>
                                        <td>{{ $affirmationTrack["nilai_{$mapel}_kelas{$kelas}_semester{$semester}"] ?? 'Tidak Ada' }}</td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Rata-Rata Kelas {{ $kelas }} Semester {{ $semester }}</td>
                                        <td>{{ $affirmationTrack["rata_rata_kelas{$kelas}_semester{$semester}"] ?? 'Tidak Ada' }}</td>
                                    </tr>
                                    @endforeach
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="3" class="text-center">Belum ada data afirmasi.</td>
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