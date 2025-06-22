@extends('layouts.back')

@section('title', 'Data Timeline - PPDB SMPN Maju Jaya')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <h2>Data Timeline</h2>
                </div>
                <div class="col-sm-6 col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <i class="iconly-Home icli svg-color"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item">Timeline</li>
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
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target=".timeline_create_modal">Tambah Timeline</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-6">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>2025-07-01</td>
                                        <td>Pendaftaran Dibuka</td>
                                        <td>Proses pendaftaran PPDB resmi dibuka mulai tanggal ini.</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit">
                                                    <a href="#" class="edit-timeline-modal" data-bs-toggle="modal" data-bs-target=".timeline_edit_modal" title="Ubah Timeline">
                                                        <i class="icon-pencil-alt"></i>
                                                    </a>
                                                </li>
                                                <li class="delete">
                                                    <a href="#" class="delete-timeline-modal" data-bs-toggle="modal" data-bs-target=".timeline_delete_modal" title="Hapus Timeline">
                                                        <i class="icon-trash"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>2025-07-15</td>
                                        <td>Seleksi Administrasi</td>
                                        <td>Tim akan memverifikasi berkas peserta yang telah mendaftar.</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit">
                                                    <a href="#" class="edit-timeline-modal" data-bs-toggle="modal" data-bs-target=".timeline_edit_modal" title="Ubah Timeline">
                                                        <i class="icon-pencil-alt"></i>
                                                    </a>
                                                </li>
                                                <li class="delete">
                                                    <a href="#" class="delete-timeline-modal" data-bs-toggle="modal" data-bs-target=".timeline_delete_modal" title="Hapus Timeline">
                                                        <i class="icon-trash"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
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
@include('back.superadmin.timelines.modal.create')
@include('back.superadmin.timelines.modal.edit')
@include('back.superadmin.timelines.modal.delete')
@endpush

@endsection