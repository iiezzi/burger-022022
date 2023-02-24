<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros Burguer SRL</title>
    <link rel="stylesheet" href="web/css/styles.css">
    <link rel="stylesheet" href="web/css/bootstrap 5.3.0 alpha 1/css/bootstrap.min.css">
    <link rel="stylesheet" href="web/css/fontawesome 6.3.0/css/all.min.css">
    <link rel="stylesheet" href="web/css/fontawesome 6.3.0/css/fontawesome.min.css">
    <script src="web/css/bootstrap 5.3.0 alpha 1/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" href="web/images/burger-svgrepo-com.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body id="us">
    @extends ('web.template')
    @section('content')
    <main id="us-main">
        <div class="us-container">
            <div class="img-us">
                <img src="web/images/about-img.png" alt="">
            </div>
            <div class="text-us">
                <h2>Nosotros somos Burguer SRL</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut modi, incidunt blanditiis, nesciunt,
                    facere magnam officiis porro quidem quod omnis accusantium dolorum? Quibusdam porro commodi
                    doloribus deleniti iste enim labore!orem ipsum dolor sit, amet consectetur adipisicing elit. Ut modi, incidunt blanditiis, nesciunt,
                    facere magnam officiis.</p>
                <div>
                    <a href="/contact" class="btn-carousel">Contactanos</a>
                </div>
            </div>
        </div>
        <div class="locals">
            <h3>Visita cualquiera de nuestras sucursales</h3>
        </div>
        <div class="us-maps-container">
            @foreach($aSucursales as $sucursal)
            <div class="box-sucusal">
                <div class="text-sucursal">
                    <h4>{{ $sucursal->nombre }}</h4>
                    <p>{{ $sucursal->telefono }}</p>
                    <p>{{ $sucursal->direccion }}</p>
                </div>
                <div class="maps">
                    <iframe src="{{ $sucursal->linkmapa }}" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            @endforeach
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