<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('show.post') }}">
                <h2>My Blog<em>.</em></h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ request()->routeIs('show.post') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('show.post') }}"
                            style="{{ request()->routeIs('show.post') ? 'color: #f48840;' : '' }}">Home</a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('all.post.show') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('all.post.show') }}"
                            style="{{ request()->routeIs('all.post.show') ? 'color: #f48840;' : '' }}">All post</a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('show.create.post') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('show.create.post') }}"
                            style="{{ request()->routeIs('show.create.post') ? 'color: #f48840;' : '' }}">Create post</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
