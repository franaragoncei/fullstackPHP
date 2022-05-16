<?php
    if(isset($_POST['btnEnviar'])){
        $error_nombre = ($_POST['nombre'] == '');
        
        $error_comentarios = ($_POST['comentarios'] == '');

        $error = $error_nombre || $error_comentarios;

        if(!$error){
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
                    <p>Nombre: <?php echo $_POST['nombre']; ?></p>
                    <p>Comentarios: <?php echo $_POST['comentarios']; ?></p>
                </body>
                </html>

            <?php
        }else{
            ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            margin: 1rem;
        }
    </style>
</head>
<body>
    <h1>ESTA ES MI SUPER PÁGINA 2</h1>
    <form action="recogida.php" method="post">
        <div>
            <label for="nombre">Nombre*: </label>
            <input value="<?php if(!$error_nombre){ echo $_POST['nombre'];} ?>" type="text" name='nombre' id="nombre">
            <?php
                if($error_nombre){
                    echo '<span>*CAMPO OBLIGATORIO*</span>';
                }
            ?>
        </div>
        <div>
            <label for="nacido">Nacido en: </label>
            <select name="nacido" id="nacido">
                <option value="Malaga">Málaga</option>
                <option value="Sevilla">Sevilla</option>
            </select>
            </div>
            <div>
                <span>Aficiones: </span>
                <label for="deportes">Deportes</label>
                <input value='Deportes' type="checkbox" name="aficiones[]" id="deportes">
                <label for="lectura">Lectura</label>
                <input value='Lectura' type="checkbox" name="aficiones[]" id="lectura">
                <label for="otros">Otros</label>
                <input value='Otros' type="checkbox" name="aficiones[]" id="otros">
            </div>
            <div>
                <label for="comentarios">Comentarios*: </label>
                <textarea name="comentarios" id="comentarios" cols="30" rows="10"><?php if(!$error_comentarios){ echo $_POST['comentarios'];} ?></textarea>
                <?php
                if($error_comentarios){
                    echo '<span>*CAMPO OBLIGATORIO*</span>';
                }
            ?>
            </div>
    </div>
    <button type='submit' name='btnEnviar'>Enviar</button>
    </form>
</body>
</html>
            <?php
        }
    }else{
        header('Location: index.php');
    }

?>