<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            color: blue;
        }
    </style>
</head>
<body>
    <h1>EJEMPLO</h1>
    <?php
        //ESTO ES UN COMENTARIO DE UNA LINEA
        /*
        COMENTARIOS 
        DE 
        VARIAS 
        LINEAS
        */
        $nombre;
        $numero1 = 2;
        $numero2 = '5';
        $resultado = $numero1 + $numero2;
        $apellido = 'Aragón';
        $nombre = 'Victor';
        $nombreCompleto = $nombre . ' ' . $apellido;

        echo '<p>Hola Mundo, me llamo '. $nombreCompleto.' en PHP</p>';
        echo $resultado;

        if($nombre == 'Fran'){
            echo '<p>Si, lo es</p>';
        }else if($apellido == 'Aragón'){
            echo '<p>No, no lo es</p>';
        }

        switch($nombre){
            case 'Fran':
                echo '<p>El nombre es '.$nombre.'</p>';
            break;
            case 'Alberto':
                echo '<p>El nombre es '.$nombre.'</p>';
            break;
            default:
                echo '<p>No se cual es el nombre</p>';
        }

    ?>
    <p>Hola Mundo en HTML</p>
</body>
</html>