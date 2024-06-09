<nav class="custom-navbar" data-spy="affix" data-offset-top="20">
    <div class="container">
        <a class="logo" href="{{ route('home') }}">Codearif</a>
        <ul class="nav">
            <li class="item">
                <a class="link" href="{{ route('home') }}">Home</a>
            </li>
            <li class="item">
                <a class="link" href="{{ route('login.show') }}">Login</a>
            </li>
            <li class="item">
                <a class="link" href="{{ route('register.show') }}">Register</a>
            </li>
            <li class="item">
                <a class="link" href="{{ route('profile.show') }}">Profile</a>
            </li>
            <li class="item ml-md-3">
                <a href="components.html" class="btn btn-primary">Logout</a>
            </li>
        </ul>
        <a href="javascript:void(0)" id="nav-toggle" class="hamburger hamburger--elastic">
            <div class="hamburger-box">
                <div class="hamburger-inner"></div>
            </div>
        </a>
    </div>
</nav>
