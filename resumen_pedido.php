<?php
session_start();

echo "<h2>Resumen del Pedido</h2>";

if (empty($_SESSION['carrito'])) {
    echo "<p>No hay productos en el carrito.</p>";
} else {
    echo "<table border='1'>";
    echo "<tr><th>Número</th><th>Imagen</th><th>Nombre</th><th>Cantidad</th><th>Precio Unitario</th><th>Total por Producto</th></tr>";

    $numero_producto = 1;
    foreach ($_SESSION['carrito'] as $producto) {
        echo "<tr>";
        echo "<td>{$numero_producto}</td>";
        echo "<td><img src='imagen_producto.jpg' alt='Producto' width='50' height='50'></td>";
        echo "<td>{$producto['nombre']}</td>";
        echo "<td>1</td>"; // Suponiendo que siempre se agrega una unidad de cada producto
        echo "<td>{$producto['precio']}</td>";
        echo "<td>{$producto['precio']}</td>";
        echo "</tr>";

        $numero_producto++;
    }

    echo "</table>";
    echo "<button onclick='continuarPedido()'>Continuar Pedido</button>";
}

echo "<script>
    function continuarPedido() {
        alert('Pedido realizado con éxito');
        window.location.href = 'index.php';
    }
</script>";
?>
