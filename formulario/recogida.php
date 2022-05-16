<?php
    if(isset($_POST['btnEnviar'])){
        $error_usuario = ($_POST['usuario'] == '');

        $error_password = ($_POST['password'] == '');

        $error = $error_usuario || $error_password;

        if(!$error){
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
                    <p>Usuario: <?php echo $_POST['usuario']; ?></p>
                </body>
                </html>
            <?php
        }else{
            ?>
                <!DOCTYPE html>
                <html lang="es">

                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Document</title>
                    <style>
                        div {
                            margin: 1rem;
                        }

                        span{
                            color: red;
                            font-style: italic;
                        }
                    </style>
                </head>

                <body>
                    <h1>INICIAR SESIÓN</h1>
                    <form method="POST" action="recogida.php">
                        <div>
                            <input value='<?php if(!$error_usuario){ echo $_POST["usuario"];} ?>' type="text" name="usuario" placeholder="Introduce tu usuario">
                            <?php
                                if($error_usuario){
                                    echo '<span>*CAMPO OBLIGATORIO*</span>';
                                }
                            ?>
                        </div>
                        <div>
                            <input value='<?php if(!$error_password){ echo $_POST["password"];} ?>' type="password" name="password" placeholder="Introduce tu contraseña">
                            
                            <?php
                                if($error_password){
                                    echo '<span>*CAMPO OBLIGATORIO*</span>'; 
                                }

                            ?>
                        </div>
                        <p>AFICIONES</p>
                        <div>
                            <div>
                                <input name="Aficiones[]" id="deportes" type="checkbox" value="Deportes">
                                <label for="deportes">Deportes</label>
                            </div>
                            <div>
                                <input name="Aficiones[]" id="lectura" type="checkbox" value="Lectura">
                                <label for="lectura">Lectura</label>
                            </div>
                            <div>
                                <input name="Aficiones[]" id="otros" type="checkbox" value="Otros">
                                <label for="otros">Otros</label>
                            </div>
                        </div>
                        <p>POSTRES</p>
                        <div>
                            <div>
                                <input name="Postres[]" id="yogur" type="checkbox" value="Yogur">
                                <label for="yogur">Yogur</label>
                            </div>
                            <div>
                                <input name="Postres[]" id="helado" type="checkbox" value="Helado">
                                <label for="helado">Helado</label>
                            </div>
                            <div>
                                <input name="Postres[]" id="fruta" type="checkbox" value="Fruta">
                                <label for="fruta">Fruta</label>
                            </div>
                        </div>
                        <p>Sexo</p>
                        <div>
                            <input name="sexo" id="hombre" type="radio" value="Hombre">
                            <label for="hombre">Hombre</label>
                            <input name="sexo" id="mujer" type="radio" value="Mujer">
                            <label for="mujer">Mujer</label>
                        </div>
                        <div>
                            <select name="ciudad">
                                <option value="Málaga">Málaga</option>
                                <option value="Sevilla">Sevilla</option>
                                <option value="Granada">Granada</option>
                            </select>
                        </div>
                        <div>
                            <textarea name="comentarios" cols="30" rows="10"></textarea>
                        </div>
                        <button name="btnEnviar">Enviar</button>
                    </form>
                </body>

                </html>
            <?php
        }
    }else{
        header('Location: formulario.html');
    }
?>