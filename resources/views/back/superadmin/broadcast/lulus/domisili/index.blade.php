@extends('layouts.back')

@section('title', 'Broadcast Domisili - PPDB SMPN Maju Jaya')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 col-12">
                </div>
                <div class="col-sm-6 col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="iconly-Home icli svg-color"></i></a></li>
                        <li class="breadcrumb-item">Broadcast Domisili</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        {{-- <div class="alert alert-success">Pesan berhasil dikirim.</div> --}}

        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Kirim Pesan Broadcast ke Siswa Domisili yang Lulus</h5>
                <button type="button"
                    class="btn btn-primary sweet-broadcast"
                    data-url="#"
                    data-title="Kirim Pesan Broadcast?"
                    data-text="Yakin ingin broadcast ke semua siswa domisili yang lulus?">
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
                            <tr>
                                <td>1</td>
                                <td>Andi Saputra</td>
                                <td>08123456789</td>
                                <td>SMPN 1 Contoh</td>
                                <td><span class="badge badge-success">Delivered</span></td>
                                <td>23/06/2025 10:45</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Budi Santoso</td>
                                <td>08234567890</td>
                                <td>SMPN 2 Contoh</td>
                                <td><span class="badge badge-danger">Failed</span></td>
                                <td>23/06/2025 10:50</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Citra Ayu</td>
                                <td>08345678901</td>
                                <td>SMPN 3 Contoh</td>
                                <td><span class="badge badge-info">Sent</span></td>
                                <td>23/06/2025 11:00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
