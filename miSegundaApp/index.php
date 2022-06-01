<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        tr,
        td,
        th {
            border: 1px solid black;
            border-collapse: collapse;
            padding: .3rem;
        }

        .oculto {
            display: none;
        }
    </style>
</head>

<body>
    <h1>MI TIENDA</h1>
    <?php
    try {
        require_once 'db/connection.php';
        // echo '<p>Conectado satisfactoriamente a la base de datos ' . $dbname . ' en el host ' . $host . '</p>';
        include 'pages/insertar.php';
        include 'pages/editar.php';
        include 'pages/borrar.php';
        include 'pages/select.php';
        // foreach ($productos as $producto) {
        //     if ($producto['nombre']) {
        //         echo '<p>Producto Nombre: ' . $producto['nombre'] . ' | Producto precio: ' . $producto['precio'] . '€ | Fabricante: ' . $producto['nombreFabricante'] . '</p>';
        //     }
        // }
        echo '<table>';
        echo '<tr>';
        echo '<th>Nombre Producto</th>';
        echo '<th>Precio Producto</th>';
        echo '<th>Nombre Fabricante</th>';
        echo '<th>EDITAR</th>';
        echo '<th>BORRAR</th>';
        echo '</tr>';
        foreach ($productos as $producto) {
            if ($producto['nombre']) {
                echo '<tr>';
                echo '<td>' . $producto['nombre'] . '</td>';
                echo '<td>' . $producto['precio'] . '€</td>';
                echo '<td>' . $producto['nombreFabricante'] . '</td>';
                echo '<td><form action="pages/editarForm.php" method="POST"><button value="' . $producto['codigoProducto'] . '" name="editarID">EDITAR</button><input class="oculto" name="editarNombre" value="' . $producto['nombre'] . '">
                <input class="oculto" name="editarPrecio" value="' . $producto['precio'] . '">
                <input class="oculto" name="editarCodigoFabricante" value="' . $producto['codigo'] . '"></form></td>';
                echo '<td><form action="index.php" method="POST"><button value="' . $producto['codigoProducto'] . '" name="borrarID" id="borrarID">BORRAR</button></form></td>';
                echo '</tr>';
            }
        }
        echo '</table>';
        echo '<div><a href="pages/insertarForm.php">Insertar Productos</a></div>';
    } catch (PDOException $error) {
        die('No se ha podido acceder a la base de datos ' . $dbname . ':' . $error->getMessage());
    }
    ?>
</body>

</html>