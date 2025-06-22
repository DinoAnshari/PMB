@extends('layouts.back')

@section('title', 'Settings - PPDB SMPN Maju Jaya')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <h2>Settings</h2>
                </div>
                <div class="col-sm-6 col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('dashboard/index_super_admin') }}"><i class="iconly-Home icli svg-color"></i></a></li>
                        <li class="breadcrumb-item">Settings</li>
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
                    <div class="card-body">

                        <div class="mb-3">
                            <label class="form-label fw-bold">Footer Text:</label>
                            <p>PPDB SMP Negeri Maju Jaya 2025</p>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Alamat:</label>
                            <p>Jalan Pendidikan No. 123, Maju Jaya</p>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Email:</label>
                            <p>info@majujaya.sch.id</p>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">No. Telepon:</label>
                            <p>(0622) 123456</p>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Copyright:</label>
                            <p>&copy; 2025 SMPN Maju Jaya</p>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Gambar Logo/Footer:</label><br>
                            <img src="{{ asset('storage/example/logo-footer.png') }}" alt="Footer Image" width="150">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Gambar Header:</label><br>
                            <img src="{{ asset('storage/example/header.png') }}" alt="Header Image" width="150">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Gambar Login (uk. 1090x930 piksel):</label><br>
                            <img src="{{ asset('storage/example/login.png') }}" alt="Login Image" width="150">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Gambar Register (uk. 770x927 piksel):</label><br>
                            <img src="{{ asset('storage/example/register.png') }}" alt="Register Image" width="150">
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
