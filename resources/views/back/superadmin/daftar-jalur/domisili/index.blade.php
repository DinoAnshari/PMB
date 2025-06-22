@extends('layouts.back')

@section('title', 'Data Domisili - PPDB SMPN Pematangsiantar')

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
                        <li class="breadcrumb-item">Daftar jalur Domisili</li>
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
                    <div class="card-header pb-0 card-no-border d-flex gap-2">
                        {{-- Export PDF --}}
                        <a href="{{ route('domisili-lulus-pdf.index') }}" target="_blank" class="btn btn-primary">
                            <i class="iconly-Download icli"></i> PDF Lulus
                        </a>
                        <a href="{{ route('domisili-tidak-lulus-pdf.index') }}" target="_blank" class="btn btn-danger">
                            <i class="iconly-Download icli"></i> PDF Tidak Lulus
                        </a>

                        {{-- Export Excel --}}
                        <a href="{{ route('domisili-lulus-excel.all') }}" class="btn btn-success">
                            <i class="iconly-Download icli"></i> Excel Lulus (All)
                        </a>
                        <a href="{{ route('domisili-tidak-lulus-excel.all') }}" class="btn btn-warning">
                            <i class="iconly-Download icli"></i> Excel Tidak Lulus (All)
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-6">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jarak (KM)</th>
                                        <th>KK</th>
                                        <th>SKL/Ijazah</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($domisilis as $index => $domisili)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $domisili->user->name ?? '-' }}</td>
                                        <td>{{ number_format($domisili->jarak_km, 2) }} km</td>
                                        <td>
                                            @if($domisili->kartu_keluarga)
                                            <a href="{{ asset('storage/' . $domisili->kartu_keluarga) }}" target="_blank">Lihat KK</a>
                                            @else
                                            Tidak Ada
                                            @endif
                                        </td>
                                        <td>
                                            @if($domisili->skl_ijazah)
                                            <a href="{{ asset('storage/' . $domisili->skl_ijazah) }}" target="_blank">Lihat SKL/Ijazah</a>
                                            @else
                                            Tidak Ada
                                            @endif
                                        </td>
                                        <td>
                                            @if ($domisili->statusPendaftaran)
                                            <span class="badge {{ $domisili->statusPendaftaran->status == 'Lulus' ? 'badge-success' : 'badge-danger' }}">
                                                {{ $domisili->statusPendaftaran->status }}
                                            </span>
                                            @else
                                            <span class="badge badge-secondary">Belum Ditentukan</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-start align-items-center gap-2">
                                                <a href="{{ route('show-domisili.show', $domisili->id) }}" class="btn btn-sm btn-primary" title="Lihat Sekolah">
                                                    <i class="iconly-Category icli"></i>
                                                </a>

                                                <a href="{{ route('domisili-cetak-pendaftaran.index', $domisili->id) }}" target="_blank" title="Detail Sekolah" class="btn btn-sm btn-primary">
                                                    <i class="iconly-Paper icli"></i>
                                                </a>

                                                <form action="{{ route('update-domisili.index', $domisili->id) }}" method="POST" class="d-flex align-items-center gap-2">
                                                    @csrf
                                                    @method('POST')
                                                    <select name="status" class="form-control form-control-sm w-auto">
                                                        <option value="Lulus" {{ $domisili->statusPendaftaran?->status == 'Lulus' ? 'selected' : '' }}>Lulus</option>
                                                        <option value="Tidak Lulus" {{ $domisili->statusPendaftaran?->status == 'Tidak Lulus' ? 'selected' : '' }}>Tidak Lulus</option>
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
                                        <th>Jarak (KM)</th>
                                        <th>KK</th>
                                        <th>SKL/Ijazah</th>
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