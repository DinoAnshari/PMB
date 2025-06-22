@extends('layouts.back')

@section('title', 'Data Slider - PPDB SMPN Pematangsiantar')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <h2>Data Slider</h2>
                </div>
                <div class="col-sm-6 col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="iconly-Home icli svg-color"></i></a></li>
                        <li class="breadcrumb-item">Slider</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0 card-no-border">
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target=".slider_create_modal">Tambah Slider</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-6">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Judul</th>
                                        <th>Sub Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Urutan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="{{ asset('storage/sliders/contoh1.jpg') }}" alt="slider" width="100"></td>
                                        <td>Pendaftaran Dibuka</td>
                                        <td>2025/2026</td>
                                        <td>Segera daftar ke SMPN Pematangsiantar untuk tahun ajaran baru!</td>
                                        <td>1</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit">
                                                    <a href="#" class="edit-slider-modal" data-bs-toggle="modal" data-bs-target=".slider_edit_modal" title="Ubah Slider">
                                                        <i class="icon-pencil-alt"></i>
                                                    </a>
                                                </li>
                                                <li class="delete">
                                                    <a href="#" class="delete-slider-modal" data-bs-toggle="modal" data-bs-target=".slider_delete_modal" title="Hapus Slider">
                                                        <i class="icon-trash"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><img src="{{ asset('storage/sliders/contoh2.jpg') }}" alt="slider" width="100"></td>
                                        <td>Fasilitas Lengkap</td>
                                        <td>Modern & Nyaman</td>
                                        <td>Sekolah kami dilengkapi laboratorium, perpustakaan, dan ruang kelas interaktif.</td>
                                        <td>2</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit">
                                                    <a href="#" class="edit-slider-modal" data-bs-toggle="modal" data-bs-target=".slider_edit_modal" title="Ubah Slider">
                                                        <i class="icon-pencil-alt"></i>
                                                    </a>
                                                </li>
                                                <li class="delete">
                                                    <a href="#" class="delete-slider-modal" data-bs-toggle="modal" data-bs-target=".slider_delete_modal" title="Hapus Slider">
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
                                        <th>Gambar</th>
                                        <th>Judul</th>
                                        <th>Sub Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Urutan</th>
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
@include('back.superadmin.sliders.modal.create')
@endpush
@endsection