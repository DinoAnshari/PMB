<header class="page-header row">
  <div class="logo-wrapper d-flex align-items-center col-auto">
    <a href="#">
      <h3 style="color: black;">PMB</h3>
      <img class="dark-logo img-fluid" src="{{ asset('back/assets/images/logo/logo-dark.png') }}" alt="logo" />
    </a>
    <a class="close-btn toggle-sidebar" href="javascript:void(0)">
      <svg class="svg-color">
        <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Category') }}"></use>
      </svg>
    </a>
  </div>

  <div class="page-main-header col">
    <div class="header-left">
    </div>
    <div class="nav-right">
      <ul class="header-right">
        <li class="custom-dropdown">
        </li>

        <li>
          <a class="dark-mode" href="javascript:void(0)">
            <svg>
              <use href="{{ asset('back/assets/svg/iconly-sprite.svg#moondark') }}"></use>
            </svg>
          </a>
        </li>

        <li>
          <a class="full-screen" href="javascript:void(0)">
            <svg>
              <use href="{{ asset('back/assets/svg/iconly-sprite.svg#scanfull') }}"></use>
            </svg>
          </a>
        </li>

        <li class="profile-nav custom-dropdown">
          <div class="user-wrap">
            <div class="user-img">
              <img src="{{ auth()->user()->biodata ? asset('storage/' . auth()->user()->biodata->pas_foto) : asset('back/assets/images/profile.png') }}" alt="user" />
            </div>

            <div class="user-content">
              <h6>{{ auth()->user()->name }}</h6>
              <p class="mb-0">
                {{ auth()->user()->getRoleNames()->first() }}
                <i class="fa-solid fa-chevron-down"></i>
              </p>
            </div>
          </div>
          <div class="custom-menu overflow-hidden">
            <ul class="profile-body">
              <li class="d-flex">
                <svg class="svg-color">
                  <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Profile') }}"></use>
                </svg>
                @if(auth()->user()->hasRole('siswa'))
                <a class="ms-2" href="{{ route('edit-profile.index') }}">Account</a>
                @else
                <a class="ms-2 text-muted" href="javascript:void(0)" onclick="return false;" style="cursor: not-allowed;">Account</a>
                @endif
              </li>

              <li class="d-flex">
                <svg class="svg-color">
                  <use href="{{ asset('back/assets/svg/iconly-sprite.svg#Login') }}"></use>
                </svg>
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                  @csrf
                  <button type="submit" class="ms-2" style="background: none; border: none; color: inherit; cursor: pointer;">
                    Log Out
                  </button>
                </form>
              </li>
            </ul>
          </div>

        </li>
      </ul>
    </div>
  </div>
</header>