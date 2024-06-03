    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <h2>Stand Blog<em>.</em></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('home.show') }}">Home
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="categoryDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Tags
                            </a>
                            <div class="dropdown-menu" aria-labelledby="categoryDropdown">
                                <a style="background: #f48840" class="dropdown-item"
                                    href="{{ route('show.create.tag') }}">Create Tag</a>
                                <a style="background: #f48840;" class="dropdown-item mt-1"
                                    href="{{ route('show.all.tag') }}">All Tags</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="categoryDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Categories
                            </a>
                            <div class="dropdown-menu" aria-labelledby="categoryDropdown">
                                <a style="background: #f48840" class="dropdown-item"
                                    href="{{ route('show.create.category') }}">Create Category</a>
                                <a style="background: #f48840;" class="dropdown-item mt-1"
                                    href="{{ route('show.all.category') }}">All Categories</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="categoryDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Posts
                            </a>
                            <div class="dropdown-menu" aria-labelledby="categoryDropdown">
                                <a style="background: #f48840" class="dropdown-item"
                                    href="{{ route('show.create.post') }}">Create Post</a>
                                <a style="background: #f48840;" class="dropdown-item mt-1"
                                    href="{{ route('show.all.post') }}">All Post</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
