<nav class="navbar navbar-expand-md bg-body-tertiary fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand fw-semibold" href="{{ route('home') }}">Peoples-today</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas w-75 offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <!-- <h5 class="offcanvas-title fs-2" id="offcanvasNavbarLabel">Peoples-today</h5> -->
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                   
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">about</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('posts.index') }}">posts</a>
                    </li>
                   
                </ul>
                
            </div>
            
        </div>
    </div>
</nav>