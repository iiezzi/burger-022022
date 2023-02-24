<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto Burguer SRL</title>
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

<body id="contact">
    @extends ('web.template')
    @section('content')
    <main id="contact-main">
        <div class="container-contact">
            <div class="form-container">
                <div class="tittle-contact">
                    <h1>Formulario de postulación</h1>
                    <p>¡Siempre estamos dispuestos a recibir gente nueva en nuestro equipo, si eres un apasionado de las hamburguesas y crees que tienes la experiencia necesaria no dudes en comunicarte con nosotros, completa el formulario y veremos tu perfil, Gracias!.</p>
                </div>
            </div>
            <div class="form-container">
                <form action="" enctype="multipart/form-data" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                    <input type="text" name="nombre" placeholder="Nombre" class="form-control form-inputs">
                    <input type="text" name="apellido" placeholder="Apellido" class="form-control form-inputs">
                    <input type="tel" name="telefono" placeholder="Teléfono" class="form-control form-inputs">
                    <input type="email" name="email" placeholder="Correo" class="form-control form-inputs">
                    <label for="curriculum" class="label-contact">Adjunta tu curriculum vitae:</label>
                    <input type="file" name="curriculum" placeholder="Curriculum" class="form-control form-inputs">
                    <button type="submit" id="btnSend" name="btnSend" class="btn-contact">ENVIAR</button>
                </form>
            </div>
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