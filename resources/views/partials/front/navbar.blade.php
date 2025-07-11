<nav class="navbar fixed-top navbar-expand-md navbar-light top-menu">
    <div class="container">
        <div class="footer-logo mb-2">
            <a href="{{ url('/') }}">
                @if ($setting?->gambar_footer)
                <img src="{{ asset('storage/' . $setting->gambar_footer) }}" alt="Logo Footer" style="height: 50px;">
                @else
                <img src="{{ asset('images/logo-black.svg') }}" alt="Default Logo" style="height: 50px;">
                @endif
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                @foreach (['home', 'tutorial', 'faqs', 'daftar', 'kontak'] as $section)
                @php
                $sectionId = str_replace(' ', '-', $section); 
                @endphp
                <li class="nav-item">
                    <a href="#{{ $sectionId }}" class="nav-link">{{ ucfirst($section) }}</a>
                </li>
                @endforeach
                @guest
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('register') }}" class="nav-link">Register</a>
                </li>
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

                <li class="nav-item">
                    <a href="{{ $dashboardRoute }}" class="nav-link">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>