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
                        <li class="breadcrumb-item"><a href="#"><i class="iconly-Home icli svg-color"></i></a></li>
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
                    <div class="card-header pb-0 card-no-border">
                        <h4>Data Pendaftar Jalur Afirmasi</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-6">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Sekolah Tujuan</th>
                                        <th>KK</th>
                                        <th>SKL/Ijazah</th>
                                        <th>Dokumen Pendukung</th>
                                        <th>Status Berkas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Rina Maharani</td>
                                        <td>SMPN 1 Maju Jaya</td>
                                        <td><a href="#" target="_blank">Lihat KK</a></td>
                                        <td><a href="#" target="_blank">Lihat SKL/Ijazah</a></td>
                                        <td><a href="#" target="_blank">Lihat Dok.</a></td>
                                        <td><span class="badge badge-success">Lulus Berkas</span></td>
                                        <td>
                                            <div class="d-flex justify-content-start align-items-center gap-2">
                                                <a href="#" class="btn btn-sm btn-primary" title="Lihat Sekolah">
                                                    <i class="iconly-Category icli"></i>
                                                </a>
                                                <a href="#" target="_blank" title="Detail Sekolah" class="btn btn-sm btn-primary">
                                                    <i class="iconly-Paper icli"></i>
                                                </a>
                                                <form action="#" method="POST" class="d-flex align-items-center gap-2">
                                                    <select name="status" class="form-control form-control-sm w-auto">
                                                        <option value="Lulus Berkas" selected>Lulus Berkas</option>
                                                        <option value="Tidak Lulus Berkas">Tidak Lulus Berkas</option>
                                                    </select>
                                                    <button type="submit" class="btn btn-sm btn-primary">Apply</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Ahmad Fauzi</td>
                                        <td>SMPN 3 Maju Jaya</td>
                                        <td><a href="#" target="_blank">Lihat KK</a></td>
                                        <td>Tidak Ada</td>
                                        <td>Tidak Ada</td>
                                        <td><span class="badge badge-danger">Tidak Lulus Berkas</span></td>
                                        <td>
                                            <div class="d-flex justify-content-start align-items-center gap-2">
                                                <a href="#" class="btn btn-sm btn-primary" title="Lihat Sekolah">
                                                    <i class="iconly-Category icli"></i>
                                                </a>
                                                <a href="#" target="_blank" title="Detail Sekolah" class="btn btn-sm btn-primary">
                                                    <i class="iconly-Paper icli"></i>
                                                </a>
                                                <form action="#" method="POST" class="d-flex align-items-center gap-2">
                                                    <select name="status" class="form-control form-control-sm w-auto">
                                                        <option value="Lulus Berkas">Lulus Berkas</option>
                                                        <option value="Tidak Lulus Berkas" selected>Tidak Lulus Berkas</option>
                                                    </select>
                                                    <button type="submit" class="btn btn-sm btn-primary">Apply</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Sekolah Tujuan</th>
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
