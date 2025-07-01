@extends('layouts.back')

@section('title', 'Data Siswa - PPDB SMPN Pematangsiantar')

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
                        <li class="breadcrumb-item"><a href="{{ url('dashboard/index_super_admin') }}"><i class="iconly-Home icli svg-color"></i></a></li>
                        <li class="breadcrumb-item">Data Siswa</li>
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
                        {{-- Kalau mau tambah siswa manual, buttonnya bisa dipasang di sini --}}
                        {{-- <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target=".siswa_create_modal">Tambah Siswa</button> --}}
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('siswa.bulkDelete') }}" id="bulk-delete-form">
                            @csrf
                            @method('DELETE')
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
                                        @foreach($siswa as $index => $user)
                                        <tr>
                                            <td><input type="checkbox" name="ids[]" value="{{ $user->id }}"></td>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->sekolah->nama_sekolah ?? '-' }}</td>
                                            <td>
                                                <ul class="action">
                                                    <li class="edit">
                                                        <a href="{{ route('siswa.resetPassword', $user->id) }}"
                                                            class="sweet-122"
                                                            data-url="{{ route('siswa.resetPassword', $user->id) }}"
                                                            data-title="Reset Password untuk {{ $user->name }}?"
                                                            data-text="Apakah Anda yakin ingin mereset password {{ $user->name }}?"
                                                            title="Reset Password">
                                                            <i class="icon-lock"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        @endforeach
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
    document.addEventListener('DOMContentLoaded', function() {
    jQuery('#basic-6').DataTable({
        columnDefs: [
            { orderable: false, targets: 0 },  
            { orderable: false, targets: -1 }   
        ]
    });
});
</script>
@endsection