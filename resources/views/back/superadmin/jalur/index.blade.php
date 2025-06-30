@extends('layouts.back')

@section('title', 'Data Jalur Pendaftaran - PPDB SMPN Maju Jaya')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <h2>Data Jalur Pendaftaran</h2>
                </div>
                <div class="col-sm-6 col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('dashboard/index_super_admin') }}"><i class="iconly-Home icli svg-color"></i></a></li>
                        <li class="breadcrumb-item">Jalur Pendaftaran</li>
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
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target=".jalur_create_modal">Tambah Jalur</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-6">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Jalur</th>
                                        <th>Tanggal Mulai</th>
                                        <th>Tanggal Selesai</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($jalurLists as $index => $jalur)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ ucfirst($jalur->nama) }}</td>
                                        <td>{{ $jalur->tanggal_mulai }}</td>
                                        <td>{{ $jalur->tanggal_selesai }}</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit">
                                                    <a href="#" data-id="{{ $jalur->id }}" class="edit-jalur-modal" data-bs-toggle="modal" data-bs-target=".jalur_edit_modal" title="Ubah Jalur">
                                                        <i class="icon-pencil-alt"></i>
                                                    </a>
                                                </li>
                                                <li class="delete">
                                                    <a href="#" class="delete-jalur-modal" data-id="{{ $jalur->id }}" data-bs-toggle="modal" data-bs-target=".jalur_delete_modal" title="Hapus Jalur">
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
                                        <th>Nama Jalur</th>
                                        <th>Tanggal Mulai</th>
                                        <th>Tanggal Selesai</th>
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
@include('back.superadmin.jalur.modal.create')
@include('back.superadmin.jalur.modal.edit')
@include('back.superadmin.jalur.modal.delete')
@endpush

@push('js')
@include('back.superadmin.jalur._script')
@endpush

@endsection