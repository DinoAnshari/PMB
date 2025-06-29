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
                            <a href="{{ url('dashboard/index_super_admin') }}">
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
                                    @foreach($timelines as $index => $timeline)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $timeline->tanggal }}</td>
                                        <td>{{ $timeline->judul }}</td>
                                        <td>{{ Str::limit(strip_tags($timeline->deskripsi), 100) }}</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit">
                                                    <a href="#" data-id="{{ $timeline->id }}" class="edit-timeline-modal" data-bs-toggle="modal" data-bs-target=".timeline_edit_modal" title="Ubah Timeline">
                                                        <i class="icon-pencil-alt"></i>
                                                    </a>
                                                </li>
                                                <li class="delete">
                                                    <a href="#" class="delete-timeline-modal" data-id="{{ $timeline->id }}" data-bs-toggle="modal" data-bs-target=".timeline_delete_modal" title="Hapus Timeline">
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

@push('js')
@include('back.superadmin.timelines._script')
@endpush

@endsection