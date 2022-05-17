<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div, button{
            margin: 1rem;
        }
    </style>
</head>
<body>
    <h1>INICIAR SESIÓN</h1>
    <form method='post' action="recogida.php">
        <div>
            <input type="text" name='usuario' placeholder='Introduzca el usuario'>
        </div>
        <div>
            <input type="password" name='password' placeholder='Introduzca la contraseña'>
        </div>
        <button type='submit' name='btnEnviar'>Iniciar Sesión</button>
    </form>
</body>
</html>