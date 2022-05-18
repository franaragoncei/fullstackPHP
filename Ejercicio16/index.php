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
    <h1>PALÍNDROMO</h1>
    <p>Dime una palabra o frase y te diré si es palíndroma</p>
    <form method='post' action="recogida.php">
        <div>
            <label for="palabra">Palabra: </label>
            <input type="text" name="palabra" id="palabra">
        </div>
        <button name='btnEnviar' type="submit">Enviar</button>
    </form>
</body>

</html>