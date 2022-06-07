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
            color: white;
            font-weight: 100;
            letter-spacing: .5rem;
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

        span {
            
        }
    </style>
</head>

<body>
    <h1>CEI<span>S</span>BOOK</h1>
    <?php
    require 'db/connection.php';
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