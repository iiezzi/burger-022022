<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Burguer SRL</title>
    <link rel="stylesheet" href="web/css/styles.css">
    <link rel="stylesheet" href="web/css/bootstrap 5.3.0 alpha 1/css/bootstrap.min.css">
    <link rel="stylesheet" href="web/css/fontawesome 6.3.0/css/all.min.css">
    <link rel="stylesheet" href="web/css/fontawesome 6.3.0/css/fontawesome.min.css">
    <script src="web/css/bootstrap 5.3.0 alpha 1/js/bootstrap.bundle.min.js"></script>
    <script src="web/js/jquery-3.6.3.js"></script>
    <script src="web/js/script.js"></script>
    <link rel="icon" href="web/images/burger-svgrepo-com.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body id="menu">
    @extends ('web.template')
    @section('content')
    <main>
        <div class="tittle-menu">
            <h1>Echale un vistazo a nuestro menú</h1>
        </div>
            <div class="container-category">
                <a href="#" class="category_item" category="all">Todos</a>
                @foreach($aCategorias as $categoria)
                <a href="#" class="category_item" category="{{ $categoria->idcategoria }}">{{ $categoria->nombre }}</a>
                @endforeach
            </div>
        <div class="container-menu">
            @foreach($aProductos as $producto)
            <div class="card-menu" category="{{ $producto->fk_idcategoria }}">
                <div class="img-card">
                    <img src="/files/{{ $producto->imagen }}" alt="">
                </div>
                <h3>{{ $producto->nombre }}</h3>
                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quisquam quaerat
                    explicabo!</p>
                <div class="price-add-to-cart">
                    <p class="price">${{ $producto->precio }}</p>
                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="go-up">
            <a href="#menu" class="btn-carousel">Volver al inicio</a>
        </div>
    </main>
    <footer>
        <div class="container-footer">
            <div class="section-footer">
                <h4 id="tittle-footer-2">Contactanos</h4>
                <a href=""><i class="fa-solid fa-location-dot"></i> Direccion</a><br>
                <a href=""><i class="fa-solid fa-phone-volume"></i> +0123 456-7890</a><br>
                <a href=""><i class="fa-regular fa-envelope"></i></i> burgersrl@gmail.com</a>
            </div>
            <div class="section-footer">
                <div>
                    <a href="index.html">
                        <h2 id="tittle-footer">Burger SRL</h2>
                    </a>
                </div>
                <div class="text-mid-footer">
                    <p>Restaurante de comida rapida "Burger SRL" <br> esta certificado por la A.A.T.A <br> "Asociación
                        Argentina de Tecnólogos Alimentarios"</p>
                </div>
                <div class="social-networks">
                    <a href=""><i class="fa-brands fa-facebook footer-icons"></i></a>
                    <a href=""><i class="fa-brands fa-twitter footer-icons"></i></a>
                    <a href=""><i class="fa-brands fa-linkedin footer-icons"></i></a>
                    <a href=""><i class="fa-brands fa-instagram footer-icons"></i></a>
                    <a href=""><i class="fa-brands fa-pinterest footer-icons"></i></a>
                </div>
            </div>
            <div class="section-footer">
                <h4 id="tittle-footer-2">Horarios de apertura</h4>
                <p>Todos los dias</p>
                <p>10.00 Am -10.00 Pm</p>
            </div>
        </div>
    </footer>
</body>
@endsection

</html>