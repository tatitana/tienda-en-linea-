<nav class="site-header sticky-top py-1">
  <div class="container d-flex flex-column flex-md-row justify-content-between">
    <a class="py-2" href="index.php" aria-label="Product">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
    </a>
    <a class="py-2 d-none d-md-inline-block" href="formulario.php">Iniciar sesión</a>
    
    <!-- Botón "Tu Tienda" con menú desplegable -->
    <div class="dropdown" onmouseover="showDropdown()" onmouseout="hideDropdown()">
      <button class="py-2 d-none d-md-inline-block dropbtn">Tu Tienda</button>
      <div class="dropdown-content" id="tuTiendaDropdown">
        <a href="#">Opción 1</a>
        <a href="#">Opción 2</a>
        <a href="#">Opción 3</a>
      </div>
    </div>
    
    <a class="py-2 d-none d-md-inline-block" href="menu.php">Administrador</a>
    <a class="py-2 d-none d-md-inline-block" href="index_carrito.php">Ayuda</a>
    <a class="py-2 d-none d-md-inline-block" href="#">Contactanos</a>
    <a class="py-2 d-none d-md-inline-block" href="ver_carrito.php"><img style="width: 30px; height: 30px;"  src="img/carrito.jpeg"></a>
  
    <a class="py-2 d-none d-md-inline-block" href="#"></a>
  </div>
</nav>

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
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }

  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  .dropdown-content a:hover {
    background-color: #f1f1f1;
  }

  .dropdown:hover .dropdown-content {
    display: block;
  }
</style>

<!-- JavaScript -->
<script>
  function showDropdown() {
    document.getElementById("tuTiendaDropdown").style.display = "block";
  }

  function hideDropdown() {
    document.getElementById("tuTiendaDropdown").style.display = "none";
  }
</script>
