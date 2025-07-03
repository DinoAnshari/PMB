@extends('layouts.back')

@section('title', 'Data Afirmasi - PPDB SMPN Maju Jaya')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 col-12">
                </div>
                <div class="col-sm-6 col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('dashboard/index_super_admin') }}"><i class="iconly-Home icli svg-color"></i></a></li>
                        <li class="breadcrumb-item">Daftar Jalur Afirmasi</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0 card-no-border d-flex gap-2">
                        <a href="{{ route('afirmasi.lulus_pdf') }}" target="_blank" class="btn btn-primary">
                            <i class="iconly-Download icli"></i> PDF Lulus
                        </a>
                        <a href="{{ route('afirmasi.tidak_lulus_pdf') }}" target="_blank" class="btn btn-danger">
                            <i class="iconly-Download icli"></i> PDF Tidak Lulus
                        </a>

                        <a href="{{ route('afirmasi.lulus_excel') }}" class="btn btn-success">
                            <i class="iconly-Download icli"></i> Excel Lulus 
                        </a>
                        <a href="{{ route('afirmasi.tidak_lulus_excel') }}" class="btn btn-warning">
                            <i class="iconly-Download icli"></i> Excel Tidak Lulus 
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-6">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>KK</th>
                                        <th>SKL/Ijazah</th>
                                        <th>Dokumen Pendukung</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($affirmationTracks as $index => $afirmasi)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $afirmasi->user->name ?? '-' }}</td>
                                        <td>
                                            @if($afirmasi->kartu_keluarga)
                                            <a href="{{ asset('storage/' . $afirmasi->kartu_keluarga) }}" target="_blank">Lihat KK</a>
                                            @else
                                            Tidak Ada
                                            @endif
                                        </td>
                                        <td>
                                            @if($afirmasi->skl_ijazah)
                                            <a href="{{ asset('storage/' . $afirmasi->skl_ijazah) }}" target="_blank">Lihat SKL/Ijazah</a>
                                            @else
                                            Tidak Ada
                                            @endif
                                        </td>
                                        <td>
                                            @if($afirmasi->dokumen_pendukung)
                                            <a href="{{ asset('storage/' . $afirmasi->dokumen_pendukung) }}" target="_blank">Lihat Dok.</a>
                                            @else
                                            Tidak Ada
                                            @endif
                                        </td>
                                        <td>
                                            @if ($afirmasi->statusPendaftaran)
                                            <span class="badge {{ $afirmasi->statusPendaftaran->status == 'Lulus' ? 'badge-success' : 'badge-danger' }}">
                                                {{ $afirmasi->statusPendaftaran->status }}
                                            </span>
                                            @else
                                            <span class="badge badge-secondary">Belum Ditentukan</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-start align-items-center gap-2">
                                                <a href="{{ route('afirmasi.show', $afirmasi->id) }}" class="btn btn-sm btn-primary" title="Lihat Sekolah">
                                                    <i class="iconly-Category icli"></i>
                                                </a>

                                                <a href="#" target="_blank" title="Detail Sekolah" class="btn btn-sm btn-primary">
                                                    <i class="iconly-Paper icli"></i>
                                                </a>

                                                <form action="{{ route('afirmasi.update_status', $afirmasi->id) }}" method="POST" class="d-flex align-items-center gap-2">
                                                    @csrf
                                                    @method('POST')
                                                    <select name="status" class="form-control form-control-sm w-auto">
                                                        <option value="Lulus" {{ $afirmasi->statusPendaftaran?->status == 'Lulus' ? 'selected' : '' }}>Lulus</option>
                                                        <option value="Tidak Lulus" {{ $afirmasi->statusPendaftaran?->status == 'Tidak Lulus' ? 'selected' : '' }}>Tidak Lulus</option>
                                                    </select>
                                                    <button type="submit" class="btn btn-sm btn-primary">Apply</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>KK</th>
                                        <th>SKL/Ijazah</th>
                                        <th>Dokumen Pendukung</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
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

@endsection