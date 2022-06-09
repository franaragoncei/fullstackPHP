<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include '../db/connection.php';
    if ($_SESSION['nombreUsuario']) {
        include 'editar.php';
        echo '<h1>Bienvenido, ' . $_SESSION['nombreUsuario'] . '</h1>';
        echo '<button><a href="cerrar_sesion.php">Cerrar Sesión</a></button>';
        echo '<button><a href="editarForm.php">Editar Perfil</a></button>';
        echo '<button id="verPeliculas">Ver Peliculas</button>';
        include 'misPeliculas.php';
    } else {
        header('Location: ../index.php');
    }

    ?>
</body>

</html>