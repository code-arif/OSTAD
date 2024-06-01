<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
        rel="stylesheet">

    <title>My Blog | @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('users/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('users/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('users/assets/css/templatemo-stand-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('users/assets/css/owl.css') }}">
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

    @include('components.header')

    <!-- Page Content -->

    @yield('content')


    {{-- footer --}}
    @include('components.footer')

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('users/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('users/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Additional Scripts -->
    <script src="{{ asset('users/assets/js/custom.js') }}"></script>
    <script src="{{ asset('users/assets/js/owl.js') }}"></script>
    <script src="{{ asset('users/assets/js/slick.js') }}"></script>
    <script src="{{ asset('users/assets/js/isotope.js') }}"></script>
    <script src="{{ asset('users/assets/js/accordions.js') }}"></script>


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

</body>

</html>
