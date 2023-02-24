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
    <link rel="icon" href="web/images/burger-svgrepo-com.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body id="menu">
    @extends ('web.template')
    @section('content')
    <main id="menu-main">
        <div class="tittle-menu">
            <h1>Echale un vistazo a nuestro menú</h1>
        </div>
        <div class="list-menu">
            <ul>
                <li><a href="#burgers">Hamburguesas</a></li>
                <li><a href="#fries">Papas Fritas</a></li>
                <li><a href="#drinks">Bebidas</a></li>
            </ul>
        </div>
        <?php print_r($aProductos) ?>
        <div class="tittle-menu-2" id="burgers">
            <h2>Hamburguesas</h2>
        </div>
        <div class="container-menu">
            <div class="card-menu">
                <div class="img-card">
                    <img src="web/images/burger-1.png" alt="">
                </div>
                <h3>Yukatan</h3>
                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quisquam quaerat
                    explicabo!</p>
                <div class="price-add-to-cart">
                    <p class="price">1750$</p>
                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
            </div>
            <div class="card-menu">
                <div class="img-card">
                    <img src="web/images/burger-2.png" alt="">
                </div>
                <h3>Big Kahuna</h3>
                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quisquam quaerat
                    explicabo!</p>
                <div class="price-add-to-cart">
                    <p class="price">1670$</p>
                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
            </div>
            <div class="card-menu">
                <div class="img-card">
                    <img src="web/images/burger-3.png" alt="">
                </div>
                <h3>Maverick</h3>
                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quisquam quaerat
                    explicabo!</p>
                <div class="price-add-to-cart">
                    <p class="price">1450$</p>
                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
            </div>
            <div class="card-menu">
                <div class="img-card">
                    <img src="web/images/burger-4.png" alt="">
                </div>
                <h3>Campestre</h3>
                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quisquam quaerat
                    explicabo!</p>
                <div class="price-add-to-cart">
                    <p class="price">1800$</p>
                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
            </div>
            <div class="card-menu">
                <div class="img-card">
                    <img src="web/images/burger-5.png" alt="">
                </div>
                <h3>Brooklyn</h3>
                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quisquam quaerat
                    explicabo!</p>
                <div class="price-add-to-cart">
                    <p class="price">1500$</p>
                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
            </div>
            <div class="card-menu">
                <div class="img-card">
                    <img src="web/images/burger-6.png" alt="">
                </div>
                <h3>Punta Bigotes</h3>
                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quisquam quaerat
                    explicabo!</p>
                <div class="price-add-to-cart">
                    <p class="price">1750$</p>
                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
            </div>
        </div>
        <div class="tittle-menu-2" id="fries">
            <h2>Papas Fritas</h2>
        </div>
        <div class="container-menu">
            <div class="card-menu">
                <div class="img-card">
                    <img src="web/images/fries-1.png" alt="">
                </div>
                <h3>Clasicas</h3>
                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quisquam quaerat
                    explicabo!</p>
                <div class="price-add-to-cart">
                    <p class="price">1200$</p>
                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
            </div>
            <div class="card-menu">
                <div class="img-card">
                    <img src="web/images/fries-2.png" alt="">
                </div>
                <h3>Picantes</h3>
                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quisquam quaerat
                    explicabo!</p>
                <div class="price-add-to-cart">
                    <p class="price">950$</p>
                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
            </div>
            <div class="card-menu">
                <div class="img-card">
                    <img src="web/images/fries-3.png" alt="">
                </div>
                <h3>Capprese</h3>
                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quisquam quaerat
                    explicabo!</p>
                <div class="price-add-to-cart">
                    <p class="price">850$</p>
                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
            </div>
        </div>
        <div class="tittle-menu-2" id="drinks">
            <h2>Bebidas</h2>
        </div>
        <div class="container-menu">
            <div class="card-menu">
                <div class="img-card">
                    <img src="web/images/drink-1.png" alt="">
                </div>
                <h3>Coca-Cola</h3>
                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quisquam quaerat
                    explicabo!</p>
                <div class="price-add-to-cart">
                    <p class="price">500$</p>
                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
            </div>
            <div class="card-menu">
                <div class="img-card">
                    <img src="web/images/drink-2.png" alt="">
                </div>
                <h3>Sprite</h3>
                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quisquam quaerat
                    explicabo!</p>
                <div class="price-add-to-cart">
                    <p class="price">500$</p>
                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
            </div>
            <div class="card-menu">
                <div class="img-card">
                    <img src="web/images/drink-3.png" alt="">
                </div>
                <h3>Fanta</h3>
                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quisquam quaerat
                    explicabo!</p>
                <div class="price-add-to-cart">
                    <p class="price">500$</p>
                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
            </div>
        </div>
        <div class="go-up">
            <a href="#menu-main" class="btn-carousel">Volver al inicio</a>
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