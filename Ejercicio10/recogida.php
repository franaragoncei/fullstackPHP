<?php
    if(isset($_POST['btnEnviar'])){
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
            <h1>RECOGIDA DE DATOS</h1>
            <p>Nombre: <?php echo $_POST['nombre'];?></p>
            <p>Apellido: <?php echo $_POST['apellido'];?></p>
            <p>Contraseña: <?php echo md5($_POST['password']);?></p>
            <p>Email: <?php echo $_POST['email'];?></p>
            <p>Sexo: <?php echo $_POST['sexo'];?></p>
            <p>Nivel de Estudios: <?php echo $_POST['estudios'];?></p>
            <p>Temas: </p>
                <?php
                    if(isset($_POST['temas'])){
                        echo '<ul>';
                        for($i = 0; $i < count($_POST['temas']); $i++){
                            echo '<li>'.$_POST['temas'][$i].'</li>';
                        }
                        echo '</ul>';
                    }else{
                        echo '<p>No hay temas seleccionados</p>';
                    }
                ?>
            <p>Día Seleccionado: <?php echo $_POST['dias'] ?></p>
            <p>Comentario: <?php echo $_POST['comentario'] ?></p>
        </body>
        </html>
        <?php
    }else{
        header('Location: index.php');
    }

?>

