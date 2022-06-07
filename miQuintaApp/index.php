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
    </style>
</head>

<body>
    <h1>CEISBOOK</h1>
    <?php
    include 'db/connection.php';
    require 'pages/registrar.php';
    ?>
    <form method='POST' action="pages/login.php">
        <input placeholder="Usuario" type="text" name="usuario" required>
        <input placeholder="Contraseña" type="password" name="pass" required>
        <button name="acceder">ACCEDER</button>
    </form>
    <a href="pages/registrarseForm.php">REGISTRATE</a>
</body>

</html>