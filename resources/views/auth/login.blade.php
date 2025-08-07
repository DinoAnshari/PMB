@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<div class="col-xl-7 login_one_image">
  @if ($setting?->gambar_login)
  <img class="bg-img-cover bg-center" src="{{ asset('storage/' . $setting->gambar_login) }}" alt="Logo Header" style="max-width: 150px;" />
  @else
  <img class="bg-img-cover bg-center" src="{{ asset('images/logo-white-1.svg') }}" data-sticky-logo="{{ asset('images/logo-light-dark.svg') }}" alt="Default Logo" />
  @endif
</div>


<div class="col-xl-5 p-0">
  <div class="login-card login-dark login-bg">
    <div>
      <div class="text-center mb-4">
        <a class="logo" href="{{ url('/') }}">
          <img
            src="{{ asset('images/logo/logo.png') }}"
            alt="Logo"
            class="img-fluid m-auto"
            style="max-height: 150px;" />
        </a>
      </div>

      <div class="login-main">
        <!-- Session Status -->
        @if (session('status'))
        <div class="alert alert-success text-center mb-3">
          {{ session('status') }}
        </div>
        @endif

        <form class="theme-form" method="POST" action="{{ route('login') }}">
          @csrf

          <h2 class="text-center">Login ke Dashboard</h2>

          <div class="form-group">
            <label for="email" class="col-form-label">Email</label>
            <input id="email" type="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus autocomplete="username">
            @error('email')
            <div class="text-danger small mt-1">{{ $message }}</div>
            @enderror
          </div>

          <div class="form-group">
            <label class="col-form-label">Password</label>
            <div class="form-input position-relative">
              <input class="form-control" type="password" name="login[password]" required="" placeholder="*********">
              <div class="show-hide"><span class="show"> </span></div>
            </div>
            @error('password')
            <div class="text-danger small mt-1">{{ $message }}</div>
            @enderror
          </div>

          <div class="form-group d-flex justify-content-between align-items-center">
            <div class="form-check checkbox-solid-info">
              <input class="form-check-input" id="remember_me" type="checkbox" name="remember">
              <label class="form-check-label" for="remember_me">Remember me</label>
            </div>
          </div>

          <div class="text-end mt-3">
            <button class="btn btn-primary btn-block w-100" type="submit">Log in</button>
          </div>

          <p class="mt-4 mb-0 text-center">
            Tidak punya akun?
            <a class="ms-2" href="{{ route('register') }}">Register</a>
          </p>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection