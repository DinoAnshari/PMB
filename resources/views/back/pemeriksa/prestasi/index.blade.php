@extends('layouts.back')

@section('title', 'Data Prestasi - PPDB SMPN Maju Jaya')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 col-12">
                </div>
                <div class="col-sm-6 col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('dashboard/index_pemeriksa_prestasi') }}"><i class="iconly-Home icli svg-color"></i></a></li>
                        <li class="breadcrumb-item">Daftar Jalur Prestasi</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0 card-no-border">
                        <h4>Data Pendaftar Jalur Prestasi</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-6">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Sekolah Tujuan</th>
                                        <th>SKL/Ijazah</th>
                                        <th>Rata-rata Keseluruhan</th>
                                        <th>Status Berkas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($achievementTracks as $index => $prestasi)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $prestasi->user->name ?? '-' }}</td>
                                        <td>{{ $prestasi->user->sekolah->nama_sekolah ?? '-' }}</td>
                                        <td>
                                            @if($prestasi->skl_ijazah)
                                            <a href="{{ asset('storage/' . $prestasi->skl_ijazah) }}" target="_blank">Lihat SKL/Ijazah</a>
                                            @else
                                            Tidak Ada
                                            @endif
                                        </td>
                                        <td>{{ $prestasi->rata_rata_keseluruhan ?? 'Tidak Ada' }}</td>
                                        <td>
                                            @if ($prestasi->statusBerkas)
                                            <span class="badge {{ $prestasi->statusBerkas->status == 'Lulus Berkas' ? 'badge-success' : 'badge-danger' }}">
                                                {{ $prestasi->statusBerkas->status }}
                                            </span>
                                            @else
                                            <span class="badge badge-secondary">Belum Ditentukan</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-start align-items-center gap-2">
                                                <a href="{{ route('prestasi.show-pemeriksa', $prestasi->id) }}" class="btn btn-sm btn-primary" title="Lihat Prestasi">
                                                    <i class="iconly-Category icli"></i>
                                                </a>

                                                <a href="#" target="_blank" title="Detail Prestasi" class="btn btn-sm btn-primary">
                                                    <i class="iconly-Paper icli"></i>
                                                </a>

                                                <form action="{{ route('prestasi.update-berkas', $prestasi->id) }}" method="POST" class="d-flex align-items-center gap-2">
                                                    @csrf
                                                    @method('POST')
                                                    <select name="status" class="form-control form-control-sm w-auto">
                                                        <option value="Lulus Berkas" {{ $prestasi->statusBerkas?->status == 'Lulus Berkas' ? 'selected' : '' }}>Lulus Berkas</option>
                                                        <option value="Tidak Lulus Berkas" {{ $prestasi->statusBerkas?->status == 'Tidak Lulus Berkas' ? 'selected' : '' }}>Tidak Lulus Berkas</option>
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
                                        <th>Sekolah Tujuan</th>
                                        <th>SKL/Ijazah</th>
                                        <th>Rata-rata Keseluruhan</th>
                                        <th>Status Berkas</th>
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