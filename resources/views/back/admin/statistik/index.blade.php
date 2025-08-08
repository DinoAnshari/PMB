@extends('layouts.back')

@section('title', 'Dashboard PMB')

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
        <div class="col-12">
            <div class="card earning-card">
                <div class="card-header pb-0 card-no-border">
                    <div class="header-top">
                        <h3>Statistik Pendaftaran Siswa di {{ auth()->user()->sekolah->nama_sekolah }} </h3>
                    </div>
                </div>
                <div class="card-body pb-0">
                    <div id="admin-chart"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid general-widget">
    <div class="row">
        <div class="col-sm-6 col-lg-4 box-col-12">
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
                            <h4>{{ $totalAchievementTracks }}</h4>
                            <span class="f-light">Jalur Prestasi</span>
                        </div>
                    </div>
                    <div class="font-danger f-w-500">
                        <i class="icon-arrow-up icon-rotate me-1"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4 box-col-12">
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
                            <h4>{{ $totalAffirmationTracks }}</h4>
                            <span class="f-light">Jalur Afirmasi</span>
                        </div>
                    </div>
                    <div class="font-primary f-w-500">
                        <i class="icon-arrow-up icon-rotate me-1"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4 box-col-12">
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
                            <h4>{{ $totalDomicileTracks }}</h4>
                            <span class="f-light">Jalur Domisili</span>
                        </div>
                    </div>
                    <div class="font-success f-w-500">
                        <i class="icon-arrow-up icon-rotate me-1"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection