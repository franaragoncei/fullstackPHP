<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>INSERTAR PEDIDOS</h1>
    <form action="../index.php" method="post">
        <div>
            <input name="cantidad" type="text" placeholder="cantidad">
        </div>
        <div>
            <input name="fecha" type="date" placeholder="fecha">
        </div>
        <p>Elija el cliente</p>
        <select name="clienteElegido">
            <?php
            require '../db/connection.php';
            include 'select.php';
            foreach ($clientes as $cliente) {
                echo '<option value="' . $cliente['id'] . '">' . $cliente['nombre'] . ' ' . $cliente['apellido1'] . '</option>';
            }
            ?>
        </select>
        <p>Elija el comercial</p>
        <select name="comercialElegido">
            <?php
            require '../db/connection.php';
            include 'select.php';
            foreach ($comerciales as $comercial) {
                echo '<option value="' . $comercial['id'] . '">' . $comercial['nombre'] . ' ' . $comercial['apellido1'] . '</option>';
            }
            ?>
        </select>
        <div>
            <button name="btnAdd">AÑADIR</button>
        </div>
    </form>
    <a href="../index.php">Ir al HOME</a>
</body>

</html>