<?php
if (isset($_POST['btnEnviar'])) {
    $error = ($_POST['palabra'] == '');
    $error_longitud = (strlen($_POST['palabra']) < 3);
    $error_total = $error || $error_longitud;
    if (!$error_total) {
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>

        <body>
            <h1>RECOGIENDO DATOS</h1>
            <?php
            echo '<h2>MÉTODO 1</h2>';
            $palabra = $_POST['palabra'];
            $longitudPalabra = strlen($palabra);
            $palabraInvertida = '';

            for($i = $longitudPalabra-1; $i >= 0; $i--){
                $palabraInvertida .= $palabra[$i];
            }

            if($palabra == $palabraInvertida){
                echo '<p>La palabra <strong>'.$palabra.'</strong> es un palíndromo.</p>';
            }else{
                echo '<p>La palabra <strong>'.$palabra.'</strong> no es un palíndromo.</p>';
            }
            
            echo '<h2>MÉTODO 2</h2>';
            $palabraInvertida2 = strrev($palabra);
            $palabraSinEspacios = str_replace(' ', '', $palabra);
            $palabraInvertida2SinEspacios = str_replace(' ', '', $palabraInvertida2);
            if($palabraSinEspacios == $palabraInvertida2SinEspacios){
                echo '<p>La palabra <strong>'.$palabra.'</strong> es un palíndromo.</p>';
            }else{
                echo '<p>La palabra <strong>'.$palabra.'</strong> no es un palíndromo.</p>';
            }
            ?>
        </body>

        </html>

    <?php
    } else {
    ?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <style>
                div,
                button {
                    margin: 1rem;
                }

                span {
                    color: red;
                }
            </style>
        </head>

        <body>
            <h1>PALÍNDROMO</h1>
            <p>Dime una palabra o frase y te diré si es palíndroma</p>
            <form method='post' action="recogida.php">
                <div>
                    <label for="palabra">Palabra: </label>
                    <input type="text" name="palabra" id="palabra">
                    <?php
                    if ($error) {
                        echo '<span>*CAMPO OBLIGATORIO*</span>';
                    }else if($error_longitud){
                        echo '<span>*MINIMO 3 LETRAS*</span>';
                    }
                    ?>
                </div>
                <button name='btnEnviar' type="submit">Enviar</button>
            </form>
        </body>

        </html>
<?php
    }
} else {
    header('Location: index.php');
}
