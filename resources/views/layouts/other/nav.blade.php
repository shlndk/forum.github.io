<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Forum</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        @auth
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown">
                            {{Auth::user()->name}}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('createPostForm')}}">Create Post</a></li>
                            <li><a class="dropdown-item" href="{{route('searchForm')}}">Search</a></li>
                            <li><a class="dropdown-item" href="{{route('showFav')}}">My favorites</a></li>
                            <li><a class="dropdown-item" href="{{route('getComments')}}">My comments</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        @endauth
        @guest
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown">
                            🙋‍♂️
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('login')}}">Log in</a></li>
                            <li><a class="dropdown-item" href="{{route('register')}}">Register</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        @endguest
    </div>
</nav>
