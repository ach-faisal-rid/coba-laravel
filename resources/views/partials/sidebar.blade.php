<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Stack-Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{$active == "Home" ? 'active' : ''}}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{$active == "About" ? 'active' : ''}}" href="/about">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{$active == "Blog" ? 'active' : ''}}" href="/blog">blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{$active == "Categories" ? 'active' : ''}}" href="/categories">categories</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
            @auth()
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        wellcome back, {{auth()->user()->name}}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/dashboard">
                        <i class="bi bi-clipboard2-data"></i>
                        My dashboard
                        </a></li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    <i class="bi bi-box-arrow-in-right"></i>
                                    logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
            @else
                <li class="nav-item">
                    <a href="/login" class="nav-link {{ ($active == "login") ?  'active' : "" }}">
                        <i class="bi bi-box-arrow-in-right"></i>
                        Login
                    </a>
                </li>
            @endauth
            </ul>

        </div>
    </div>
</nav>
