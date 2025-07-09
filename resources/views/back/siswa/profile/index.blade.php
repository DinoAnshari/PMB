@extends('layouts.back')

@section('title', 'Update Profile - PPDB SMPN Maju Jaya')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <h2>Data Profile</h2>
                </div>
                <div class="col-sm-6 col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('dashboard/index_siswa') }}"><i class="iconly-Home icli svg-color"></i></a></li>
                        <li class="breadcrumb-item">Update Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="edit-profile">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header card-no-border pb-0">
                            <h3 class="card-title mb-0">My Profile</h3>
                            <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('edit-profile.update', $user->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row mb-2">
                                    <div class="profile-title">
                                        <div class="d-flex gap-3"> <img class="img-70 rounded-circle" alt="" src="{{ $user->biodata && $user->biodata->pas_foto ? asset('storage/' . $user->biodata->pas_foto) : asset('assets/images/user/default.png') }}" />
                                            <div class="flex-grow-1">
                                                <h3 class="mb-1">{{$user->name}}</h3>
                                                <p>{{$user->sekolah->nama_sekolah}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email-Address</label>
                                    <input class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nama</label>
                                    <input class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input class="form-control" type="password" name="password" placeholder="Enter New Password" />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Konfirmasi Password</label>
                                    <input class="form-control" type="password" name="password" placeholder="Enter New Password" />
                                </div>
                                <div class="form-footer">
                                    <button class="btn btn-primary btn-block">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <form class="card">
                        <div class="card-header card-no-border pb-0">
                            <h3 class="card-title mb-0">Biodata</h3>
                            <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="mb-3">
                                        <label class="form-label">Jenis Kelamin</label>
                                        <input class="form-control" type="text" value="{{ old('jenis_kelamin', optional($user->biodata)->jenis_kelamin ?: '-') }}" placeholder="Company" disabled />
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Tempat Lahir</label>
                                        <input class="form-control" type="text" value="{{ old('tempat_lahir', optional($user->biodata)->tempat_lahir ?: '-') }}" placeholder="Username" disabled />
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Tanggal Lahir</label>
                                        <input class="form-control" value="{{ old('tanggal_lahir', optional($user->biodata)->tanggal_lahir ?: '-') }}" placeholder="Username" disabled />
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Kecamatan</label>
                                        <input class="form-control" type="text" value="{{ old('kecamatan', optional($user->biodata)->kecamatan ?: '-') }}" placeholder="Username" disabled />
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Kelurahan</label>
                                        <input class="form-control" type="text" value="{{ old('kelurahan', optional($user->biodata)->kelurahan ?: '-') }}" placeholder="Username" disabled />
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Asal Sekolah</label>
                                        <input class="form-control" type="text" value="{{ old('asal_sekolah', optional($user->biodata)->asal_sekolah ?: '-') }}" placeholder="Username" disabled />
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">NISN</label>
                                        <input class="form-control" type="number" value="{{ old('nisn', optional($user->biodata)->nisn ?: '-') }}" placeholder="NISN" disabled />
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="mb-3">
                                        <label class="form-label">Tinggal Dengan</label>
                                        <input class="form-control" value="{{ old('tinggal_dengan', optional($user->biodata)->tinggal_dengan ?: '-') }}" placeholder="Username" disabled />
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div>
                                        <label class="form-label">Alamat</label>
                                        <textarea class="form-control" rows="4" disabled>{{ old('alamat', optional($user->biodata)->alamat ?: '-') }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <a href="{{ route('biodata.index') }}" class="btn btn-primary">Update Biodata</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
