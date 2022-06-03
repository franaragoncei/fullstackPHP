<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .oculto {
            display: none;
        }
    </style>
</head>

<body>
    <h1>EDITAR PEDIDO NÚMERO: <?php echo $_POST['editarPedido'] ?></h1>
    <form action="../index.php" method="post">
        <input class="oculto" type="text" name='idPedido' value="<?php echo $_POST['editarPedido'] ?>">
        <div>
            <input name="cantidad" type="text" value="<?php echo $_POST['cantidadPedido']; ?>" placeholder="<?php echo $_POST['cantidadPedido']; ?>€">
        </div>
        <div>
            <input name="fecha" type="date" value="<?php echo $_POST['fechaPedido']; ?>">
        </div>
        <p>Elija el cliente</p>
        <select name="clienteElegido">
            <?php
            require '../db/connection.php';
            include 'select.php';
            foreach ($clientes as $cliente) {
                if ($cliente['id'] == $_POST['idClientePedido']) {
                    echo '<option selected value="' . $cliente['id'] . '">' . $cliente['nombre'] . ' ' . $cliente['apellido1'] . '</option>';
                } else {
                    echo '<option value="' . $cliente['id'] . '">' . $cliente['nombre'] . ' ' . $cliente['apellido1'] . '</option>';
                }
            }
            ?>
        </select>
        <p>Elija el comercial</p>
        <select name="comercialElegido">
            <?php
            require '../db/connection.php';
            include 'select.php';
            foreach ($comerciales as $comercial) {
                if ($comercial['id'] == $_POST['idComercialPedido']) {
                    echo '<option selected value="' . $comercial['id'] . '">' . $comercial['nombre'] . ' ' . $comercial['apellido1'] . '</option>';
                } else {
                    echo '<option value="' . $comercial['id'] . '">' . $comercial['nombre'] . ' ' . $comercial['apellido1'] . '</option>';
                }
            }
            ?>
        </select>
        <div>
            <button name="btnEditar">EDITAR</button>
        </div>
    </form>
    <a href="../index.php">Ir al HOME</a>
</body>

</html>