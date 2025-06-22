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

      <li class="sidebar-list">
        <i class="fa-solid fa-thumbtack"></i>
        <a class="sidebar-link" href="{{ url('dashboard/index_super_admin') }}">
          <svg class="stroke-icon">
            <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Home-dashboard') }}"></use>
          </svg>
          <h6>Dashboards</h6>
        </a>
      </li>

      <li class="sidebar-list">
        <i class="fa-solid fa-thumbtack"></i>
        <a class="sidebar-link" href="javascript:void(0)">
          <svg class="stroke-icon">
            <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Document') }}"></use>
          </svg>
          <h6>Master Data</h6>
          <i class="iconly-Arrow-Right-2 icli"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="#">Data Sekolah</a></li>
          <li><a href="#">Data Petugas</a></li>
          <li><a href="#">Data FAQS</a></li>
          <li><a href="#">Data Timelines</a></li>
          <li><a href="#">Data Sliders</a></li>
          <li><a href="#">Data Video</a></li>
          <li><a href="#">Settings</a></li>
        </ul>
      </li>

      <li class="sidebar-list">
        <i class="fa-solid fa-thumbtack"></i>
        <a class="sidebar-link" href="{{ url('dashboard/jalur-pendaftaran') }}">
          <svg class="stroke-icon">
            <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Pie') }}"></use>
          </svg>
          <h6 class="f-w-600">Jalur Pendaftaran</h6>
        </a>
      </li>

      <li class="sidebar-list">
        <i class="fa-solid fa-thumbtack"></i>
        <a class="sidebar-link" href="{{ url('dashboard/daftarsekolah') }}">
          <svg class="stroke-icon">
            <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Wallet') }}"></use>
          </svg>
          <h6 class="f-w-600">Daftar SMPN</h6>
        </a>
      </li>

      <li class="sidebar-list">
        <i class="fa-solid fa-thumbtack"></i>
        <a class="sidebar-link" href="{{ url('dashboard/siswa') }}">
          <svg class="stroke-icon">
            <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Profile') }}"></use>
          </svg>
          <h6 class="f-w-600">Reset Password</h6>
        </a>
      </li>

      <li class="sidebar-main-title">
        <div>
          <h5 class="f-w-700 sidebar-title">Data Pendaftar</h5>
        </div>
      </li>

      @foreach (['prestasi', 'afirmasi', 'pindah', 'domisili'] as $jalur)
      <li class="sidebar-list">
        <i class="fa-solid fa-thumbtack"></i>
        <a class="sidebar-link" href="{{ url('dashboard/jalur-' . $jalur) }}">
          <svg class="stroke-icon">
            <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Bookmark') }}"></use>
          </svg>
          <h6 class="f-w-600">Jalur {{ ucfirst($jalur) }}</h6>
        </a>
      </li>
      @endforeach

      <li class="sidebar-main-title">
        <div>
          <h5 class="f-w-700 sidebar-title">Broadcast</h5>
        </div>
      </li>

      <li class="sidebar-list">
        <i class="fa-solid fa-thumbtack"></i>
        <a class="sidebar-link" href="javascript:void(0)">
          <svg class="stroke-icon">
            <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Document') }}"></use>
          </svg>
          <h6>Tidak Lulus</h6>
          <i class="iconly-Arrow-Right-2 icli"></i>
        </a>
        <ul class="sidebar-submenu">
          @foreach (['Prestasi', 'Afirmasi', 'Domisili', 'Pindah'] as $tipe)
          <li><a href="#">{{ $tipe }}</a></li>
          @endforeach
        </ul>
      </li>

      <li class="sidebar-list">
        <i class="fa-solid fa-thumbtack"></i>
        <a class="sidebar-link" href="{{ url('dashboard/index_siswa') }}">
          <svg class="stroke-icon">
            <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Home-dashboard') }}"></use>
          </svg>
          <h6>Dashboards</h6>
        </a>
      </li>

      <li class="sidebar-list">
        <i class="fa-solid fa-thumbtack"></i>
        <a class="sidebar-link" href="{{ url('dashboard/biodata') }}">
          <svg class="stroke-icon">
            <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Profile') }}"></use>
          </svg>
          <h6>Biodata</h6>
        </a>
      </li>

      <li class="sidebar-list">
        <i class="fa-solid fa-thumbtack"></i>
        <a class="sidebar-link" href="{{ url('dashboard/edit-profile') }}">
          <svg class="stroke-icon">
            <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Activity') }}"></use>
          </svg>
          <h6>Update Profile</h6>
        </a>
      </li>

      <li class="sidebar-list">
        <i class="fa-solid fa-thumbtack"></i>
        <a class="sidebar-link" href="#">
          <svg class="stroke-icon">
            <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Activity') }}"></use>
          </svg>
          <h6>Jalur A</h6>
        </a>
      </li>

      <li class="sidebar-list">
        <i class="fa-solid fa-thumbtack"></i>
        <a class="sidebar-link" href="{{ url('dashboard/pengumuman') }}">
          <svg class="stroke-icon">
            <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Contacts') }}"></use>
          </svg>
          <h6>Pengumuman</h6>
        </a>
      </li>

      <li class="sidebar-list">
        <i class="fa-solid fa-thumbtack"></i>
        <a class="sidebar-link" href="{{ url('dashboard/index_pemeriksa_afirmasi') }}">
          <svg class="stroke-icon">
            <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Bookmark') }}"></use>
          </svg>
          <h6>Data Afirmasi</h6>
        </a>
      </li>
    </ul>
  </div>
  <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
</aside>
