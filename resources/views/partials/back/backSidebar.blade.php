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
    @endif
    </ul>
  </div>
  <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
</aside>