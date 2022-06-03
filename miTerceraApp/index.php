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
    <h1>MIS PEDIDOS</h1>
    <?php
    try {
        require 'db/connection.php';
        // echo '<p>Conexion satisfactoria</p>';
        include 'pages/borrar.php';
        include 'pages/insertar.php';
        include 'pages/editar.php';
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
        echo '<th>EDITAR PEDIDO</th>';
        echo '<th>EDITAR CLIENTE</th>';
        echo '</tr>';
        foreach ($datos as $dato) {
            echo '<tr>';
            echo '<td>' . $dato['nombre'] . '</td>';
            echo '<td>' . $dato['id'] . '</td>';
            echo '<td>' . $dato['cantidad'] . '</td>';
            echo '<td>' . $dato['fecha'] . '</td>';
            echo '<td>' . $dato['nombreComercial'] . '</td>';
            echo '<td><form action="index.php" method="post"><button value="' . $dato['id'] . '" name="btnBorrar">BORRAR</button></form></td>';
            echo '<td><form action="pages/editarForm.php" method="post">
            <button name="editarPedido" value="' . $dato['id'] . '">EDITAR</button>
            <input class="oculto" type="text" value="' . $dato['cantidad'] . '" name="cantidadPedido">
            <input class="oculto" type="text" value="' . $dato['fecha'] . '" name="fechaPedido">
            <input class="oculto" type="text" value="' . $dato['idCliente'] . '" name="idClientePedido">
            <input class="oculto" type="text" value="' . $dato['idComercial'] . '" name="idComercialPedido">
        </form></td>';
            echo '<td><form action="pages/editarForm2.php" method="post">
        <button name="editarClienteID" value="' . $dato['idCliente'] . '">EDITAR CLIENTE</button>
        <input class="oculto" type="text" name="editarNombre" value="' . $dato['nombre'] . '">
        <input class="oculto" type="text" name="editarApellido1" value="' . $dato['apellido1'] . '">
        <input class="oculto" type="text" name="editarApellido2" value="' . $dato['apellido2'] . '">
        <input class="oculto" type="text" name="editarCiudad" value="' . $dato['ciudad'] . '">
        <input class="oculto" type="text" name="editarCategoria" value="' . $dato['categoria'] . '">
    </form></td>';
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