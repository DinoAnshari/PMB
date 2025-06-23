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
                    <div class="card-header pb-0 card-no-border d-flex gap-2">
                        {{-- Export PDF --}}
                        <a href="#" target="_blank" class="btn btn-primary">
                            <i class="iconly-Download icli"></i> PDF Lulus
                        </a>
                        <a href="#" target="_blank" class="btn btn-danger">
                            <i class="iconly-Download icli"></i> PDF Tidak Lulus
                        </a>

                        {{-- Export Excel --}}
                        <a href="#" class="btn btn-success">
                            <i class="iconly-Download icli"></i> Excel Lulus (All)
                        </a>
                        <a href="#" class="btn btn-warning">
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
                                        <th>KK</th>
                                        <th>SKL/Ijazah</th>
                                        <th>Dokumen Pendukung</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Dummy static row --}}
                                    <tr>
                                        <td>1</td>
                                        <td>Andi Saputra</td>
                                        <td><a href="#" target="_blank">Lihat KK</a></td>
                                        <td><a href="#" target="_blank">Lihat SKL/Ijazah</a></td>
                                        <td><a href="#" target="_blank">Lihat Dok.</a></td>
                                        <td><span class="badge badge-success">Lulus</span></td>
                                        <td>
                                            <div class="d-flex justify-content-start align-items-center gap-2">
                                                <a href="#" class="btn btn-sm btn-primary" title="Lihat Sekolah">
                                                    <i class="iconly-Category icli"></i>
                                                </a>

                                                <a href="#" target="_blank" title="Detail Sekolah" class="btn btn-sm btn-primary">
                                                    <i class="iconly-Paper icli"></i>
                                                </a>

                                                <form action="#" method="POST" class="d-flex align-items-center gap-2">
                                                    {{-- @csrf --}}
                                                    {{-- @method('POST') --}}
                                                    <select name="status" class="form-control form-control-sm w-auto">
                                                        <option value="Lulus" selected>Lulus</option>
                                                        <option value="Tidak Lulus">Tidak Lulus</option>
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
