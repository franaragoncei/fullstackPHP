<?php

if (isset($_POST['btnEnviar'])) {
    $error_email = ($_POST['email'] == '');
    $error_mensaje = ($_POST['mensaje'] == '');

    $error = $error_email || $error_mensaje;

    if (!$error) {
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
            <h1>Sus Datos, <?php echo $_POST['nombre']; ?></h1>
            <p>Email: <?php echo $_POST['email']; ?></p>
            <p>Mensaje: <?php echo $_POST['mensaje']; ?></p>
            <p>Opción Radio: <?php echo $_POST['opciones']; ?></p>
            <?php
            if (isset($_POST['opcionesCheckbox'])) {
                echo '<ul>';
                for ($i = 0; $i < count($_POST['opcionesCheckbox']); $i++) {
                    echo '<li>' . $_POST['opcionesCheckbox'][$i] . '</li>';
                }
                echo '</ul>';
            }else{
                echo '<p>No se han seleccionado opciones en el checkbox</p>';
            }
            ?>
            <p>Opción Select: <?php echo $_POST['opcionesSelect']; ?></p>
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
            <h1>INICIAR SESIÓN</h1>
            <form method='post' action="recogida.php">
                <div>
                    <label for="nombre">Nombre Completo: </label>
                    <input type="text" name="nombre" id="nombre">
                </div>
                <div>
                    <label for="email">Email: </label>
                    <input value="<?php if (!$error_email) {
                                        echo $_POST['email'];
                                    } ?>" type="email" name="email" id="email">
                    <?php
                    if ($error_email) {
                        echo '<span>*CAMPO OBLIGATORIO*</span>';
                    }
                    ?>
                </div>
                <div>
                    <label for="mensaje">Mensaje: </label>
                    <textarea type="text" name="mensaje" id="mensaje">
                        <?php
                        if (!$error_mensaje) {
                            echo $_POST['mensaje'];
                        }
                        ?>
                    </textarea>
                    <?php
                    if ($error_mensaje) {
                        echo '<span>*CAMPO OBLIGATORIO*</span>';
                    }
                    ?>
                </div>
                <div>
                    <div>
                        <input <?php if($_POST['opciones'] == "Primera Opcion") { echo 'checked';} ?> value="Primera Opcion" type="radio" name="opciones" id="primeraOpcion">
                        <label for="primeraOpcion">Primera Opción</label>
                    </div>
                    <div>
                        <input <?php if($_POST['opciones'] == "Segunda Opcion") { echo 'checked';} ?> value="Segunda Opcion" type="radio" name="opciones" id="segundaOpcion">
                        <label for="segundaOpcion">Segunda Opción</label>
                    </div>
                    <div>
                        <input <?php if($_POST['opciones'] == "Tercera Opcion") { echo 'checked';} ?> value="Tercera Opcion" type="radio" name="opciones" id="terceraOpcion">
                        <label for="terceraOpcion">Tercera Opción</label>
                    </div>
                </div>
                <div>
                    <div>
                        <input value="Primera Opcion Checkbox" type="checkbox" name="opcionesCheckbox[]" id="primeraOpcionCheck" 
                        <?php
                            if(isset($_POST['opcionesCheckbox']) && in_array('Primera Opcion Checkbox', $_POST['opcionesCheckbox'])){
                                echo 'checked';
                            }
                        ?>
                        >
                        <label for="primeraOpcionCheck">Primera Opción</label>
                    </div>
                    <div>
                        <input value="Segunda Opcion Checkbox" type="checkbox" name="opcionesCheckbox[]" id="segundaOpcionCheck"
                        <?php
                         if(isset($_POST['opcionesCheckbox']) && in_array('Segunda Opcion Checkbox', $_POST['opcionesCheckbox'])){
                            echo 'checked';
                         }
                        ?>
                        >
                        <label for="segundaOpcionCheck">Segunda Opción</label>
                    </div>
                    <div>
                        <input value="Tercera Opcion Checkbox" type="checkbox" name="opcionesCheckbox[]" id="terceraOpcionCheck"
                        <?php
                         if(isset($_POST['opcionesCheckbox']) && in_array('Tercera Opcion Checkbox', $_POST['opcionesCheckbox'])){
                            echo 'checked';
                         }
                        ?>
                        >
                        <label for="terceraOpcionCheck">Tercera Opción</label>
                    </div>
                </div>
                <div>
                    <select name="opcionesSelect">
                        <option value="primeraOpcion">Opcion 1</option>
                        <option value="segundaOpcion">Opcion 2</option>
                        <option value="terceraOpcion">Opcion 3</option>
                    </select>
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
