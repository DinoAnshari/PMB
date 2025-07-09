<section id="daftar" class="app-download-section wave-two-download-section">
    <div class="wave-bg-section-tb-two"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                    <h2>Daftar Segera</h2>
                    <p>Segera lakukan pendaftaran melalui tautan dibawah ini.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="app-download-content wow animate__animated animate__fadeInUp" data-wow-delay=".6s">
                    @guest
                    <a href="{{ route('login') }}" class="download-btn">
                        <i class="icofont-user"></i>
                        <span>
                            akses
                            <span class="large-text">Login</span>
                        </span>
                    </a>
                    <a href="{{ route('register') }}" class="download-btn">
                        <i class="icofont-pencil-alt-2"></i>
                        <span>
                            daftar
                            <span class="large-text">Register</span>
                        </span>
                    </a>
                    @endguest

                    @auth
                    @php
                    $user = auth()->user();
                    $sekolah = $user->sekolah->nama_sekolah ?? '';
                    $dashboardRoute = '#';

                    if ($user->hasRole(['super admin'])) {
                    $dashboardRoute = route('dashboard.index_super_admin');
                    } elseif ($user->hasRole("pemeriksa domisili $sekolah")) {
                    $dashboardRoute = route('dashboard.index_pemeriksa_domisili');
                    } elseif ($user->hasRole("pemeriksa prestasi $sekolah")) {
                    $dashboardRoute = route('dashboard.index_pemeriksa_prestasi');
                    } elseif ($user->hasRole("pemeriksa afirmasi $sekolah")) {
                    $dashboardRoute = route('dashboard.index_pemeriksa_afirmasi');
                    } elseif ($user->hasRole("admin domisili $sekolah")) {
                    $dashboardRoute = route('dashboard.index_admin_domisili');
                    } elseif ($user->hasRole("admin prestasi $sekolah")) {
                    $dashboardRoute = route('dashboard.index_admin_prestasi');
                    } elseif ($user->hasRole("admin afirmasi $sekolah")) {
                    $dashboardRoute = route('dashboard.index_admin_afirmasi');
                    } elseif ($user->hasRole('siswa')) {
                    $dashboardRoute = route('dashboard.index_siswa');
                    }
                    @endphp
                    <a href="{{ $dashboardRoute }}" class="download-btn">
                        <i class="icofont-dashboard-web"></i>
                        <span>
                            akses
                            <span class="large-text">Dashboard</span>
                        </span>
                    </a>
                    @endauth
                </div>

            </div>
        </div>


    </div>
</section>