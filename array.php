<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ARRAYS</h1>
    <?php
    $arrayConClave = [
       'primerIndice' => 'Hola Soy el primero',
       'segundoIndice' => 'Hola Soy el segundo',
       'terceroIndice' => 'Hola Soy el tercero'
    ];

    echo '<p>'.$arrayConClave['terceroIndice'].'</p>';

    $arraySinClave = array('Manzana', 'Pera', 'Fresa');

    $arraySinClave[] = 'Pomelo';

    $arrayConClave[] = 'Mochila';
    $arrayConClave[] = 'Pomelo';
    $arrayConClave['otroIndice'] = 'Fran';

    var_dump($arrayConClave);

    echo '<p>'.$arraySinClave[1].'</p>';

    unset($arraySinClave[1]);
    var_dump($arraySinClave);

    echo '<p>Posicion 0: '.$arraySinClave[0].'</p>';

    $arraySinClave[1] = 'Platano';

    var_dump($arraySinClave);

    echo '<p>Posicion 0: '.$arraySinClave[0].'</p>';
    ?>
</body>
</html>