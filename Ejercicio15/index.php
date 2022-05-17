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
    <h1>RIMANDO</h1>
    <p>Dime dos palabras y te diré si riman o no</p>
    <form method='post' action="recogida.php">
        <div>
            <label for="palabra1">Primera Palabra: </label>
            <input type="text" name="palabra1" id="palabra1">
        </div>
        <div>
            <label for="palabra2">Segunda Palabra: </label>
            <input type="text" name="palabra2" id="palabra2">
        </div>
        <button name='btnEnviar' type="submit">Enviar</button>
    </form>
</body>

</html>