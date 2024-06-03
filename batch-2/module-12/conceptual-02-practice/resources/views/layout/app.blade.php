<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
        rel="stylesheet">

    <title> CODEARIF | @yield('title') </title>

    <!-- Bootstrap core CSS -->
    <link href=" {{ asset('vendor/bootstrap/css/bootstrap.min.css') }} " rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href=" {{ asset('assets/css/fontawesome.css') }} ">
    <link rel="stylesheet" href=" {{ asset('assets/css/templatemo-stand-blog.css') }} ">
    <link rel="stylesheet" href=" {{ asset('assets/css/owl.css') }} ">
    @stack('css')
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    @include('includes/header')

    @yield('content')

    @include('includes/footer')

    <!-- Bootstrap core JavaScript -->
    <script src=" {{ asset('vendor/jquery/jquery.min.js') }} "></script>
    <script src=" {{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }} "></script>

    <!-- Additional Scripts -->
    <script src=" {{ asset('assets/js/custom.js') }} "></script>
    <script src=" {{ asset('assets/js/owl.js') }} "></script>
    <script src=" {{ asset('assets/js/slick.js') }} "></script>
    <script src=" {{ asset('assets/js/isotope.js') }} "></script>
    <script src=" {{ asset('assets/js/accordions.js') }} "></script>

    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t) { //declaring the array outside of the
            if (!cleared[t.id]) { // function makes it static and global
                cleared[t.id] = 1; // you could use true and false, but that's more typing
                t.value = ''; // with more chance of typos
                t.style.color = '#fff';
            }
        }
    </script>

    {{-- ajax intrigation with laravel --}}
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    <script src="{{ asset('custom.js') }}"></script>
    @stack('js')
</body>

</html>
