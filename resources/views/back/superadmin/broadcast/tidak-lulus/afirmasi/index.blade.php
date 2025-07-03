@extends('layouts.back')

@section('title', 'Broadcast Afirmasi (Tidak Lulus) - PPDB SMPN Maju Jaya')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 col-12">
                </div>
                <div class="col-sm-6 col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('dashboard/index_admin_prestasi') }}"><i class="iconly-Home icli svg-color"></i></a></li>
                        <li class="breadcrumb-item">Broadcast Afirmasi</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Kirim Pesan Broadcast ke Siswa Afirmasi yang Tidak Lulus</h5>
                <button type="button"
                    class="btn btn-danger sweet-broadcast"
                    data-url="{{ route('broadcast.{jalur}.{status}.kirim', ['jalur' => 'afirmasi', 'status' => 'tidak-lulus']) }}"
                    data-title="Kirim Pesan Broadcast?"
                    data-text="Yakin ingin broadcast ke semua siswa afirmasi  yang tidak lulus?">
                    <i class="iconly-Send icli"></i> Kirim Pesan Broadcast
                </button>
            </div>
        </div>



        <div class="card">
            <div class="card-header">
                <h5>Status Broadcast</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="display" id="basic-6">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Siswa</th>
                                <th>No HP</th>
                                <th>Sekolah</th>
                                <th>Status</th>
                                <th>Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pesanStatuses as $i => $pesan)
                            <tr>
                                <td>{{ $i + 1 }}</td>
                                <td>{{ $pesan->nama_siswa }}</td>
                                <td>{{ $pesan->no_hp }}</td>
                                <td>{{ $pesan->sekolah }}</td>
                                <td>
                                    <span class="badge 
                @if($pesan->status == 'sent') badge-info
                @elseif($pesan->status == 'delivered') badge-success
                @elseif($pesan->status == 'failed') badge-danger
                @else badge-secondary @endif">
                                        {{ ucfirst($pesan->status) }}
                                    </span>
                                </td>
                                <td>{{ $pesan->updated_at->format('d/m/Y H:i') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection