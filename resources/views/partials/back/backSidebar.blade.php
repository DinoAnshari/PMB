<aside class="page-sidebar">
  <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
  <div class="main-sidebar" id="main-sidebar">
    <ul class="sidebar-menu" id="simple-bar">
      <li class="pin-title sidebar-main-title">
        <div>
          <h5 class="sidebar-title f-w-700">Pinned</h5>
        </div>
      </li>

      <li class="sidebar-main-title">
        <div>
          <h5 class="lan-1 f-w-700 sidebar-title">General</h5>
        </div>
      </li>
      @if(auth()->user() && auth()->user()->hasRole('super admin'))
      <li class="sidebar-list {{ request()->is('dashboard/index_super_admin*') ? 'active' : '' }}">
        <i class="fa-solid fa-thumbtack"></i>
        <a class="sidebar-link" href="{{ url('dashboard/index_super_admin') }}">
          <svg class="stroke-icon">
            <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Home-dashboard') }}"></use>
          </svg>
          <h6>Dashboards</h6>
        </a>
      </li>
      <li class="sidebar-list {{ request()->is('dashboard/sekolah*') ? 'active' : '' }}">
        <i class="fa-solid fa-thumbtack"></i>
        <a class="sidebar-link" href="javascript:void(0)">
          <svg class="stroke-icon">
            <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Document') }}"></use>
          </svg>
          <h6>Master Data</h6>
          <i class="iconly-Arrow-Right-2 icli"></i>
        </a>
        <ul class="sidebar-submenu">
          <li>
          <li><a href="{{ route('sekolah.index') }}">Data Sekolah</a></li>
          <li><a href="{{ route('users.index') }}">Data Petugas</a></li>
          <li><a href="{{ route('faqs.index') }}">Data FAQS</a></li>
          <li><a href="{{ route('sliders.index') }}">Data Sliders</a></li>
          <li><a href="{{ route('timelines.index') }}">Data Timelines</a></li>
          <li><a href="{{ route('videos.index') }}">Data Videos</a></li>
          <li><a href="{{ route('setting.edit') }}">Data Setting</a></li>
      </li>
    </ul>
    </li>
    <li class="sidebar-list {{ request()->is('dashboard/jalur-pendaftaran*') ? 'active' : '' }}">
      <i class="fa-solid fa-thumbtack"></i>
      <a class="sidebar-link" href="{{ url('dashboard/jalur-pendaftaran') }}">
        <svg class="stroke-icon">
          <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Pie') }}"></use>
        </svg>
        <h6 class="f-w-600">Jalur Pendaftaran</h6>
      </a>
    </li>
    <li class="sidebar-list {{ request()->is('dashboard/siswa*') ? 'active' : '' }}">
      <i class="fa-solid fa-thumbtack"></i>
      <a class="sidebar-link" href="{{ url('dashboard/siswa') }}">
        <svg class="stroke-icon">
          <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Profile') }}"></use>
        </svg>
        <h6 class="f-w-600">Reset Password</h6>
      </a>
    </li>
    <li class="sidebar-list {{ request()->is('dashboard/prestasi*') ? 'active' : '' }}">
      <i class="fa-solid fa-thumbtack"></i>
      <a class="sidebar-link" href="{{ url('dashboard/prestasi') }}">
        <svg class="stroke-icon">
          <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Bookmark') }}"></use>
        </svg>
        <h6 class="f-w-600">Jalur Prestasi</h6>
      </a>
    </li>
    <li class="sidebar-list {{ request()->is('dashboard/afirmasi*', 'dashboard/show-afirmasi*') ? 'active' : '' }}">
      <i class="fa-solid fa-thumbtack"></i>
      <a class="sidebar-link" href="{{ url('dashboard/afirmasi') }}">
        <svg class="stroke-icon">
          <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Bookmark') }}"></use>
        </svg>
        <h6 class="f-w-600">Jalur Afirmasi</h6>
      </a>
    </li>
    <li class="sidebar-list {{ request()->is('dashboard/domisili*', 'dashboard/show-domisili*') ? 'active' : '' }}">
      <i class="fa-solid fa-thumbtack"></i>
      <a class="sidebar-link" href="{{ url('dashboard/domisili') }}">
        <svg class="stroke-icon">
          <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Bookmark') }}"></use>
        </svg>
        <h6 class="f-w-600">Jalur Domisili</h6>
      </a>
    </li>
    <li class="sidebar-list {{ request()->is('dashboard/broadcast/*/lulus') ? 'active' : '' }}">
      <i class="fa-solid fa-thumbtack"></i>
      <a class="sidebar-link" href="javascript:void(0)">
        <svg class="stroke-icon">
          <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Document') }}"></use>
        </svg>
        <h6>Broadcast Lulus</h6>
        <i class="iconly-Arrow-Right-2 icli"></i>
      </a>
      <ul class="sidebar-submenu">
        <li><a href="{{ route('broadcast.{jalur}.{status}', ['jalur' => 'prestasi', 'status' => 'lulus']) }}">Broadcast Prestasi</a></li>
        <li><a href="{{ route('broadcast.{jalur}.{status}', ['jalur' => 'afirmasi', 'status' => 'lulus']) }}">Broadcast Afirmasi</a></li>
        <li><a href="{{ route('broadcast.{jalur}.{status}', ['jalur' => 'domisili', 'status' => 'lulus']) }}">Broadcast Domisili</a></li>
      </ul>
    </li>
    <li class="sidebar-list {{ request()->is('dashboard/broadcast/*/tidak lulus') ? 'active' : '' }}">
      <i class="fa-solid fa-thumbtack"></i>
      <a class="sidebar-link" href="javascript:void(0)">
        <svg class="stroke-icon">
          <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Document') }}"></use>
        </svg>
        <h6>Broadcast Tidak Lulus</h6>
        <i class="iconly-Arrow-Right-2 icli"></i>
      </a>
      <ul class="sidebar-submenu">
        <li><a href="{{ route('broadcast.{jalur}.{status}', ['jalur' => 'prestasi', 'status' => 'tidak lulus']) }}">Broadcast Prestasi</a></li>
        <li><a href="{{ route('broadcast.{jalur}.{status}', ['jalur' => 'afirmasi', 'status' => 'tidak lulus']) }}">Broadcast Afirmasi</a></li>
        <li><a href="{{ route('broadcast.{jalur}.{status}', ['jalur' => 'domisili', 'status' => 'tidak lulus']) }}">Broadcast Domisili</a></li>
      </ul>
    </li>
    @endif

    @php
    $sekolah = auth()->user()->sekolah->nama_sekolah ?? '';
    @endphp
    @if(auth()->user() && auth()->user()->hasRole("admin prestasi $sekolah"))
    <li class="sidebar-list {{ request()->is('dashboard/index_admin_prestasi*') ? 'active' : '' }}">
      <i class="fa-solid fa-thumbtack"></i>
      <a class="sidebar-link" href="{{ url('dashboard/index_admin_prestasi') }}">
        <svg class="stroke-icon">
          <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Bookmark') }}"></use>
        </svg>
        <h6>Data Prestasi</h6>
      </a>
    </li>
    <li class="sidebar-list {{ request()->is('dashboard/broadcast/*/lulus') ? 'active' : '' }}">
      <i class="fa-solid fa-thumbtack"></i>
      <a class="sidebar-link" href="javascript:void(0)">
        <svg class="stroke-icon">
          <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Document') }}"></use>
        </svg>
        <h6>Broadcast Lulus</h6>
        <i class="iconly-Arrow-Right-2 icli"></i>
      </a>
      <ul class="sidebar-submenu">
        <li><a href="{{ route('broadcast.{jalur}.{status}', ['jalur' => 'prestasi', 'status' => 'lulus']) }}">Broadcast Prestasi</a></li>
      </ul>
    </li>
    <li class="sidebar-list {{ request()->is('dashboard/broadcast/*/tidak lulus') ? 'active' : '' }}">
      <i class="fa-solid fa-thumbtack"></i>
      <a class="sidebar-link" href="javascript:void(0)">
        <svg class="stroke-icon">
          <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Document') }}"></use>
        </svg>
        <h6>Broadcast Tidak Lulus</h6>
        <i class="iconly-Arrow-Right-2 icli"></i>
      </a>
      <ul class="sidebar-submenu">
        <li><a href="{{ route('broadcast.{jalur}.{status}', ['jalur' => 'prestasi', 'status' => 'tidak lulus']) }}">Broadcast Prestasi</a></li>
      </ul>
    </li>
    <li class="sidebar-list {{ request()->is('dashboard/siswa*') ? 'active' : '' }}">
      <i class="fa-solid fa-thumbtack"></i>
      <a class="sidebar-link" href="{{ url('dashboard/siswa') }}">
        <svg class="stroke-icon">
          <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Profile') }}"></use>
        </svg>
        <h6 class="f-w-600">Reset Password</h6>
      </a>
    </li>
    <li class="sidebar-list {{ request()->is('dashboard/statistik-data*') ? 'active' : '' }}">
      <i class="fa-solid fa-thumbtack"></i>
      <a class="sidebar-link" href="{{ url('dashboard/statistik-data') }}">
        <svg class="stroke-icon">
          <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Chart') }}"></use>
        </svg>
        <h6 class="f-w-600">Statistik Data</h6>
      </a>
    </li>
    @endif

    @if(auth()->user() && auth()->user()->hasRole("admin afirmasi $sekolah"))
    <li class="sidebar-list {{ request()->is('dashboard/index_admin_afirmasi*') ? 'active' : '' }}">
      <i class="fa-solid fa-thumbtack"></i>
      <a class="sidebar-link" href="{{ url('dashboard/index_admin_afirmasi') }}">
        <svg class="stroke-icon">
          <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Bookmark') }}"></use>
        </svg>
        <h6>Data Afirmasi</h6>
      </a>
    </li>
    <li class="sidebar-list {{ request()->is('dashboard/broadcast/*/lulus') ? 'active' : '' }}">
      <i class="fa-solid fa-thumbtack"></i>
      <a class="sidebar-link" href="javascript:void(0)">
        <svg class="stroke-icon">
          <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Document') }}"></use>
        </svg>
        <h6>Broadcast Lulus</h6>
        <i class="iconly-Arrow-Right-2 icli"></i>
      </a>
      <ul class="sidebar-submenu">
        <li><a href="{{ route('broadcast.{jalur}.{status}', ['jalur' => 'afirmasi', 'status' => 'lulus']) }}">Broadcast afirmasi</a></li>
      </ul>
    </li>
    <li class="sidebar-list {{ request()->is('dashboard/broadcast/*/tidak lulus') ? 'active' : '' }}">
      <i class="fa-solid fa-thumbtack"></i>
      <a class="sidebar-link" href="javascript:void(0)">
        <svg class="stroke-icon">
          <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Document') }}"></use>
        </svg>
        <h6>Broadcast Tidak Lulus</h6>
        <i class="iconly-Arrow-Right-2 icli"></i>
      </a>
      <ul class="sidebar-submenu">
        <li><a href="{{ route('broadcast.{jalur}.{status}', ['jalur' => 'afirmasi', 'status' => 'tidak lulus']) }}">Broadcast afirmasi</a></li>
      </ul>
    </li>
    <li class="sidebar-list {{ request()->is('dashboard/siswa*') ? 'active' : '' }}">
      <i class="fa-solid fa-thumbtack"></i>
      <a class="sidebar-link" href="{{ url('dashboard/siswa') }}">
        <svg class="stroke-icon">
          <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Profile') }}"></use>
        </svg>
        <h6 class="f-w-600">Reset Password</h6>
      </a>
    </li>
    <li class="sidebar-list {{ request()->is('dashboard/statistik-data*') ? 'active' : '' }}">
      <i class="fa-solid fa-thumbtack"></i>
      <a class="sidebar-link" href="{{ url('dashboard/statistik-data') }}">
        <svg class="stroke-icon">
          <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Chart') }}"></use>
        </svg>
        <h6 class="f-w-600">Statistik Data</h6>
      </a>
    </li>
    @endif

    @if(auth()->user() && auth()->user()->hasRole("admin domisili $sekolah"))
    <li class="sidebar-list {{ request()->is('dashboard/index_admin_domisili*') ? 'active' : '' }}">
      <i class="fa-solid fa-thumbtack"></i>
      <a class="sidebar-link" href="{{ url('dashboard/index_admin_domisili') }}">
        <svg class="stroke-icon">
          <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Bookmark') }}"></use>
        </svg>
        <h6>Data Domisili</h6>
      </a>
    </li>
    <li class="sidebar-list {{ request()->is('dashboard/broadcast/*/lulus') ? 'active' : '' }}">
      <i class="fa-solid fa-thumbtack"></i>
      <a class="sidebar-link" href="javascript:void(0)">
        <svg class="stroke-icon">
          <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Document') }}"></use>
        </svg>
        <h6>Broadcast Lulus</h6>
        <i class="iconly-Arrow-Right-2 icli"></i>
      </a>
      <ul class="sidebar-submenu">
        <li><a href="{{ route('broadcast.{jalur}.{status}', ['jalur' => 'domisili', 'status' => 'lulus']) }}">Broadcast domisili</a></li>
      </ul>
    </li>
    <li class="sidebar-list {{ request()->is('dashboard/broadcast/*/tidak lulus') ? 'active' : '' }}">
      <i class="fa-solid fa-thumbtack"></i>
      <a class="sidebar-link" href="javascript:void(0)">
        <svg class="stroke-icon">
          <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Document') }}"></use>
        </svg>
        <h6>Broadcast Tidak Lulus</h6>
        <i class="iconly-Arrow-Right-2 icli"></i>
      </a>
      <ul class="sidebar-submenu">
        <li><a href="{{ route('broadcast.{jalur}.{status}', ['jalur' => 'domisili', 'status' => 'tidak lulus']) }}">Broadcast domisili</a></li>
      </ul>
    </li>
    <li class="sidebar-list {{ request()->is('dashboard/siswa*') ? 'active' : '' }}">
      <i class="fa-solid fa-thumbtack"></i>
      <a class="sidebar-link" href="{{ url('dashboard/siswa') }}">
        <svg class="stroke-icon">
          <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Profile') }}"></use>
        </svg>
        <h6 class="f-w-600">Reset Password</h6>
      </a>
    </li>
    <li class="sidebar-list {{ request()->is('dashboard/statistik-data*') ? 'active' : '' }}">
      <i class="fa-solid fa-thumbtack"></i>
      <a class="sidebar-link" href="{{ url('dashboard/statistik-data') }}">
        <svg class="stroke-icon">
          <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Chart') }}"></use>
        </svg>
        <h6 class="f-w-600">Statistik Data</h6>
      </a>
    </li>
    @endif

    @if(auth()->user() && auth()->user()->hasRole("pemeriksa prestasi $sekolah"))
    <li class="sidebar-list {{ request()->is('dashboard/index_pemeriksa_prestasi*') || request()->is('dashboard/prestasi*') ? 'active' : '' }}">
      <i class="fa-solid fa-thumbtack"></i>
      <a class="sidebar-link" href="{{ url('dashboard/index_pemeriksa_prestasi') }}">
        <svg class="stroke-icon">
          <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Bookmark') }}"></use>
        </svg>
        <h6>Data Prestasi</h6>
      </a>
    </li>
    @endif
    @if(auth()->user() && auth()->user()->hasRole("pemeriksa afirmasi $sekolah"))
    <li class="sidebar-list {{ request()->is('dashboard/index_pemeriksa_afirmasi*') || request()->is('dashboard/afirmasi*') ? 'active' : '' }}">
      <i class="fa-solid fa-thumbtack"></i>
      <a class="sidebar-link" href="{{ route('dashboard.index_pemeriksa_afirmasi') }}">
        <svg class="stroke-icon">
          <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Bookmark') }}"></use>
        </svg>
        <h6>Data Afirmasi</h6>
      </a>
    </li>

    @endif
    @if(auth()->user() && auth()->user()->hasRole("pemeriksa domisili $sekolah"))
    <li class="sidebar-list {{ request()->is('dashboard/index_pemeriksa_domisili*') || request()->is('dashboard/domisili*') ? 'active' : '' }}">
      <i class="fa-solid fa-thumbtack"></i>
      <a class="sidebar-link" href="{{ url('dashboard/index_pemeriksa_domisili') }}">
        <svg class="stroke-icon">
          <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Bookmark') }}"></use>
        </svg>
        <h6>Data Domisili</h6>
      </a>
    </li>
    @endif
    @if(auth()->user() && auth()->user()->hasRole('siswa'))
    <li class="sidebar-list {{ request()->is('dashboard/index_siswa*') ? 'active' : '' }}">
      <i class="fa-solid fa-thumbtack"></i>
      <a class="sidebar-link" href="{{ url('dashboard/index_siswa') }}">
        <svg class="stroke-icon">
          <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Home-dashboard') }}"></use>
        </svg>
        <h6>Dashboards</h6>
      </a>
    </li>
    <li class="sidebar-list {{ request()->is('dashboard/biodata*') ? 'active' : '' }}">
      <i class="fa-solid fa-thumbtack"></i>
      <a class="sidebar-link" href="{{ url('dashboard/biodata') }}">
        <svg class="stroke-icon">
          <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Profile') }}"></use>
        </svg>
        <h6>Biodata</h6>
      </a>
    </li>
    @foreach($jalurList as $jalur)
    <li class="sidebar-list {{ request()->is('dashboard/' . $jalur->nama . '*') ? 'active' : '' }}">
      <i class="fa-solid fa-thumbtack"></i>
      <a class="sidebar-link" href="#" onclick="checkJalur(event, '{{ url('dashboard/' . $jalur->nama) }}', '{{ strtolower($jalur->nama) }}')">
        <svg class="stroke-icon">
          <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Activity') }}"></use>
        </svg>
        <h6>Jalur {{ ucfirst($jalur->nama) }}</h6>
      </a>
    </li>
    @endforeach
    @endif
    </ul>
  </div>
  <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
</aside>
<script>
  function checkJalur(event, url, jalur) {
    event.preventDefault();

    fetch("/check-biodata")
      .then(response => response.json())
      .then(data => {
        if (!data.hasBiodata) {
          showToast("Silakan lengkapi biodata terlebih dahulu!", "danger");
          return;
        }

        const jalurMap = {
          'prestasi': data.hasPrestasi,
          'afirmasi': data.hasAfirmasi,
          'domisili': data.hasDomisili
        };

        if (data.hasAnyJalur) {
          if (jalurMap[jalur]) {
            window.location.href = url;
          } else {
            showToast("Hanya boleh mendaftar di 1 jalur!", "warning");
          }
          return;
        }

        window.location.href = url;
      })
      .catch(error => {
        console.error('Error checking jalur:', error);
      });
  }

  function showToast(message, type = 'danger') {
    const toastEl = document.getElementById("liveToast");
    const toastBody = document.getElementById("toastMessage");

    toastBody.innerHTML = message;
    toastEl.className = `toast align-items-center text-white bg-${type} border-0 show`;

    const toast = new bootstrap.Toast(toastEl);
    toast.show();
  }
</script>
