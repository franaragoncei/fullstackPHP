<?php
if (isset($_POST['btnEnviar'])) {
    $error_usuario = ($_POST['usuario'] == '');
    $error_password = ($_POST['password'] == '');
    $error = $error_usuario || $error_password;

    if (!$error) {
?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>

        <body>
            <h1>Sesión Iniciada</h1>
            <p>Bienvenido de nuevo, <?php echo $_POST['usuario']; ?></p>
        </body>

        </html>

    <?php
    } else {
    ?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <style>
                div,
                button {
                    margin: 1rem;
                }

                span{
                    color:red;
                }
            </style>
        </head>

        <body>
            <h1>INICIAR SESIÓN</h1>
            <form method='post' action="recogida.php">
                <div>
                    <input value="<?php if(!$error_usuario) echo $_POST['usuario']; ?>" type="text" name='usuario' placeholder='Introduzca el usuario'>
                    <?php
                        if($error_usuario){
                            echo '<span>*CAMPO OBLIGATORIO*</span>';
                        }
                    ?>
                </div>
                <div>
                    <input value="<?php if(!$error_password){ echo $_POST['password'];} ?>" type="password" name='password' placeholder='Introduzca la contraseña'>
                    <?php
                        if($error_password){
                            echo '<span>*CAMPO OBLIGATORIO*</span>';
                        }
                    ?>
                </div>
                <button type='submit' name='btnEnviar'>Iniciar Sesión</button>
            </form>
        </body>

        </html>
<?php
    }
} else {
    header('Location: index.php');
}
?>