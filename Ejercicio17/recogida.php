<?php
if (isset($_POST['btnEnviar'])) {
    $error_vacio = ($_POST['romano'] == '');

    if (!$error_vacio) {
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
            <h1>Recogida de Datos</h1>
            <?php
            $romano = strtoupper($_POST['romano']);
            $longitudRomano = strlen($romano);
            $arabe = 0;

            for ($i = 0; $i < $longitudRomano; $i++) {
                switch ($romano[$i]) {
                    case 'I':
                        // $arabe = $arabe + 1;
                        $arabe++;
                        break;
                    case 'V':
                        // $arabe = $arabe + 5;
                        $arabe += 5;
                        break;
                    case 'X':
                        // $arabe = $arabe + 10;
                        $arabe += 10;
                        break;
                    case 'L':
                        // $arabe = $arabe + 50;
                        $arabe += 50;
                        break;
                    case 'C':
                        // $arabe = $arabe + 100;
                        $arabe += 100;
                        break;
                    case 'D':
                        // $arabe = $arabe + 500;
                        $arabe += 500;
                        break;
                    case 'M':
                        // $arabe = $arabe + 1000;
                        $arabe += 1000;
                        break;
                }
            }

            echo '<p>El número romano ' . $romano . ' en árabe es ' . $arabe . '</p>';
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
            <h1>NÚMERO ROMANO A ÁRABE</h1>
            <p>Dime un número romano y te lo convierto (a mi manera) a árabe</p>
            <form method='post' action="recogida.php">
                <div>
                    <label for="romano">Número Romano: </label>
                    <input type="text" name="romano" id="romano">
                    <?php
                    if ($error_vacio) {
                        echo '<span>*CAMPO OBLIGATORIO*</span>';
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
