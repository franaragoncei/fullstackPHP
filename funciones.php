<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FUNCIONES</h1>
    <?php
    function nombreFuncion(){
        echo '<p>Hola soy una funcion</p>';
    }

    nombreFuncion();

    function nombreFuncion2($parametro1, $parametro2){
        echo '<p>Parametro 1: '.$parametro1.' | Parametro 2: '.$parametro2.'</p>';
    }

    nombreFuncion2('Manzana', 'Platano');
    ?>
</body>
</html>