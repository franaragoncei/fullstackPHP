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
    </style>
</head>

<body>
    <h1>MIS PEDIDOS</h1>
    <?php
    try {
        require 'db/connection.php';
        // echo '<p>Conexion satisfactoria</p>';
        include 'pages/borrar.php';
        include 'pages/insertar.php';
        include 'pages/select.php';
        // TABLA DONDE SE MUESTRAN LOS RESULTADOS
        echo '<table>';
        echo '<tr>';
        echo '<th>NOMBRE CLIENTE</th>';
        echo '<th>PEDIDO</th>';
        echo '<th>CANTIDAD</th>';
        echo '<th>FECHA</th>';
        echo '<th>NOMBRE COMERCIAL</th>';
        echo '<th>BORRAR</th>';
        echo '</tr>';
        foreach ($datos as $dato) {
            echo '<tr>';
            echo '<td>' . $dato['nombre'] . '</td>';
            echo '<td>' . $dato['id'] . '</td>';
            echo '<td>' . $dato['cantidad'] . '</td>';
            echo '<td>' . $dato['fecha'] . '</td>';
            echo '<td>' . $dato['nombreComercial'] . '</td>';
            echo '<td><form action="index.php" method="post"><button value="' . $dato['id'] . '" name="btnBorrar">BORRAR</button></form></td>';
            echo '</tr>';
        }
        echo '</table>';
    ?>
        <a href="pages/insertarForm.php">AÑADIR PEDIDO</a>

    <?php
    } catch (PDOException $error) {
        die('Algo ha fallado: ' . $error);
    }
    ?>
</body>

</html>