@extends('layouts.back')

@section('title', 'Data Sekolah - PPDB SMPN Maju Jaya')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <h2>Data Sekolah</h2>
                </div>
                <div class="col-sm-6 col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="iconly-Home icli svg-color"></i></a></li>
                        <li class="breadcrumb-item">Data Sekolah</li>
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
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target=".sekolah_create_modal">Tambah Data</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-6">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Sekolah</th>
                                        <th>Alamat Sekolah</th>
                                        <th>Latitude</th>
                                        <th>Longitude</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($schools as $index => $sekolah)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $sekolah->nama_sekolah }}</td>
                                        <td>{{ $sekolah->alamat_sekolah }}</td>
                                        <td>{{ $sekolah->latitude }}</td>
                                        <td>{{ $sekolah->longitude }}</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit">
                                                    <a href="#" data-id="{{ $sekolah->id }}" class="edit-sekolah-modal" data-bs-toggle="modal" data-bs-target=".sekolah_edit_modal" title="Ubah Sekolah">
                                                        <i class="icon-pencil-alt"></i>
                                                    </a>
                                                </li>
                                                <li class="delete">
                                                    <a href="#" class="delete-sekolah-modal" data-id="{{ $sekolah->id }}" data-bs-toggle="modal" data-bs-target=".sekolah_delete_modal" title="Hapus Sekolah">
                                                        <i class="icon-trash"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Sekolah</th>
                                        <th>Alamat Sekolah</th>
                                        <th>Latitude</th>
                                        <th>Longitude</th>
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

@push('modal')
@include('back.superadmin.sekolah.modal.create')
@include('back.superadmin.sekolah.modal.edit')
@include('back.superadmin.sekolah.modal.delete')
@endpush

@push('js')
@include('back.superadmin.sekolah._script')
@endpush

@endsection