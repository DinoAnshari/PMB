<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('partials.front.head')
</head>

<body data-bs-spy="scroll" data-bs-offset="70">
    <div class="preloader-wrap">
        <div class="preloader">
            <span></span><span></span><span></span><span></span><span></span><span></span>
        </div>
    </div>

    @include('partials.front.navbar')
    @yield('content')
    @include('partials.front.footer')
    @include('partials.front.scripts')
    <script>
        var colorSheets = [{
                color: "#6a11cb",
                title: "Switch to Default",
                href: "{{ asset('front/new/assets/css/color/color-default.css') }}"
            },
            {
                color: "#E65100",
                title: "Switch to Gradient Color One",
                href: "{{ asset('front/new/assets/css/color/gradient-color-one.css') }}"
            },
            {
                color: "#4b68da",
                title: "Switch to Gradient Color Two",
                href: "{{ asset('front/new/assets/css/color/gradient-color-two.css') }}"
            },
            {
                color: "#f75f98",
                title: "Switch to Gradient Color Three",
                href: "{{ asset('front/new/assets/css/color/gradient-color-three.css') }}"
            },
            {
                color: "#81ee8e",
                title: "Switch to Gradient Color Four",
                href: "{{ asset('front/new/assets/css/color/gradient-color-four.css') }}"
            },
            {
                color: "#573d7d",
                title: "Switch to Gradient Color Five",
                href: "{{ asset('front/new/assets/css/color/gradient-color-five.css') }}"
            },
            {
                color: "#F35569",
                title: "Switch to Gradient Color Six",
                href: "{{ asset('front/new/assets/css/color/gradient-color-six.css') }}"
            },
            {
                color: "#37D97D",
                title: "Switch to Gradient Color Seven",
                href: "{{ asset('front/new/assets/css/color/gradient-color-seven.css') }}"
            },
            {
                color: "#ee0979",
                title: "Switch to Gradient Color Eight",
                href: "{{ asset('front/new/assets/css/color/gradient-color-eight.css') }}"
            },
            {
                color: "#AD1457",
                title: "Switch to Gradient Color Nine",
                href: "{{ asset('front/new/assets/css/color/gradient-color-nine.css') }}"
            },
            {
                color: "#009688",
                title: "Switch to Gradient Color Ten",
                href: "{{ asset('front/new/assets/css/color/gradient-color-ten.css') }}"
            },
            {
                color: "#16c9f6",
                title: "Switch to Gradient Color Eleven",
                href: "{{ asset('front/new/assets/css/color/gradient-color-eleven.css') }}"
            }
        ];

        ColorSwitcher.init(colorSheets);
    </script>
</body>

</html>