<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title> @yield('title') </title>

        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.4.47/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="{{ asset('admin/css/vendor.bundle.base.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/css/jquery-jvectormap.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/css/flag-icon.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/css/owl.theme.default.min.css') }}">

        <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">

        <link rel="shortcut icon" href="{{ asset('admin/favicon/favicon.png') }}" />
    </head>




    <body>


        <div class="container-scroller">
            {{-- include sidebar --}}
            @include('components.side-nav')


            <div class="container-fluid page-body-wrapper">
                {{-- include header --}}
                @include('components.header')

                <div class="main-panel">

                    {{-- content --}}
                    <div class="content-wrapper">
                        @yield('content')
                    </div>
                    @include('components.footer')
                </div>
            </div>
        </div>


        {{-- plugins:js --}}
        <script src="{{ asset('admin/js/vendor.bundle.base.js') }}"></script>


        {{-- Plugin js for this page --}}
        <script src="{{ asset('admin/js/Chart.min.js') }}"></script>
        <script src="{{ asset('admin/js/progressbar.min.js') }}"></script>
        <script src="{{ asset('admin/js/jquery-jvectormap.min.js') }}"></script>
        <script src="{{ asset('admin/js/jquery-jvectormap-world-mill-en.js') }}"></script>
        <script src="{{ asset('admin/js/owl.carousel.min.js') }}"></script>
        {{-- End Plugin js for this page --}}

        {{-- inject:js --}}
        <script src="{{ asset('admin/js/off-canvas.js') }}"></script>
        <script src="{{ asset('admin/js/hoverable-collapse.js') }}"></script>
        <script src="{{ asset('admin/js/misc.js') }}"></script>
        <script src="{{ asset('admin/js/settings.js') }}"></script>
        <script src="{{ asset('admin/js/todolist.js') }}"></script>

        {{-- Custom js --}}
        <script src="{{ asset('admin/js/dashboard.js') }}"></script>
        {{-- End custom js --}}
    </body>

</html>
