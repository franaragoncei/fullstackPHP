<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            margin: 1rem;
        }
    </style>
</head>
<body>
    <h1>ESTA ES MI SUPER PÁGINA 2</h1>
    <form action="recogida.php" method="post">
        <div>
            <label for="nombre">Nombre*: </label>
            <input type="text" name='nombre' id="nombre">
        </div>
        <div>
            <label for="nacido">Nacido en: </label>
            <select name="nacido" id="nacido">
                <option value="Malaga">Málaga</option>
                <option value="Sevilla">Sevilla</option>
            </select>
            </div>
            <div>
                <span>Aficiones: </span>
                <label for="deportes">Deportes</label>
                <input value='Deportes' type="checkbox" name="aficiones[]" id="deportes">
                <label for="lectura">Lectura</label>
                <input value='Lectura' type="checkbox" name="aficiones[]" id="lectura">
                <label for="otros">Otros</label>
                <input value='Otros' type="checkbox" name="aficiones[]" id="otros">
            </div>
            <div>
                <label for="comentarios">Comentarios*: </label>
                <textarea name="comentarios" id="comentarios" cols="30" rows="10"></textarea>
            </div>
    </div>
    <button type='submit' name='btnEnviar'>Enviar</button>
    </form>
</body>
</html>