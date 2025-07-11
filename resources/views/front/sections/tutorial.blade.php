<section id="tutorial" class="how-it-works wave-two-how-it-works gray-bg">
    <div class="wave-bg-section-tb-two"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                    <h2>Tutorial PPDB Online</h2>
                    <p>Langkah step by step pendaftaraan PPDB SMPN Maju Jaya.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="hiw-feature-content">
                    <div class="single-hiw-feature wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                        <i class="icofont-login"></i>
                        <h4>{{ $latestVideo->title ?? 'Belum Ada Video' }}</h4>
                        <p>{{ $latestVideo->deskripsi ?? '' }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="video-demo-content wow animate__animated animate__fadeInUp" data-wow-delay=".9s">
                    <img src="{{ asset('storage/videos/' . ($latestVideo->image ?? 'default.jpg')) }}" alt="Video Demo Image" class="img-circle">
                    <div class="play-video-icon">
                        <a class="popup-youtube" href="{{ $latestVideo->video_url ?? '#' }}">
                            <i class="icofont-play"></i>
                            <div class="sonar-wrapper">
                                <div class="sonar-emitter">
                                    <div class="sonar-wave"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>