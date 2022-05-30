<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>EXPRESIONES REGULARES</h1>
    <?php
        $abecedario = 'abcdefghijklmnÑopqrstuvwxyz';
        // echo preg_match('#abc#', $abecedario);

        $direccion = ' Cuéllar Calle';

        if(preg_match('/^Calle/', $direccion)){
            echo 'Es una calle';
        }else{
            echo 'No es una calle';
        }

        $parrafo = 'Hola, soy un párrafo';

        if(preg_match('/párrafo$/', $parrafo)){
            echo '<p>Termino en párrafo</p>';
        }else{
            echo '<p>No termino en párrafo</p>';
        }
        
        $texto = 'Hola este es un ejemplo';

        if(preg_match('/^Hola|ejemplo$/', $texto)){
            echo '<p>Si</p>';
        }else{
            echo '<p>No</p>';
        }
    ?>
</body>
</html>