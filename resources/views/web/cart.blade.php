<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi carrito Burguer SRL</title>
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

<body id="cart">
    @extends ('web.template')
    @section('content')
    <main>
       <div class="pt-3 container">
            <h1 class="font-weight-bold pt-5">Carrito de compras.</h1>
            <hr>
       </div>
       <section id="cart-container" class="container my-5">
      <table width="100%">
            <thead>
                  <tr>
                        <td>Eliminar</td>
                        <td>Imagen</td>
                        <td>Producto</td>
                        <td>Precio</td>
                        <td>Cantidad</td>
                        <td>Total</td>
                  </tr>
            </thead>
            <tbody>
                  <tr>
                        <td><a href=""><i class="fa-regular fa-trash-can"></i></a></td>
                        <td><img src="" alt=""></td>
                        <td><h5></h5></td>
                        <td><h5></h5></td>
                        <td><input class="w-25 pl-1" value="1" type="number" name="" id=""></td>
                        <td><h5></h5></td>
                  </tr>
            </tbody>
      </table>
       </section>
    </main>
</body>
@endsection

</html>