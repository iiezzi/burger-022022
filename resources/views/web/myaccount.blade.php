<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title> Mi cuenta</title>
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

<body id="myaccount">
      @extends ('web.template')
      @section('content')
      <main id="myaccount-main">
            <div class="container-ma">
                  <div class="main-ma">
                        <div class="row">
                              <div class="col-md-4 mt-1 mb-2">
                                    <div class="card text-center sidebar">
                                          <div class="card-body">
                                                <img src="web/images/icon.png" alt="">
                                                <div class="mt-3">
                                                      <h3>{{ $cliente->nombre . " " . $cliente->apellido}}</h3>
                                                      <a href="/"><i class="fa-solid fa-house"></i> Inicio</a>
                                                      <a href="/menu"><i class="fa-solid fa-book-open"></i> Nuestro menú</a>
                                                      <a href="/editdata"><i class="fa-solid fa-pencil"></i> Editar información</a>
                                                      <a href="/replacepassword"><i class="fa-solid fa-gear"></i> Modificar contraseña</a>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <div class="col-md-8 mt-1">
                                    <div class="card mb-3 content">
                                          <h1 class="m-3 pt-3">Mi información</h1>
                                          <div class="card-body">
                                                <div class="row">
                                                      <div class="col-md-3">
                                                            <h5>Nombre completo:</h5>
                                                      </div>
                                                      <div class="col md-9 text-secondary">
                                                            {{ $cliente->nombre . " " . $cliente->apellido}}
                                                      </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                      <div class="col-md-3">
                                                            <h5>Documento:</h5>
                                                      </div>
                                                      <div class="col md-9 text-secondary">
                                                            {{ $cliente->dni}}
                                                      </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                      <div class="col-md-3">
                                                            <h5>Correo electrónico:</h5>
                                                      </div>
                                                      <div class="col md-9 text-secondary">
                                                            {{ $cliente->correo}}
                                                      </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                      <div class="col-md-3">
                                                            <h5>Teléfono:</h5>
                                                      </div>
                                                      <div class="col md-9 text-secondary">
                                                            {{ $cliente->celular}}
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="card mb-3 content">
                                          <h1 class="m-3">Pedidos recientes</h1>
                                          <div class="card-body">
                                                <table class="table table-striped table-hover border">
                                                      <thead>
                                                            <tr>
                                                                  <th>Pedido</th>
                                                                  <th>Fecha</th>
                                                                  <th>Total</th>
                                                                  <th>Estado</th>
                                                            </tr>
                                                      </thead>
                                                      <tbody>
                                                            @foreach($aPedidos as $pedido)
                                                            <tr>
                                                                  <td>{{$pedido->descripcion}}</td>
                                                                  <td>{{date_format(date_create($pedido->fecha), "d/m/Y")}}</td>
                                                                  <td>${{number_format($pedido->total, 2, "," , ".")}}</td>
                                                                  <td>{{$pedido->estado}}</td>
                                                            </tr>
                                                            @endforeach
                                                      </tbody>
                                                </table>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </main>
</body>
@endsection

</html>