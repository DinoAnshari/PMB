@extends('layouts.back')

@section('title', 'Data Video - PPDB SMPN Maju Jaya')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <h2>Data Video</h2>
                </div>
                <div class="col-sm-6 col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="iconly-Home icli svg-color"></i></a></li>
                        <li class="breadcrumb-item">Video</li>
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
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target=".video_create_modal">Tambah Video</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-6">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Gambar</th>
                                        <th>Video URL</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Contoh Judul Video</td>
                                        <td>Deskripsi video yang singkat dan padat untuk tampilan statis.</td>
                                        <td>
                                            <img src="https://via.placeholder.com/100x60.png?text=Gambar" alt="video" width="100">
                                        </td>
                                        <td>
                                            <a href="https://youtu.be/dQw4w9WgXcQ" target="_blank">https://youtu.be/dQw4w9WgXcQ</a>
                                        </td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit">
                                                    <a href="#" class="edit-video-modal" data-bs-toggle="modal" data-bs-target=".video_edit_modal" title="Ubah Video">
                                                        <i class="icon-pencil-alt"></i>
                                                    </a>
                                                </li>
                                                <li class="delete">
                                                    <a href="#" class="delete-video-modal" data-bs-toggle="modal" data-bs-target=".video_delete_modal" title="Hapus Video">
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
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Gambar</th>
                                        <th>Video URL</th>
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
@include('back.superadmin.videos.modal.create')
@include('back.superadmin.videos.modal.edit')
@include('back.superadmin.videos.modal.delete')
@endpush
@endsection