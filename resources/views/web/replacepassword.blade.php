<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Modificar contraseña</title>
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

<body id="signup">
      @extends ('web.template')
      @section('content')
      <main id="recover-main">
            <div class="signup-container">
                  <h1 class="tittle-signup">Nueva contraseña</h1>
                  <form action="" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                        @if(isset($msg))
                        <div class="alert alert-{{ $msg['estado'] }}" role="alert">
                              {{$msg["msg"]}}
                        </div>
                        @endif
                        <input id="txtClave" name="txtClave" type="password" class="form-control" placeholder="Escriba su nueva contraseña.">
                        <input id="txtReClave" name="txtReClave" type="password" class="form-control" placeholder="Repita la contraseña." />
                        <button type="submit" id="btnSend" name="btnSend" class="btn-signup">Ingresar</button>
                  </form>
                  <div class="member">
                  ¿No quieres cambiar tu contraseña?<a href="/signup"> Volver atrás.</a>
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