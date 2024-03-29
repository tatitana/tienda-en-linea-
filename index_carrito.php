<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
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
</head>
<body>
    <h2>Productos:</h2>
    <p>Producto 1 - $10 <button class="agregar" data-producto="producto1">Agregar al Carrito</button></p>
    <p>Producto 2 - $20 <button class="agregar" data-producto="producto2">Agregar al Carrito</button></p>
    <p>Producto 3 - $30 <button class="agregar" data-producto="producto3">Agregar al Carrito</button></p>
    <br>
    <a href="ver_carrito.php">Ver Carrito</a>
</body>
</html>
