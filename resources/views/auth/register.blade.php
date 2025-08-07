@extends('layouts.auth')

@section('title', 'Register')

@section('content')
    <div class="col-xl-5 login_two_image">
        @if ($setting?->gambar_register)
            <img class="bg-img-cover bg-center"
                src="{{ asset('storage/' . $setting->gambar_register) }}"
                alt="Logo Header"
                style="max-width: 150px;" />
        @else
            <img class="bg-img-cover bg-center"
                src="{{ asset('images/logo-white-1.svg') }}"
                data-sticky-logo="{{ asset('images/logo-light-dark.svg') }}"
                alt="Default Logo" />
        @endif
    </div>

    <div class="col-xl-7 p-0">
        <div class="login-card login-dark login-bg">
            <div>
                <div class="text-center mb-4">
                    <a class="logo" href="{{ url('/') }}">
                        <img src="{{ asset('images/logo/logo.png') }}"
                            alt="Logo"
                            class="img-fluid m-auto"
                            style="max-height: 150px;" />
                    </a>
                </div>

                <div class="login-main">
                    <form method="POST" action="{{ route('register') }}" class="theme-form">
                        @csrf

                        <h2>Buat Akun</h2>
                        <p>Gunakan data yang valid</p>

                        <div class="form-group">
                            <label class="col-form-label pt-0">Name</label>
                            <input type="text" name="name" value="{{ old('name') }}"
                                class="form-control" placeholder="Full Name" required autofocus>
                            @error('name')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="col-form-label">Email Address</label>
                            <input type="email" name="email" value="{{ old('email') }}"
                                class="form-control" placeholder="Email" required>
                            @error('email')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="col-form-label">Password</label>
                            <div class="form-input position-relative">
                                <input type="password" name="login[password]"
                                    class="form-control" placeholder="********"
                                    required autocomplete="new-password">
                                <div class="show-hide"><span class="show"></span></div>
                            </div>
                            @error('login.password')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="col-form-label">SMP Negeri Tujuan</label>
                            <select name="sekolah_id" class="form-control" required>
                                <option value="">* Pilih SMP Negeri Tujuan</option>
                                @foreach ($school as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_sekolah }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-0 checkbox-checked">
                            <button class="btn btn-primary btn-block w-100 mt-3" type="submit">
                                Buat Akun
                            </button>
                        </div>

                        <p class="mt-4 mb-0 text-center">
                            Sudah punya akun?
                            <a class="ms-2" href="{{ route('login') }}">Sign in</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
