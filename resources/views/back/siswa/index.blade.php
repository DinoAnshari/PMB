@extends('layouts.back')

@section('title', 'Dashboard PPDB SMPN Maju Jaya')

@section('content')

<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6 col-12">
                <h2>Selamat Datang {{ auth()->user()->name }}</h2>
            </div>
            <div class="col-sm-6 col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('dashboard/index_siswa') }}"><i class="iconly-Home icli svg-color"></i></a></li>
                    <li class="breadcrumb-item">Dashboard </li>
                    <li class="breadcrumb-item active">Index</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header card-no-border pb-0">
                    <h3>Alur Pendaftaran</h3>
                    <p class="mt-1 mb-0">Berikut adalah alur pendaftaran Siswa/i SMP N Maju Jaya</p>
                </div>
                <div class="card-body">
                    <ul class="square-timeline">
                        <ul class="timeline">
                            @forelse($timelines as $timeline)
                            <li class="timeline-event">
                                <label class="timeline-event-icon"></label>
                                <div class="timeline-event-wrapper">
                                    <p class="timeline-thumbnail">{{ $timeline->tanggal}}</p>
                                    <h5>{{ $timeline->judul }}</h5>
                                    <p class="pt-3 mb-4">{{ $timeline->deskripsi }}</p>
                                </div>
                            </li>
                            @empty
                            <li class="timeline-event">
                                <div class="timeline-event-wrapper">
                                    <p class="text-center">Tidak ada timeline tersedia.</p>
                                </div>
                            </li>
                            @endforelse
                        </ul>

                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-xl-6">
            <div class="card">
                <div class="card-header card-no-border pb-0">
                    <h3>Pertanyaan yang sering diajukan</h3>
                    <p class="mt-1 mb-0 mb-0">Berikut adalah beberapa pertanyaan dan jawaban yang sering ditanyakan oleh pengguna</p>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="fa-solid fa-ellipsis"></i></li>
                            <li><i class="fa-solid fa-code view-html"></i></li>
                            <li><i class="fa-solid fa-maximize full-card"></i></li>
                            <li><i class="fa-solid fa-minus minimize-card"></i></li>
                            <li><i class="fa-solid fa-rotate-right reload-card"></i></li>
                            <li><i class="fa-solid fa-xmark close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="accordion dark-accordion" id="simpleaccordion">
                        <div class="accordion" id="simpleaccordion">
                            @if($faqs->isEmpty())
                            <p>Tidak ada pertanyaan yang tersedia saat ini.</p>
                            @else
                            @foreach($faqs as $index => $faq)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading{{ $faq->id }}">
                                    <button class="accordion-button collapsed accordion-light-primary text-primary @if($index == 0) active @endif" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $faq->id }}" aria-expanded="{{ $index == 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $faq->id }}">
                                        {{ $faq->pertanyaan }} <i class="iconly-Arrow-Down-2 icli ms-auto icon"></i>
                                    </button>
                                </h2>
                                <div class="accordion-collapse collapse @if($index == 0) show @endif" id="collapse{{ $faq->id }}" aria-labelledby="heading{{ $faq->id }}" data-bs-parent="#simpleaccordion">
                                    <div class="accordion-body">
                                        <p>{{ $faq->jawaban }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection