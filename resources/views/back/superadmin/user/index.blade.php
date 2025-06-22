@extends('layouts.back')

@section('title', 'Data Petugas - PPDB SMPN Maju Jaya')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <h2>Data User</h2>
                </div>
                <div class="col-sm-6 col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="iconly-Home icli svg-color"></i></a></li>
                        <li class="breadcrumb-item">Data User</li>
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
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target=".user_create_modal">Tambah User</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-6">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Sekolah</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Andi Saputra</td>
                                        <td>andi@example.com</td>
                                        <td>
                                            <span class="badge bg-primary">Admin</span>
                                        </td>
                                        <td>SMPN 1 Pematangsiantar</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit">
                                                    <a href="#" class="edit-user-modal" data-bs-toggle="modal" data-bs-target=".user_edit_modal" title="Edit User">
                                                        <i class="icon-pencil-alt"></i>
                                                    </a>
                                                </li>
                                                <li class="delete">
                                                    <a href="#" class="delete-user-modal" data-bs-toggle="modal" data-bs-target=".user_delete_modal" title="Hapus User">
                                                        <i class="icon-trash"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Siti Nurhaliza</td>
                                        <td>siti@example.com</td>
                                        <td>
                                            <span class="badge bg-primary">Petugas</span>
                                        </td>
                                        <td>SMPN 2 Pematangsiantar</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit">
                                                    <a href="#" class="edit-user-modal" data-bs-toggle="modal" data-bs-target=".user_edit_modal" title="Edit User">
                                                        <i class="icon-pencil-alt"></i>
                                                    </a>
                                                </li>
                                                <li class="delete">
                                                    <a href="#" class="delete-user-modal" data-bs-toggle="modal" data-bs-target=".user_delete_modal" title="Hapus User">
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
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Sekolah</th>
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
    @include('back.superadmin.user.modal.create')
    @include('back.superadmin.user.modal.edit')
    @include('back.superadmin.user.modal.delete')
@endpush
@endsection
