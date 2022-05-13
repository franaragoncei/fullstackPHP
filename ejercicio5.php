<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $array = array('Manzana', 'Pera', 'Fresa');

    for($i = 0; $i < count($array); $i++){
        echo '<p>'.$array[$i].'</p>';
    }

    ?>
</body>
</html>