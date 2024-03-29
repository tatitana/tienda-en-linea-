<?php
session_start();

// Inicializar el carrito si no está creado
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();
}

// Función para calcular el total del carrito
function calcularTotal($productos) {
    $total = 0;
    foreach ($productos as $producto) {
        $total += $producto['precio'] * $producto['cantidad'];
    }
    return $total;
}

// Agregar producto al carrito
if (isset($_POST['agregar'])) {
    $producto = array(
        'nombre' => $_POST['producto'],
        'precio' => $_POST['precio'],
        'cantidad' => 1
    );
    array_push($_SESSION['carrito'], $producto);
    echo "<p>Producto agregado al carrito.</p>";
}

// Eliminar producto del carrito
if (isset($_GET['eliminar'])) {
    $indice = $_GET['eliminar'];
    unset($_SESSION['carrito'][$indice]);
    echo "<p>Producto eliminado del carrito.</p>";
}

// Actualizar cantidad de productos en el carrito
if (isset($_POST['actualizar'])) {
    foreach ($_POST['cantidad'] as $indice => $cantidad) {
        $_SESSION['carrito'][$indice]['cantidad'] = $cantidad;
    }
    echo "<p>Cantidad de productos actualizada.</p>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
</head>
<body>
    <h1>Carrito de Compras</h1>
    
    <h2>Productos Disponibles</h2>
    <form action="validar.php" method="get">
        <select name="producto">
            <option value="Producto 1">Producto 1</option>
            <option value="Producto 2">Producto 2</option>
            <option value="Producto 3">Producto 3</option>
        </select>
        <input type="number" name="precio" placeholder="Precio">
        <button type="submit" name="agregar">Agregar al Carrito</button>
    </form>
    
    <h2>Carrito de Compras</h2>
    <?php if (!empty($_SESSION['carrito'])) : ?>
        <form action="validar.php" method="get">
            <table>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                    <th>Eliminar</th>
                </tr>
                <?php $total = 0; ?>
                <?php foreach ($_SESSION['carrito'] as $indice => $producto) : ?>
                    <tr>
                        <td><?php echo $producto['nombre']; ?></td>
                        <td><?php echo $producto['precio']; ?></td>
                        <td><input type="number" name="cantidad[<?php echo $indice; ?>]" value="<?php echo $producto['cantidad']; ?>"></td>
                        <td><?php echo $producto['precio'] * $producto['cantidad']; ?></td>
                        <td><a href="index.php?eliminar=<?php echo $indice; ?>">Eliminar</a></td>
                    </tr>
                    <?php $total += $producto['precio'] * $producto['cantidad']; ?>
                <?php endforeach; ?>
            </table>
            <button type="submit" name="actualizar">Actualizar Carrito</button>
        </form>
        <p>Total: <?php echo $total; ?></p>
    <?php else : ?>
        <p>El carrito está vacío.</p>
    <?php endif; ?>
</body>
</html>
