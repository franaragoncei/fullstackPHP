<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include '../db/pdoconfig.php';
    if (isset($_SESSION['nombreUsuario'])) {
        echo '<h1>Bienvenido de nuevo ' . $_SESSION['nombreUsuario'] . ' ' . $_SESSION['apellidoUsuario'] . '</h1>';
        echo '<a href="cerrar_sesion.php">Cerrar Sesión</a>';
    }else{
        header('Location: ../index.php');
    }
    ?>
</body>

</html>