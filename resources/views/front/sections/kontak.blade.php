<section id="kontak" class="contact-section gray-bg cs-pt-130">
    <div class="wave-bg-section-top-one"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                    <h2>Hubungi kami</h2>
                    <p>Berikut daftar kontak resmi Panitia PPDB SMP N Maju Jaya.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-lg-4">
                <div class="single-contact-info wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                    <i class="icofont-location-pin"></i>
                    <h3>Alamat Kantor:</h3>
                    <p>{{ $setting->alamat ?? 'Alamat belum tersedia' }}</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="single-contact-info wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                    <i class="icofont-envelope"></i>
                    <h3>Email Resmi:</h3>
                    <p>
                        @if($setting?->email)
                        <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
                        @else
                        <span>Email belum tersedia</span>
                        @endif
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="single-contact-info wow animate__animated animate__fadeInUp" data-wow-delay=".6s">
                    <i class="icofont-phone"></i>
                    <h3>Nomor Telepon:</h3>
                    <p>{{ $setting->hp ?? 'Belum tersedia' }}</p>
                </div>
            </div>
        </div>
    </div>
</section>