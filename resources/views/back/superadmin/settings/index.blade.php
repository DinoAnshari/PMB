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

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <form action="{{ route('setting.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="card">
                        <div class="card-body">

                            <div class="mb-3">
                                <label for="judul_footer" class="form-label">Judul Footer</label>
                                <input type="text" class="form-control" name="judul_footer" 
                                    value="{{ old('judul_footer', $setting->judul_footer ?? '') }}">
                            </div>

                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea class="form-control" name="alamat" rows="2">{{ old('alamat', $setting->alamat ?? '') }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" 
                                    value="{{ old('email', $setting->email ?? '') }}">
                            </div>

                            <div class="mb-3">
                                <label for="hp" class="form-label">No. Telepon</label>
                                <input type="text" class="form-control" name="hp" 
                                    value="{{ old('hp', $setting->hp ?? '') }}">
                            </div>

                            <div class="mb-3">
                                <label for="copyright" class="form-label">Copyright</label>
                                <input type="text" class="form-control" name="copyright" 
                                    value="{{ old('copyright', $setting->copyright ?? '') }}">
                            </div>

                            <div class="mb-3">
                                <label for="gambar_footer" class="form-label">Gambar Logo/Footer</label>
                                <input type="file" class="form-control" name="gambar_footer">
                                @if (!empty($setting->gambar_footer))
                                    <img src="{{ asset('storage/' . $setting->gambar_footer) }}" class="mt-2" alt="Footer Image" width="150">
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="gambar_header" class="form-label">Gambar Header</label>
                                <input type="file" class="form-control" name="gambar_header">
                                @if (!empty($setting->gambar_header))
                                    <img src="{{ asset('storage/' . $setting->gambar_header) }}" class="mt-2" alt="Header Image" width="150">
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="gambar_login" class="form-label">Gambar Login (uk. 1090x930 piksel)</label>
                                <input type="file" class="form-control" name="gambar_login">
                                @if (!empty($setting->gambar_login))
                                    <img src="{{ asset('storage/' . $setting->gambar_login) }}" class="mt-2" alt="Login Image" width="150">
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="gambar_register" class="form-label">Gambar Register (uk. 770x927 piksel)</label>
                                <input type="file" class="form-control" name="gambar_register">
                                @if (!empty($setting->gambar_register))
                                    <img src="{{ asset('storage/' . $setting->gambar_register) }}" class="mt-2" alt="Register Image" width="150">
                                @endif
                            </div>

                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary" type="submit">Update Settings</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
