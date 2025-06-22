@extends('layouts.auth')

@section('title', 'Register')

@section('content')
<div class="col-xl-5 login_two_image">
    <img class="bg-img-cover bg-center" src="{{ asset('images/logo-white-1.svg') }}" alt="Default Logo" />
</div>

<div class="col-xl-7 p-0">
    <div class="login-card login-dark login-bg">
        <div>
            <div class="text-center mb-4">
                <a class="logo" href="#">
                    <img src="{{ asset('images/logo/logo.png') }}" alt="Logo" class="img-fluid m-auto" style="max-height: 150px;" />
                </a>
            </div>
            <div class="login-main">
                <form method="POST" action="#" class="theme-form">
                    {{-- CSRF token dihapus karena ini versi statis --}}

                    <h2>Buat Akun</h2>
                    <p>Gunakan data yang valid</p>

                    <div class="form-group">
                        <label class="col-form-label pt-0">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Full Name" required autofocus>
                        {{-- Error message dihapus karena versi statis --}}
                    </div>

                    <div class="form-group">
                        <label class="col-form-label">Email Address</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>

                    <div class="form-group">
                        <label class="col-form-label">Password</label>
                        <div class="form-input position-relative">
                            <input type="password" name="password" class="form-control" placeholder="********" required>
                            <div class="show-hide"><span class="show"></span></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-form-label">SMP Negeri Tujuan</label>
                        <select name="sekolah_id" class="form-control" required>
                            <option value="">* Pilih SMP Negeri Tujuan</option>
                            <option value="1">SMP Negeri 1 Maju Jaya</option>
                            <option value="2">SMP Negeri 2 Maju Jaya</option>
                            <option value="3">SMP Negeri 3 Maju Jaya</option>
                            <option value="4">SMP Negeri 4 Maju Jaya</option>
                            <option value="5">SMP Negeri 5 Maju Jaya</option>
                        </select>
                    </div>

                    <div class="form-group mb-0 checkbox-checked">
                        <button class="btn btn-primary btn-block w-100 mt-3" type="submit">Buat Akun</button>
                    </div>

                    <p class="mt-4 mb-0 text-center">
                        Sudah punya akun?
                        <a class="ms-2" href="#">Sign in</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
