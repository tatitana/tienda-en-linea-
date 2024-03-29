<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <strong><title>Muebles</title></strong>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/product/">

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
 <style>
  body {
      font-family: Arial, sans-serif;
  }
  form {
      max-width: 300px;
      margin: 20px auto;
  }
  label {
      display: block;
      margin-bottom: 8px;
  }
  input {
      width: 100%;
      padding: 8px;
      margin-bottom: 12px;
      box-sizing: border-box;
  }
  button {
      background-color: #4caf50;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
  }
</style>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="product.css" rel="stylesheet">
  </head>
  <body style="background-image:url(img/telas2.jpg);">
    <nav class="site-header sticky-top py-1">
  <div class="container d-flex flex-column flex-md-row justify-content-between">
    <a class="py-2" href="index.php" aria-label="Product">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
    </a>
    <a class="py-2 d-none d-md-inline-block" href="formulario.php">Iniciar_sesion</a>
    <a class="py-2 d-none d-md-inline-block" href="#">Tu_Tienda</a>
    <a class="py-2 d-none d-md-inline-block" href="#">Menu</a>
    <a class="py-2 d-none d-md-inline-block" href="#">Ayuda</a>
    <a class="py-2 d-none d-md-inline-block" href="#">Contactanos</a>
    <a class="py-2 d-none d-md-inline-block" href="#"><img style="width: 30px; height: 30px;"  src="img/carrito.jpeg"></a>

    <a class="py-2 d-none d-md-inline-block" href="#"></a>
  </div>
</nav>

<div style= "background-image:url(img/boutique.jpg) ;" class="tipoletra position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <div class="col-md-5 p-lg-5 mx-auto my-5">
    <h1 class="display-4 font-weight-normal">Boutique Tatis</h1>
    <p class="lead font-weight-normal">La mejor ropa para el publico mas selecto.</p>
    <a class="btn btn-outline-secondary" href="#">Contactanos</a>
  </div>
  <div  class="product-device shadow-sm d-none d-md-block"></div>
  <div  class="product-device product-device-2 shadow-sm d-none d-md-block text-center"></div>
</div>

<section>
<a class="btn btn-outline-secondary" href="producto.php">Producto</a>
<a class="btn btn-outline-secondary" href="pedido.php">Pedido</a>
<a class="btn btn-outline-secondary" href="#">Contactanos</a>
<a class="btn btn-outline-secondary" href="#">Contactanos</a>
<a class="btn btn-outline-secondary" href="#">Contactanos</a>
<a class="btn btn-outline-secondary" href="#">Contactanos</a>
<a class="btn btn-outline-secondary" href="#">Contactanos</a>
<a class="btn btn-outline-secondary" href="#">Contactanos</a>
<a class="btn btn-outline-secondary" href="#">Contactanos</a>  
</section>

<section>
<?php
  $db_host="localhost";
  $db_nombre="datostienda";
  $db_usuario="root";
  $db_contra="";

  $conexion= mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
  $consulta = "SELECT * FROM PEDIDO";
$resultados = mysqli_query($conexion, $consulta);

// Verificar si hay resultados
if ($resultados && mysqli_num_rows($resultados) > 0) {
    echo "<table border='1'>";
    // Mostrar encabezados de la tabla
    echo "<tr>";
    $fila = mysqli_fetch_assoc($resultados);
    foreach ($fila as $campo => $valor) {
        echo "<th>$campo</th>";
    }
    echo "</tr>";
    
    // Mostrar datos de la tabla
    mysqli_data_seek($resultados, 0); // Reiniciar el puntero a la primera fila
    while ($fila = mysqli_fetch_assoc($resultados)) {
        echo "<tr>";
        foreach ($fila as $valor) {
            echo "<td>$valor</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
} else {
    // Manejar el caso en que no haya resultados
    echo "No se encontraron resultados.";
}

// Liberar la memoria del resultado
mysqli_free_result($resultados);

  
  
?>
</section>

<footer  class="container py-5 tipoletra">
  <div class="row">
    <div class="col-12 col-md">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
      <small class="d-block mb-3 text-muted">&copy;2023</small>
    </div>
    <div  class="col-6 col-md">
      <h5>Nosotros</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">Tiendas</a></li>
        <li><a class="text-muted" href="#">Blog</a></li>
        <li><a class="text-muted" href="#">Historia</a></li>
        <li><a class="text-muted" href="#"></a></li>
        <li><a class="text-muted" href="#"></a></li>
        <li><a class="text-muted" href="#"></a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Colecciones</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">Primavera</a></li>
        <li><a class="text-muted" href="#">Otoño</a></li>
        <li><a class="text-muted" href="#">Invierno</a></li>
        <li><a class="text-muted" href="#">Verano</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Politicas</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">Politicas cambios y devoluciones</a></li>
        <li><a class="text-muted" href="#">Politicas de garantia</a></li>
        <li><a class="text-muted" href="#">Politicas de envio</a></li>
        <li><a class="text-muted" href="#"></a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Redes sociales</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">Facebook</a></li>
        <li><a class="text-muted" href="#">Twiter</a></li>
        <li><a class="text-muted" href="#">Instagram</a></li>
        <li><a class="text-muted" href="#">Tik tok </a></li>
      </ul>
    </div>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    </body>
</html>
