<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div,
        button,
        a {
            margin: .5rem;
        }

        #editarID {
            display: none;
        }
    </style>
</head>

<body>
    <h1>EDITANDO PRODUCTO <?php echo $_POST['editarID']; ?></h1>
    <form action="../index.php" method="post">
        <input id='editarID' name='editarID' type="text" value="<?php echo $_POST['editarID']; ?>">
        <div>
            <input required value="<?php echo $_POST['editarNombre']; ?>" type="text" name="nombre" placeholder="<?php echo $_POST['editarNombre']; ?>">
        </div>
        <div>
            <input required value="<?php echo $_POST['editarPrecio']; ?>" type="text" name="precio" placeholder="<?php echo $_POST['editarPrecio']; ?>€">
        </div>
        <div>
            <select name="nombreFabricante" id="nombreFabricante">
                <?php
                require_once '../db/connection.php';
                include 'select.php';
                foreach ($fabricantes as $fabricante) {
                    if ($fabricante['codigo'] == $_POST['editarCodigoFabricante']) {
                        echo '<option selected value="' . $fabricante['codigo'] . '">' . $fabricante['nombre'] . '</option>';
                    } else {
                        echo '<option value="' . $fabricante['codigo'] . '">' . $fabricante['nombre'] . '</option>';
                    }
                }
                ?>
            </select>
        </div>
        <button name='editar' id="editar">EDITAR</button>
    </form>
    <a href="../index.php">Volver al HOME</a>
</body>

</html>