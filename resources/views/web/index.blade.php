<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burguer SRL</title>
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

<body id="index">
    @extends ('web.template')
    @section('content')
    <main id="index-main">
        <div id="carouselExampleIndicators" class="carousel-slide carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="web/images/Slider-2.jpeg" class="d-block w-100 d-img" alt="...">
                    <div class="carousel-caption text-start top-0">
                        <h1>Burguer Srl.</h1>
                        <p>Las mejores hamburguesas del país, visitanos en nuestro local más cercano.</p>
                        <a class="btn-carousel" href="/us">Ver locales</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="web/images/Slider-1.jpg" class="d-block w-100 d-img" alt="...">
                    <div class="carousel-caption mb-2">
                        <h1>Tenemos las mejores combinaciones.</h1>
                        <p>Echales un vistazo en nuestro menú.</p>
                        <a class="btn-carousel" href="/menu">Ver más</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="web/images/Slider-3.jpg" class="d-block w-100 d-img" alt="...">
                    <div class="carousel-caption text-end top-0">
                        <h1>¿Quieres ser parte de nuestro equipo?.</h1>
                        <p>Presioná el botón y completa el formulario.</p>
                        <a class="btn-carousel" href="/contact">Contacto</a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="container-promo">
            <div class="card-promo">
                <div class="img-promo">
                    <img src="web/images/burger-promo-2.png" alt="">
                </div>
                <div class="text-promo">
                    <h5>Martes de carne</h5>
                    <h6><span>25%</span> De descuento</h6>
                    <a href="/menu" class="btn-carousel" id="order-now">¡Ordenalo ya!</a>
                </div>
            </div>
            <div class="card-promo">
                <div class="img-promo">
                    <img src="web/images/burger-promo-1.png" alt="">
                </div>
                <div class="text-promo">
                    <h5>Jueves de pollo</h5>
                    <h6><span>25%</span> De descuento</h6>
                    <a href="/menu" class="btn-carousel">¡Ordenalo ya!</a>
                </div>
            </div>
        </div>
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
    </main>
    @endsection
</body>

</html>