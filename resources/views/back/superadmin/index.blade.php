@extends('layouts.back')

@section('title', 'Dashboard PPDB SMPN Maju Jaya')

@section('content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6 col-12">
                <h2>Dashboard</h2>
                <p class="mb-0 text-title-gray">PPDB SMPN Maju Jaya.</p>
            </div>
            <div class="col-sm-6 col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="iconly-Home icli svg-color"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid default-dashboard">
    <div class="row">
        <div class="col-xl-4 proorder-xxl-1 col-sm-6 box-col-6">
            <div class="card welcome-banner">
                <div class="card-header p-0 card-no-border">
                    <div class="welcome-card">
                        <img class="w-100 img-fluid" src="{{ asset('back/assets/images/dashboard-1/welcome-bg.png') }}" alt="" />
                        <img class="position-absolute img-1 img-fluid" src="{{ asset('back/assets/images/dashboard-1/img-1.png') }}" alt="" />
                        <img class="position-absolute img-2 img-fluid" src="{{ asset('back/assets/images/dashboard-1/img-2.png') }}" alt="" />
                        <img class="position-absolute img-3 img-fluid" src="{{ asset('back/assets/images/dashboard-1/img-3.png') }}" alt="" />
                        <img class="position-absolute img-4 img-fluid" src="{{ asset('back/assets/images/dashboard-1/img-4.png') }}" alt="" />
                        <img class="position-absolute img-5 img-fluid" src="{{ asset('back/assets/images/dashboard-1/img-5.png') }}" alt="" />
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex align-center">
                        <h1>Hello, Nama Pengguna <img src="{{ asset('back/assets/images/dashboard-1/hand.png') }}" alt="" /></h1>
                    </div>
                    <p>Apa kabarmu hari ini?</p>
                    <div class="d-flex align-center justify-content-between">
                        <a class="btn btn-pill btn-primary" href="#">Jalur Pendaftaran</a>
                        <span>
                            <svg class="stroke-icon">
                                <use href="{{ asset('back/assets/svg/icon-sprite.svg#watch') }}"></use>
                            </svg> 08:30 WIB
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-3 col-xl-4 proorder-xxl-2 col-sm-6 box-col-6">
            <div class="card earning-card">
                <div class="card-header pb-0 card-no-border">
                    <div class="header-top">
                        <h3>Grafik Jalur</h3>
                    </div>
                </div>
                <div class="card-body pb-0">
                    <div id="column-chart"></div>
                </div>
            </div>
        </div>

        <div class="col-xxl-5 col-xl-6 proorder-xxl-7 col-lg-12 box-col-12">
            <div class="card job-card">
                <div class="card-header pb-0 card-no-border">
                    <div class="header-top">
                        <h3>Pendaftar Terbaru</h3>
                        <div>
                            <p>17 Juni 2025</p>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-2">
                    <div class="table-responsive theme-scrollbar">
                        <table class="table display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Jalur</th>
                                    <th>Nama</th>
                                    <th>Sekolah Tujuan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span class="badge bg-primary">Jalur Prestasi</span></td>
                                    <td>Andi Saputra</td>
                                    <td>SMP Negeri 1</td>
                                </tr>
                                <tr>
                                    <td><span class="badge bg-success">Jalur Afirmasi</span></td>
                                    <td>Siti Rahma</td>
                                    <td>SMP Negeri 2</td>
                                </tr>
                                <tr>
                                    <td><span class="badge bg-danger">Jalur Domisili</span></td>
                                    <td>Lina Marlina</td>
                                    <td>SMP Negeri 4</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid general-widget">
    <div class="row">
        <div class="col-md-4 box-col-4">
            <div class="card widget-1">
                <div class="card-body">
                    <div class="widget-content">
                        <div class="widget-round danger">
                            <div class="bg-round">
                                <svg class="svg-fill">
                                    <use href="{{ asset('back/assets/svg/icon-sprite.svg#star') }}"></use>
                                </svg>
                                <svg class="half-circle svg-fill">
                                    <use href="{{ asset('back/assets/svg/icon-sprite.svg#halfcircle') }}"></use>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h4>120</h4>
                            <span class="f-light">Jalur Prestasi</span>
                        </div>
                    </div>
                    <div class="font-danger f-w-500"><i class="icon-arrow-up icon-rotate me-1"></i></div>
                </div>
            </div>
        </div>

        <div class="col-md-4 box-col-4">
            <div class="card widget-1">
                <div class="card-body">
                    <div class="widget-content">
                        <div class="widget-round primary">
                            <div class="bg-round">
                                <svg class="svg-fill">
                                    <use href="{{ asset('back/assets/svg/icon-sprite.svg#tag') }}"></use>
                                </svg>
                                <svg class="half-circle svg-fill">
                                    <use href="{{ asset('back/assets/svg/icon-sprite.svg#halfcircle') }}"></use>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h4>85</h4>
                            <span class="f-light">Jalur Afirmasi</span>
                        </div>
                    </div>
                    <div class="font-primary f-w-500"><i class="icon-arrow-up icon-rotate me-1"></i></div>
                </div>
            </div>
        </div>

        <div class="col-md-4 box-col-4">
            <div class="card widget-1">
                <div class="card-body">
                    <div class="widget-content">
                        <div class="widget-round success">
                            <div class="bg-round">
                                <svg class="svg-fill">
                                    <use href="{{ asset('back/assets/svg/icon-sprite.svg#rate') }}"></use>
                                </svg>
                                <svg class="half-circle svg-fill">
                                    <use href="{{ asset('back/assets/svg/icon-sprite.svg#halfcircle') }}"></use>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h4>97</h4>
                            <span class="f-light">Jalur Domisili</span>
                        </div>
                    </div>
                    <div class="font-success f-w-500"><i class="icon-arrow-up icon-rotate me-1"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
