@extends('layouts.back')

@section('title', 'Data FAQ - PPDB SMPN Maju Jaya')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <h2>Data FAQ</h2>
                </div>
                <div class="col-sm-6 col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="iconly-Home icli svg-color"></i></a></li>
                        <li class="breadcrumb-item">FAQ</li>
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
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target=".faq_create_modal">Tambah FAQ</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-6">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Pertanyaan</th>
                                        <th>Jawaban</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Apa itu PPDB?</td>
                                        <td>PPDB adalah Penerimaan Peserta Didik Baru yang dilakukan secara online...</td>
                                        <td><span class="badge bg-success">Aktif</span></td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit">
                                                    <a href="#" data-id="1" class="edit-faq-modal" data-bs-toggle="modal" data-bs-target=".faq_edit_modal" title="Ubah FAQ">
                                                        <i class="icon-pencil-alt"></i>
                                                    </a>
                                                </li>
                                                <li class="delete">
                                                    <a href="#" class="delete-faq-modal" data-id="1" data-bs-toggle="modal" data-bs-target=".faq_delete_modal" title="Hapus FAQ">
                                                        <i class="icon-trash"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Bagaimana cara mendaftar?</td>
                                        <td>Untuk mendaftar, silakan klik menu Daftar dan isi semua data yang diperlukan...</td>
                                        <td><span class="badge bg-secondary">Nonaktif</span></td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit">
                                                    <a href="#" data-id="2" class="edit-faq-modal" data-bs-toggle="modal" data-bs-target=".faq_edit_modal" title="Ubah FAQ">
                                                        <i class="icon-pencil-alt"></i>
                                                    </a>
                                                </li>
                                                <li class="delete">
                                                    <a href="#" class="delete-faq-modal" data-id="2" data-bs-toggle="modal" data-bs-target=".faq_delete_modal" title="Hapus FAQ">
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
                                        <th>Pertanyaan</th>
                                        <th>Jawaban</th>
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
    @push('modal')
    @include('back.superadmin.faqs.modal.create')
    @include('back.superadmin.faqs.modal.edit')
    @include('back.superadmin.faqs.modal.delete')
@endpush
@endsection
