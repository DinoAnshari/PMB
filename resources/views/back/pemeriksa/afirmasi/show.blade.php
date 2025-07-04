@extends('layouts.back')

@section('title', 'Data Jalur Afirmasi - PPDB SMPN Maju Jaya')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <h2>Data {{ $affirmationTrack->user->name ?? '-' }}</h2>
                </div>
                <div class="col-sm-6 col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ url('dashboard/index_pemeriksa_afirmasi') }}">
                                <i class="iconly-Home icli svg-color"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ url('dashboard/index_pemeriksa_afirmasi') }}">Jalur Afirmasi</a>
                        </li>
                        <li class="breadcrumb-item">Detail Siswa</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
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
                                            @if($affirmationTrack->skl_ijazah)
                                            <a href="{{ asset('storage/' . $affirmationTrack->skl_ijazah) }}" target="_blank">Lihat SKL/Ijazah</a>
                                            @else
                                            <span class="text-danger">Tidak tersedia</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Kartu Keluarga</td>
                                        <td>
                                            @if($affirmationTrack->kartu_keluarga)
                                            <a href="{{ asset('storage/' . $affirmationTrack->kartu_keluarga) }}" target="_blank">Lihat Kartu Keluarga</a>
                                            @else
                                            <span class="text-danger">Tidak tersedia</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>NISN</td>
                                        <td>{{ $affirmationTrack->student->nisn ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>NIK</td>
                                        <td>{{ $affirmationTrack->student->nik ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>No. KK</td>
                                        <td>{{ $affirmationTrack->student->no_kk ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Jenis Kelamin</td>
                                        <td>{{ $affirmationTrack->student->jenis_kelamin ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Tanggal Lahir</td>
                                        <td>{{ optional($affirmationTrack->student)->tanggal_lahir ? \Carbon\Carbon::parse($affirmationTrack->student->tanggal_lahir)->format('d-m-Y') : '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Tempat Lahir</td>
                                        <td>{{ $affirmationTrack->student->tempat_lahir ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Pas Foto</td>
                                        <td>
                                            @if($affirmationTrack->student->pas_foto)
                                            <img src="{{ asset('storage/' . $affirmationTrack->student->pas_foto) }}" alt="Pas Foto" width="100">
                                            @else
                                            <span class="text-danger">Tidak tersedia</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Tinggal Dengan</td>
                                        <td>{{ $affirmationTrack->student->tinggal_dengan ?? '-' }}</td>
                                    </tr>
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

<!-- Leaflet & DataTable -->
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