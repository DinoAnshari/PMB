@extends('layouts.back')

@section('title', 'Data Afirmasi - PPDB SMPN Maju Jaya')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <h2>Data Afirmasi</h2>
                </div>
                <div class="col-sm-6 col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('dashboard/index_siswa') }}"><i class="iconly-Home icli svg-color"></i></a></li>
                        <li class="breadcrumb-item">Afirmasi</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    @if(!$afirmasi)
                    <div class="card-header pb-0 card-no-border">
                        <a href="{{ route('afirmasi-siswa.create') }}" class="btn btn-primary">Isi Data Afirmasi</a>
                    </div>
                    @else
                    <div class="card-header pb-0 card-no-border">
                       <a href="{{ route('afirmasi-siswa.edit', $afirmasi->id) }}" class="btn btn-warning">Edit Data Afirmasi</a>
                        <a href="{{ route('jalur-afirmasi.cetak-kartu', $afirmasi->id) }}" target="_blank" class="btn btn-success">Cetak Kartu</a>
                    </div>
                    @endif
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
                                    @if($afirmasi)
                                    @php $no = 1; @endphp
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>SKL/Ijazah</td>
                                        <td><a href="{{ asset('storage/' . $afirmasi->skl_ijazah) }}" target="_blank">Lihat SKL/Ijazah</a></td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Kartu Keluarga</td>
                                        <td><a href="{{ asset('storage/' . $afirmasi->kartu_keluarga) }}" target="_blank">Lihat Kartu Keluarga</a></td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Dokumen Pendukung/kip/lainy</td>
                                        <td><a href="{{ asset('storage/' . $afirmasi->dokumen_pendukung) }}" target="_blank">Lihat Dokumen Pendukung/kip/lainya</a></td>
                                    </tr>
                                    @foreach(['kelas6_semester1' ,'kelas6_semester2'] as $semester)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Nilai Semester ({{ str_replace('_', ' ', ucfirst($semester)) }})</td>
                                        <td>
                                            Bahasa Indonesia: {{ $afirmasi->{'nilai_b_indo_' . $semester} }},
                                            Matematika: {{ $afirmasi->{'nilai_matematika_' . $semester} }},
                                            IPA: {{ $afirmasi->{'nilai_ipa_' . $semester} }},
                                            Bahasa Inggris: {{ $afirmasi->{'nilai_b_inggris_' . $semester} }},
                                            PAI: {{ $afirmasi->{'nilai_pai_' . $semester} }}
                                        </td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Rapot Kelas 6 Semester 1</td>
                                        <td>
                                            <a href="{{ asset('storage/' . $afirmasi->rapot_kelas6_semester1) }}" target="_blank">Lihat Rapot Kelas 6 Semester 1</a><br>
                                            Rata-Rata: {{ $afirmasi->rata_rata_kelas6_semester1 }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Rapot Kelas 6 Semester 2</td>
                                        <td>
                                            <a href="{{ asset('storage/' . $afirmasi->rapot_kelas6_semester2) }}" target="_blank">Lihat Rapot Kelas 6 Semester 2</a><br>
                                            Rata-Rata: {{ $afirmasi->rata_rata_kelas6_semester2 }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Rata-Rata Keseluruhan</td>
                                        <td>{{ $afirmasi->rata_rata_keseluruhan }}</td>
                                    </tr>
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