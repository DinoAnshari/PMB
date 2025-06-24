@extends('layouts.back')

@section('title', 'Dashboard PPDB SMPN Maju Jaya')

@section('content')

<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6 col-12">
                <h2>Selamat Datang Siswa PPDB</h2>
            </div>
            <div class="col-sm-6 col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="iconly-Home icli svg-color"></i></a></li>
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
                            <li class="timeline-event">
                                <label class="timeline-event-icon"></label>
                                <div class="timeline-event-wrapper">
                                    <p class="timeline-thumbnail">1 Juli 2025</p>
                                    <h5>Pendaftaran Dibuka</h5>
                                    <p class="pt-3 mb-4">Calon peserta didik dapat mulai mendaftar secara online.</p>
                                </div>
                            </li>
                            <li class="timeline-event">
                                <label class="timeline-event-icon"></label>
                                <div class="timeline-event-wrapper">
                                    <p class="timeline-thumbnail">10 Juli 2025</p>
                                    <h5>Seleksi Berkas</h5>
                                    <p class="pt-3 mb-4">Panitia akan memverifikasi dokumen yang diunggah.</p>
                                </div>
                            </li>
                            <li class="timeline-event">
                                <label class="timeline-event-icon"></label>
                                <div class="timeline-event-wrapper">
                                    <p class="timeline-thumbnail">15 Juli 2025</p>
                                    <h5>Pengumuman Hasil</h5>
                                    <p class="pt-3 mb-4">Hasil seleksi diumumkan di halaman resmi PPDB.</p>
                                </div>
                            </li>
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
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading1">
                                    <button class="accordion-button collapsed accordion-light-primary text-primary active" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        Bagaimana cara mendaftar? <i class="iconly-Arrow-Down-2 icli ms-auto icon"></i>
                                    </button>
                                </h2>
                                <div class="accordion-collapse collapse show" id="collapse1" aria-labelledby="heading1" data-bs-parent="#simpleaccordion">
                                    <div class="accordion-body">
                                        <p>Silakan klik menu "Daftar Sekarang" dan isi seluruh formulir yang tersedia dengan data yang valid.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading2">
                                    <button class="accordion-button collapsed accordion-light-primary text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        Apakah pendaftaran gratis? <i class="iconly-Arrow-Down-2 icli ms-auto icon"></i>
                                    </button>
                                </h2>
                                <div class="accordion-collapse collapse" id="collapse2" aria-labelledby="heading2" data-bs-parent="#simpleaccordion">
                                    <div class="accordion-body">
                                        <p>Ya, seluruh proses pendaftaran PPDB ini tidak dipungut biaya apapun.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading3">
                                    <button class="accordion-button collapsed accordion-light-primary text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        Dokumen apa saja yang harus disiapkan? <i class="iconly-Arrow-Down-2 icli ms-auto icon"></i>
                                    </button>
                                </h2>
                                <div class="accordion-collapse collapse" id="collapse3" aria-labelledby="heading3" data-bs-parent="#simpleaccordion">
                                    <div class="accordion-body">
                                        <p>SKL/Ijazah, Kartu Keluarga, dan dokumen pendukung lain sesuai jalur yang dipilih.</p>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
