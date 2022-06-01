<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div, button, a {
            margin: .5rem;
        }
    </style>
</head>

<body>
    <h1>INSERTE PRODUCTOS</h1>
    <form action="../index.php" method="post">
        <div>
            <input type="text" name="nombre" placeholder="Introduzca nombre Producto">
        </div>
        <div>
            <input type="text" name="precio" placeholder="Introduzca precio Producto">
        </div>
        <div>
            <select name="nombreFabricante" id="nombreFabricante">
                <?php
                require_once '../db/connection.php';
                include 'select.php';
                foreach ($fabricantes as $fabricante) {
                    echo '<option value="' . $fabricante['codigo'] . '">' . $fabricante['nombre'] . '</option>';
                }
                ?>
            </select>
        </div>
        <button name='insertar' id="insertar">INSERTAR</button>
    </form>
    <a href="../index.php">Volver al HOME</a>
</body>

</html>