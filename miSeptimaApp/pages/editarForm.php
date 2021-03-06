<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background: linear-gradient(lightblue, lightpink);
            height: 100vh;
        }

        body,
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            font-family: Arial, Helvetica, sans-serif;
        }

        input,
        button {
            margin: .5rem;
        }

        input {
            background-color: transparent;
            border: 0;
            border-bottom: 1px solid white;
        }

        input:focus {
            outline: none;
        }

        input::placeholder {
            color: white;
            letter-spacing: .2rem;
        }
    </style>
</head>

<body>
    <h1>CEISBOOK - EDITAR</h1>
    <form action="home.php" method="post">
        <?php
        include '../db/connection.php';
        echo '<input value="'.$_SESSION['nombre'].'" required type="text" placeholder="nombre" name="nombre">';
        echo '<input value="'.$_SESSION['apellido'].'" required type="text" placeholder="apellido" name="apellido">';
        echo '<input value="'.$_SESSION['usuario'].'" required type="text" placeholder="usuario" name="usuario">';
        echo '<button name="editar">EDITAR</button>';
        ?>
    </form>
    <?php
    if($_SESSION['errorEditarUsuario']){
        echo '<p>El usuario ya existe.</p>';
    }
    $_SESSION['errorEditarUsuario'] = false;
    ?>
    <a href="../index.php">Volver al HOME</a>
</body>

</html>