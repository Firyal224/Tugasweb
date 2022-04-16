<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="#" width="50px" height="50px" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link @yield('home')" href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle @yield('kategori')" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Kategori
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Tes</a>
                
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle @yield('author')" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Author
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">                  
                            <a class="dropdown-item" href="#">Tes2</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('tentang')" href="/artikel-tentang">Tentang Kami</a>
                </li>
            </ul>
            <ul class="navbar-nav my-2 my-lg-0">
                @auth
                @role('admin|penulis')
                    <li class="nav-item">
                        <a class="nav-link" href="/admin">Admin</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#logoutModal" href="">Logout</a>
                    </li>
                @endrole
                   
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>


                @endauth
            </ul>
        </div>
    </div>
</nav>