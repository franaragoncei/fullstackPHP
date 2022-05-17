<?php
if (isset($_POST['btnEnviar'])) {
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
        <h1>RECOGIENDO DATOS</h1>
        <?php
        $palabra1 = $_POST['palabra1'];
        $palabra2 = $_POST['palabra2'];
        if (
            $palabra1[strlen($palabra1) - 1] == $palabra2[strlen($palabra2) - 1] &&
            $palabra1[strlen($palabra1) - 2] == $palabra2[strlen($palabra2) - 2]
        ) {
            echo '<p>La palabra <strong>' . $palabra1 . '</strong> y la palabra <strong>' . $palabra2 . '</strong> riman</p>';
        }else if($palabra1[strlen($palabra1) - 1] == $palabra2[strlen($palabra2) - 1]){
            echo '<p>La palabra <strong>' . $palabra1 . '</strong> y la palabra <strong>' . $palabra2 . '</strong> riman sólo un poco</p>';
        }else{
            echo '<p>La palabra <strong>' . $palabra1 . '</strong> y la palabra <strong>' . $palabra2 . '</strong> no riman</p>';
        }

        ?>
    </body>

    </html>

<?php
} else {
    header('Location: index.php');
}
