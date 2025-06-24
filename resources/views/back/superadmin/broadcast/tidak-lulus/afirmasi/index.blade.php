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
                        <li class="breadcrumb-item"><a href="#"><i class="iconly-Home icli svg-color"></i></a></li>
                        <li class="breadcrumb-item">Broadcast Afirmasi (Tidak Lulus)</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        {{-- <div class="alert alert-success">Pesan berhasil dikirim.</div> --}}

        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Kirim Pesan Broadcast ke Siswa Afirmasi yang Tidak Lulus</h5>
                <button type="button"
                    class="btn btn-danger sweet-broadcast"
                    data-url="#"
                    data-title="Kirim Pesan Broadcast?"
                    data-text="Yakin ingin broadcast ke semua siswa afirmasi yang tidak lulus?">
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
                                <td>Nadira Salsabila</td>
                                <td>081122334455</td>
                                <td>SMPN 4 Contoh</td>
                                <td><span class="badge badge-success">Delivered</span></td>
                                <td>23/06/2025 13:10</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Rafi Ilham</td>
                                <td>082233445566</td>
                                <td>SMPN 5 Contoh</td>
                                <td><span class="badge badge-danger">Failed</span></td>
                                <td>23/06/2025 13:15</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Sarah Lestari</td>
                                <td>083344556677</td>
                                <td>SMPN 6 Contoh</td>
                                <td><span class="badge badge-info">Sent</span></td>
                                <td>23/06/2025 13:20</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
