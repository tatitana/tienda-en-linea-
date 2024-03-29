<?php
session_start();

if (isset($_POST['accion'])) {
    $indice = $_POST['indice'];

    if ($_POST['accion'] == 'eliminar') {
        unset($_SESSION['carrito'][$indice]);
    } elseif ($_POST['accion'] == 'aumentar') {
        $_SESSION['carrito'][$indice]['cantidad']++;
    } elseif ($_POST['accion'] == 'disminuir') {
        if ($_SESSION['carrito'][$indice]['cantidad'] > 1) {
            $_SESSION['carrito'][$indice]['cantidad']--;
        } else {
            unset($_SESSION['carrito'][$indice]);
        }
    }
}

header('Location: ver_carrito.php');
?>
