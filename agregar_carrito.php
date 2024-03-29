<?php
session_start();

if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();
}

if (isset($_POST['producto'])) {
    $producto = $_POST['producto'];
    
    // Lógica para agregar el producto al carrito
    switch ($producto) {
        case 'producto1':
            array_push($_SESSION['carrito'], array('nombre' => 'Producto 1', 'precio' => 10));
            break;
        case 'producto2':
            array_push($_SESSION['carrito'], array('nombre' => 'Producto 2', 'precio' => 20));
            break;
        case 'producto3':
            array_push($_SESSION['carrito'], array('nombre' => 'Producto 3', 'precio' => 30));
            break;
        default:
            // Manejar caso por defecto
            break;
    }
}
?>
