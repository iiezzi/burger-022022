<nav class="navbar navbar-expand-lg rounded" aria-label="Thirteenth navbar example">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fa-solid fa-bars-staggered"></i></span>
        </button>

        <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
            <div class="navbar-brand col-lg-3 me-0">
                <a href="/">Burger SRL<img src="web/images/burger-svgrepo-com.svg" class="ms-2 pb-2" width="30"></a>
            </div>
            <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/menu">Menú</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/us">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contacto</a>
                </li>
                @if(Session::get("idcliente") >0)
                <li class="nav-item">
                    <a class="nav-link" href="/myaccount">Mi cuenta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/cart"><i class="fa-solid fa-cart-shopping"></i></a>
                </li>
                @endif
            </ul>
            @if(Session::get("idcliente") >0)
            <div class="d-lg-flex col-lg-3 justify-content-lg-end">
                <a class="btn-contact" href="/logout">Cerrar sesion</a>
            </div>
            @else
            <div class="d-lg-flex col-lg-3 justify-content-lg-end">
                <a class="btn-contact" href="/login">Iniciar sesion</a>
            </div>
            @endif
        </div>
    </div>
</nav>
@yield('content')