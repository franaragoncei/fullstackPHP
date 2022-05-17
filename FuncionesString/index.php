<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>FUNCIONES STRING</h1>
    <?php
    $miCadena = 'Victor, Laura, Alberto, Mónica, Eduardo, Irene, Ale';
    echo '<p>CONVIERTE STRING A ARRAY</p>';
    $arrayClase = explode(', ', $miCadena);
    var_dump($arrayClase);
    echo '<p>CONVIERTE ARRAY A STRING</p>';
    $miNuevaCadena = implode(', ', $arrayClase);
    echo '<p>' . $miNuevaCadena . '</p>';
    echo '<p>CONVIERTE STRING A VARIABLE</p>';
    $miString = 'nombre=Fran&apellido=Aragon';
    parse_str($miString, $test);
    echo $test['apellido'];
    echo '<p>BUSCA SI UN STRING CONTIENE UN SUBSTRING</p>';
    if(str_contains($miCadena, 'fran')){
        echo '<p>Mi cadena contiene a Alberto</p>';
    }else{
        echo '<p>Mi cadena no contiene a Alberto</p>';
    }
    echo '<p>CONVERTIR TEXTO A MINUSCULA</p>';
    $miCadenaMinuscula = strtolower($miCadena);
    echo $miCadenaMinuscula;
    echo '<p>CONVERTIR TEXTO A MAYÚSCULAS</p>';
    $miCadenaMayuscula = strtoupper($miCadena);
    echo $miCadenaMayuscula;
    echo '<p>DEVUELVE LA LONGITUD DE UNA CADENA</p>';
    $abecedario = 'abcdef';
    echo '<p>La variable tiene ' . strlen($abecedario) . ' letras</p>';
    echo '<p>SUSTITUYE UN STRING DE UNA CADENA POR OTRO STRING</p>';
    $miCadenaModificada = str_replace('Victor', 'Fran', $miCadena);
    echo $miCadenaModificada;
    echo '<p>CONVIERTE STRING EN ARRAY</p>';
    $miNuevoArray = str_split($miCadenaModificada);
    var_dump($miNuevoArray);
    echo '<p>COMPRUEBA SI ES UN NÚMERO</p>';
    // SI NO ES UN NÚMERO, NO SALE NADA. SI ES UN NÚMERO, MUESTRA UN 1
    echo '<p>Es un número: '.is_numeric(10).'</p>';
    echo '<p>ACCEDER A LA ÚLTIMA LETRA DE UNA PALABRA</p>';
    echo $abecedario[strlen($abecedario)-1];
    ?>
</body>

</html>