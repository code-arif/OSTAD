<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Devcrud">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>CODEARIF | @yield('title')</title>

    <!-- Bootstrap + Meyawo main styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="{{ asset('assets/main.css') }}" rel="stylesheet" media="all">
</head>

<body>
    {{-- preloader start --}}
    <div id="loader" class="LoadingOverlay d-none">
        <div class="Line-Progress">
            <div class="indeterminate"></div>
        </div>
    </div>
    {{-- pre loader end --}}

    <section data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
        @include('includes.header')
        @yield('hero')
    </section>

    @yield('content')

    <!-- core  -->
    <script src="{{ asset('assets/vendors/jquery/jquery-3.4.1.js') }}"></script>
    <script src="{{ asset('js/axios.min.js') }}"></script>
    <script src="{{ asset('js/config.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>

    <!-- bootstrap 3 affix -->
    <script src="{{ asset('assets/vendors/bootstrap/bootstrap.affix.js') }}"></script>

    <!-- custom js -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
