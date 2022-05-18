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
    </style>
</head>

<body>
    <h1>NÚMERO ROMANO A ÁRABE</h1>
    <p>Dime un número romano y te lo convierto (a mi manera) a árabe</p>
    <form method='post' action="recogida.php">
        <div>
            <label for="romano">Número Romano: </label>
            <input type="text" name="romano" id="romano">
        </div>
        <button name='btnEnviar' type="submit">Enviar</button>
    </form>
</body>

</html>