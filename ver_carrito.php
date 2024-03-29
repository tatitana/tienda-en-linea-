<?php
session_start();

$total_precio = 0;

echo "<h2>Carrito de Compras</h2>";

if (empty($_SESSION['carrito'])) {
    echo "<p>No hay productos en el carrito.</p>";
} else {
    echo "<table border='1'>";
    echo "<tr><th>Producto</th><th>Precio</th><th>Cantidad</th><th>Acciones</th></tr>";

    foreach ($_SESSION['carrito'] as $key => $producto) {
        echo "<tr>";
        echo "<td>{$producto['nombre']}</td>";
        echo "<td>{$producto['precio']}</td>";
        // Verificar si la clave 'cantidad' está definida en el producto
        if (isset($producto['cantidad'])) {
            echo "<td>{$producto['cantidad']}</td>";
        } else {
            // Si 'cantidad' no está definida, establecer un valor predeterminado o mostrar un mensaje de error
            echo "<td>No disponible</td>";
        }
        echo "<td>
                <form action='modificar_carrito.php' method='post'>
                    <input type='hidden' name='indice' value='{$key}'>
                    <button type='submit' name='accion' value='eliminar'>Eliminar</button>
                    <button type='submit' name='accion' value='aumentar'>+</button>
                    <button type='submit' name='accion' value='disminuir'>-</button>
                </form>
              </td>";
        echo "</tr>";
        // Calcular el total del precio
        $total_precio += $producto['precio'] * (isset($producto['cantidad']) ? $producto['cantidad'] : 1);
    }

    echo "</table>";
    echo "<p>Total de Productos: " . count($_SESSION['carrito']) . "</p>";
    echo "<p>Total Precio: $" . $total_precio . "</p>";
    echo "<button onclick='vaciarCarrito()'>Vaciar</button>";
    echo "<button onclick='cerrarVentana()'>Cerrar</button>";
    echo "<button onclick='continuarPedido()'>Continuar Pedido</button>";
}

echo "<script>
    function vaciarCarrito() {
        if (confirm('¿Estás seguro que deseas vaciar el carrito?')) {
            window.location.href = 'vaciar_carrito.php';
        }
    }
    function cerrarVentana() {
        window.close();
    }
    function continuarPedido() {
        window.location.href = 'resumen_pedido.php';
    }
</script>";
?>
