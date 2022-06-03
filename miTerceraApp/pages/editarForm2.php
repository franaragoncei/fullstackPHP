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
    <h1>EDITAR CLIENTE: <?php echo $_POST['editarNombre'] . ' '. $_POST['editarApellido1'] ?></h1>
    <form action="../index.php" method="post">
        <input class="oculto" type="text" name='idCliente' value="<?php echo $_POST['editarClienteID'] ?>">
        <div>
            <input name="nombre" type="text" value="<?php echo $_POST['editarNombre']; ?>" placeholder="<?php echo $_POST['editarNombre']; ?>">
        </div>
        <div>
            <input name="apellido1" type="text" value="<?php echo $_POST['editarApellido1']; ?>" placeholder="<?php echo $_POST['editarApellido1']; ?>">
        </div>
        <div>
            <input name="apellido2" type="text" value="<?php echo $_POST['editarApellido2']; ?>" placeholder="<?php echo $_POST['editarApellido2']; ?>">
        </div>
        <div>
            <input name="ciudad" type="text" value="<?php echo $_POST['editarCiudad']; ?>" placeholder="<?php echo $_POST['editarCiudad']; ?>">
        </div>
        <div>
            <input name="categoria" type="text" value="<?php echo $_POST['editarCategoria']; ?>" placeholder="<?php echo $_POST['editarCategoria']; ?>">
        </div>
        <div>
            <button name="editarCliente">EDITAR</button>
        </div>
    </form>
    <a href="../index.php">Ir al HOME</a>
</body>

</html>