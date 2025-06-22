@extends('layouts.back')

@section('title', 'Data Siswa - PPDB SMPN Maju Jaya')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <h2>Data Siswa</h2>
                </div>
                <div class="col-sm-6 col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="iconly-Home icli svg-color"></i></a></li>
                        <li class="breadcrumb-item">Data Siswa</li>
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
                    </div>
                    <div class="card-body">
                        <form method="POST" action="#" id="bulk-delete-form">
                            <div class="mb-3">
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Yakin ingin menghapus data yang dipilih?')">Hapus Terpilih</button>
                            </div>

                            <div class="table">
                                <table class="display" id="basic-6">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" id="select-all"></th>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Sekolah</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox" name="ids[]" value="1"></td>
                                            <td>1</td>
                                            <td>Andi Saputra</td>
                                            <td>andi@example.com</td>
                                            <td>SMPN 1 Maju Jaya</td>
                                            <td>
                                                <ul class="action">
                                                    <li class="edit">
                                                        <a href="#" class="sweet-122"
                                                            data-url="#"
                                                            data-title="Reset Password untuk Andi Saputra?"
                                                            data-text="Apakah Anda yakin ingin mereset password Andi Saputra?"
                                                            title="Reset Password">
                                                            <i class="icon-lock"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="ids[]" value="2"></td>
                                            <td>2</td>
                                            <td>Siti Nurhaliza</td>
                                            <td>siti@example.com</td>
                                            <td>SMPN 2 Maju Jaya</td>
                                            <td>
                                                <ul class="action">
                                                    <li class="edit">
                                                        <a href="#" class="sweet-122"
                                                            data-url="#"
                                                            data-title="Reset Password untuk Siti Nurhaliza?"
                                                            data-text="Apakah Anda yakin ingin mereset password Siti Nurhaliza?"
                                                            title="Reset Password">
                                                            <i class="icon-lock"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th></th>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Sekolah</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById('select-all').addEventListener('click', function(event) {
        let checkboxes = document.querySelectorAll('input[name="ids[]"]');
        checkboxes.forEach(cb => cb.checked = event.target.checked);
    });

    document.addEventListener('DOMContentLoaded', function () {
        jQuery('#basic-6').DataTable({
            columnDefs: [
                { orderable: false, targets: 0 },
                { orderable: false, targets: -1 }
            ]
        });
    });
</script>

@endsection
