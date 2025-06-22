    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', 'Dashboard')</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('back/assets/css/vendors/flag-icon.css') }}" />
        <!-- iconly-icon -->
        <link rel="stylesheet" href="{{ asset('back/assets/css/iconly-icon.css') }}" />
        <link rel="stylesheet" href="{{ asset('back/assets/css/bulk-style.css') }}" />
        <link rel="stylesheet" href="{{ asset('back/assets/css/vendors/datatables.css') }}" />
        <!-- themify-icons -->
        <link rel="stylesheet" href="{{ asset('back/assets/css/themify.css') }}" />
        <!-- fontawesome -->
        <link rel="stylesheet" href="{{ asset('back/assets/css/fontawesome-min.css') }}" />
        <!-- Weather Icon css -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800;6..12,900;6..12,1000&amp;display=swap" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="{{ asset('back/assets/css/vendors/weather-icons/weather-icons.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('back/assets/css/vendors/scrollbar.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('back/assets/css/vendors/slick.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('back/assets/css/vendors/slick-theme.css') }}" />
        <!-- App css -->
        <link rel="stylesheet" href="{{ asset('back/assets/css/style.css') }}" />
        <link id="color" rel="stylesheet" href="{{ asset('back/assets/css/color-1.css') }}" media="screen" />

    </head>

    <body>
        <div class="tap-top"><i class="iconly-Arrow-Up icli"></i></div>

        <!-- Bootstrap Toast -->
        <div class="toast-container position-fixed top-0 end-0 p-3 toast-index toast-rtl" style="z-index: 1055">
            <div class="toast align-items-center text-white border-0" id="liveToast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body" id="toastMessage">
                        <!-- Pesan akan diisi via JS -->
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>
        <div class="loader-wrapper">
            <div class="loader"><span></span><span></span><span></span><span></span><span></span></div>
        </div>
        <div class="page-wrapper compact-wrapper" id="pageWrapper">

            <!-- Header -->
            @include('partials.back.backHeader')

            <div class="page-body-wrapper">
                <!-- Sidebar -->
                @include('partials.back.backSidebar')

                <!-- Main Content -->
                <div class="page-body">
                    @yield('content')
                </div>
                @include('partials.back.backFooter')
            </div>

        </div>

        <!-- Scripts -->
        <script src="{{ asset('back/assets/js/vendors/jquery/jquery.min.js') }}"></script>
        <!-- bootstrap js-->
        <script src="{{ asset('back/assets/js/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}" defer></script>
        <script src="{{ asset('back/assets/js/vendors/bootstrap/dist/js/popper.min.js') }}" defer></script>
        <!-- fontawesome -->
        <script src="{{ asset('back/assets/js/vendors/font-awesome/fontawesome-min.js') }}"></script>
        <!-- feather -->
        <script src="{{ asset('back/assets/js/vendors/feather-icon/feather.min.js') }}"></script>
        <script src="{{ asset('back/assets/js/vendors/feather-icon/custom-script.js') }}"></script>
        <!-- sidebar -->
        <script src="{{ asset('back/assets/js/sidebar.js') }}"></script>
        <!-- height_equal -->
        <script src="{{ asset('back/assets/js/height-equal.js') }}"></script>
        <!-- config -->
        <script src="{{ asset('back/assets/js/config.js') }}"></script>
        <!-- apex -->
        <script src="{{ asset('back/assets/js/chart/apex-chart/apex-chart.js') }}"></script>
        <script src="{{ asset('back/assets/js/chart/apex-chart/stock-prices.js') }}"></script>
        <script src="{{ asset('back/assets/js/chart/apex-chart/chart-custom.js') }}"></script>
        <!-- scrollbar -->
        <script src="{{ asset('back/assets/js/scrollbar/simplebar.js') }}"></script>
        <script src="{{ asset('back/assets/js/scrollbar/custom.js') }}"></script>
        <!-- slick -->
        <script src="{{ asset('back/assets/js/slick/slick.min.js') }}"></script>
        <script src="{{ asset('back/assets/js/slick/slick.js') }}"></script>
        <!-- data_table -->
        <script src="{{ asset('back/assets/js/js-datatables/datatables/jquery.dataTables.min.js') }}"></script>
        <!-- page_datatable -->
        <script src="{{ asset('back/assets/js/js-datatables/datatables/datatable.custom.js') }}"></script>
        <!-- page_datatable1 -->
        <!-- page_datatable -->
        <script src="{{ asset('back/assets/js/datatable/datatables/datatable.custom.js') }}"></script>
        <!-- theme_customizer -->
        <script src="{{ asset('back/assets/js/theme-customizer/customizer.js') }}"></script>
        <script src="{{ asset('back/assets/js/sweetalert/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('back/assets/js/sweetalert/sweetalert-custom.js') }}"></script>
        <!-- tilt -->
        <script src="{{ asset('back/assets/js/animation/tilt/tilt.jquery.js') }}"></script>
        <!-- page_tilt -->
        <script src="{{ asset('back/assets/js/animation/tilt/tilt-custom.js') }}"></script>
        <!-- dashboard_1 -->
        <script src="{{ asset('back/assets/js/dashboard/dashboard_1.js') }}"></script>
        <script src="{{ asset('back/assets/js/widget/general-widget.js') }}"></script>

        <!-- custom script -->
        <script src="{{ asset('back/assets/js/script.js') }}"></script>
        <script src="{{ asset('back/assets/js/toasts-custom.js') }}"></script>

        @stack('modal')
        @stack('js')
        @yield('scripts')
        <script>
            var lightImg = "{{ asset('back/assets/images/customizer/light.png') }}";
            var darkImg = "{{ asset('back/assets/images/customizer/dark.png') }}";
            var mixImg = "{{ asset('back/assets/images/customizer/mix.png') }}";
            var iconSprite = "{{ asset('assets/svg/icon-sprite.svg') }}";
        </script>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                @if(session('type') == 'bootstrap-toast')
                var toastEl = document.getElementById("liveToast");
                var toastBody = document.getElementById("toastMessage");

                @if(session('success'))
                toastBody.innerHTML = "{{ session('success') }}";
                toastEl.classList.remove('bg-danger');
                toastEl.classList.add('bg-success');
                @endif

                @if(session('error'))
                toastBody.innerHTML = "{{ session('error') }}";
                toastEl.classList.remove('bg-success');
                toastEl.classList.add('bg-danger');
                @endif

                var toast = new bootstrap.Toast(toastEl);
                toast.show();
                @endif
            });
            document.addEventListener('DOMContentLoaded', function() {
                document.querySelectorAll('.sweet-122').forEach(function(el) {
                    el.addEventListener('click', function(e) {
                        e.preventDefault();

                        const url = this.getAttribute('data-url');
                        const title = this.getAttribute('data-title') || 'Konfirmasi?';
                        const text = this.getAttribute('data-text') || 'Apakah Anda yakin?';

                        Swal.fire({
                            title: title,
                            text: text,
                            showDenyButton: true,
                            confirmButtonText: 'Reset',
                            denyButtonText: `Batal`,
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = url;
                            } else if (result.isDenied) {
                                Swal.fire('Aksi dibatalkan', '', 'info');
                            }
                        });
                    });
                });
            });
            document.addEventListener('DOMContentLoaded', function() {
                document.querySelectorAll('.sweet-broadcast').forEach(function(el) {
                    el.addEventListener('click', function(e) {
                        e.preventDefault();

                        const url = this.getAttribute('data-url');
                        const title = this.getAttribute('data-title') || 'Konfirmasi?';
                        const text = this.getAttribute('data-text') || 'Apakah Anda yakin?';

                        Swal.fire({
                            title: title,
                            text: text,
                            icon: 'warning',
                            showDenyButton: true,
                            confirmButtonText: 'Kirim',
                            denyButtonText: 'Batal',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // Kirim form POST secara manual
                                const form = document.createElement('form');
                                form.method = 'POST';
                                form.action = url;

                                // Tambah CSRF token
                                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                                const input = document.createElement('input');
                                input.type = 'hidden';
                                input.name = '_token';
                                input.value = csrfToken;
                                form.appendChild(input);

                                document.body.appendChild(form);
                                form.submit();
                            } else if (result.isDenied) {
                                Swal.fire('Broadcast dibatalkan', '', 'info');
                            }
                        });
                    });
                });
            });
            document.querySelectorAll("[data-chart]").forEach((el) => {
                const options = getChartOptionsBasedOnElement(el); // fungsi kamu sendiri
                const chart = new ApexCharts(el, options);
                chart.render();
            });
        </script>
    </body>

    </html>