<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nombre = 'Fran';

        function miFuncion($param1, $param2){
            echo '<p>Parametro 1: '.$param1.' | Parametro 2: '.$param2.'</p>';
        }

        miFuncion($nombre, 'Adios');
    ?>
</body>
</html>