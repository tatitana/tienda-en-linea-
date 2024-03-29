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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('button.agregar').click(function(){
                var producto = $(this).attr('data-producto');
                $.ajax({
                    type: 'POST',
                    url: 'agregar_carrito.php',
                    data: {producto: producto},
                    success: function(response){
                        alert('Producto agregado al carrito');
                    }
                });
            });
        });
    </script>
    <!-- Custom styles for this template -->
    <link href="product.css" rel="stylesheet">

    <!-- Estilos CSS -->
    <style>
  /* Estilos para el botón y el menú desplegable */
  .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #233B72;
    width: auto; /* Anchura automática */
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }

  .dropdown-content a {
    color: black;
    padding: 5px 5px;
    text-decoration: none;
    display: block;
  }

  .dropdown-content a:hover {
    background-color: #D6EAF8;
  }

  .dropdown:hover .dropdown-content {
    display: block;
  }
</style>

  </head>
  <body style="background-image:url(img/telas2.jpg);">
    <nav class="site-header sticky-top py-1">
  <div class="container d-flex flex-column flex-md-row justify-content-between">
    <a class="py-2" href="index.php" aria-label="Product">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
    </a>
    <a class="py-2 d-none d-md-inline-block" href="formulario.php">Iniciar_sesion</a>
   
        <!-- Botón "Tu Tienda" con menú desplegable -->
        <div class="dropdown" onmouseover="showDropdown()" onmouseout="hideDropdown()">
        <a class="py-2 d-none d-md-inline-block dropbtn" href="#">Tu_Tienda</a>
      <div class="dropdown-content" id="tuTiendaDropdown">
        <a href="#">Ropa Hombre</a>
        <a href="#">Ropa Mujer</a>
        <a href="#">Ropa niños</a>
      </div>
    </div>
    <a class="py-2 d-none d-md-inline-block" href="menu.php">Administrador</a>
    <a class="py-2 d-none d-md-inline-block" href="index_carrito.php">Compras</a>
    <a class="py-2 d-none d-md-inline-block" href="contactanos.php">Contactanos</a>
    <a class="py-2 d-none d-md-inline-block" href="ver_carrito.php"><img style="width: 30px; height: 30px;"  src="img/carrito.jpeg"></a>
  
    <a class="py-2 d-none d-md-inline-block" href="#"></a>
  </div>
</nav>

<div style= "background-image:url(img/boutique.jpg) ;" class="tipoletra position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <div class="col-md-5 p-lg-5 mx-auto my-5">
    <h1 class="display-4 font-weight-normal">Boutique Tatis</h1>
    <p class="lead font-weight-normal">La mejor ropa para el publico mas selecto.</p>
    <a class="btn btn-outline-secondary" href="contactanos.php">Contactanos</a>
  </div>
  <div  class="product-device shadow-sm d-none d-md-block"></div>
  <div  class="product-device product-device-2 shadow-sm d-none d-md-block text-center"></div>
</div>

<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 tipoletra">
  <div class="color1 mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 py-3">
      <h2 class="display-5">Coleccion Primavera</h2>
      <a class="py-2 d-none d-md-inline-block" href="primavera.php">ver</a>
      </div>
    
    <div class=" imagenesb color2 shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"><br>
     <a href=""><img class="imagenesb" src="img/prima.jpg"></a><br>
          
          
          
 
    </div>
  </div>
  <div class="color2 mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden tipoletra">
    <div class="my-3 p-3">
      <h2 class="display-5">Coleccion Verano</h2>
      <a class="py-2 d-none d-md-inline-block" href="primavera.php">ver</a>
    </div>
    <div class=" imagenesb color1 shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"><br>
       <a href=""><img class="imagenesb" src="img/verano.jpeg"></a><br>


    </div>

  </div>
</div>

<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 tipoletra">
  <div class="color1 mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 py-3">
      <h2 class="display-5">Coleccion Otoño</h2>
      <a class="py-2 d-none d-md-inline-block" href="primavera.php">ver</a>
    </div>
    <div class=" imagenesb color2 shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"><br>
     <a href=""><img class="imagenesb" src="img/oto.jpeg"></a><br>
 
    </div>
  </div>
  <div class="color2 mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden tipoletra">
    <div class="my-3 p-3">
      <h2 class="display-5">Coleccion Invierno</h2>
      <a class="py-2 d-none d-md-inline-block" href="primavera.php">ver</a>
    </div>
    <div class=" imagenesb color1 shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"><br>
       <a href=""><img class="imagenesb" src="img/invierno.jpg"></a><br>


    </div>

  </div>
</div>
<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 tipoletra">
  <div class="color1 mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 p-3">
      <h2 class="display-5">Otro titular </h2>
      <p class="lead">And an even wittier subheading.</p>
    </div>
    <div class="color2 shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
  </div>
  <div class="color2 mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden tipoletra">
    <div class="my-3 py-3">
      <h2 class="display-5">Otro</h2>
      <p class="lead">And an even wittier subheading.</p>
    </div>
    <div class="color1 shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
  </div>
</div>

<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 tipoletra">
  <div class="color2 mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 p-3">
      <h2 class="display-5">Another headline</h2>
      <p class="lead">And an even wittier subheading.</p>
    </div>
    <div class="color1 shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
  </div>
  <div class="color1 mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden tipoletra">
    <div class="my-3 py-3">
      <h2 class="display-5">Another headline</h2>
      <p class="lead">And an even wittier subheading.</p>
    </div>
    <div class="color2 shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
  </div>
</div>

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
    </body>
</html>
