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
    <h1>CONTACTO</h1>
    <form method='post' action="recogida.php">
        <div>
            <label for="nombre">Nombre: </label>
            <input id='nombre' type="text" name='nombre'>
        </div>
        <div>
            <label for="edad">Edad: </label>
            <input id='edad' type="text" name='edad'>
        </div>
        <div>
            <label for="email">Email: </label>
            <input id='email' type="email" name='email'>
        </div>
        <div>
            <label>Sexo</label>
            <input name='sexo' id='masculino' type="radio" value='Masculino'>
            <label for="masculino">Masculino</label>
            <input name='sexo' id='femenino' type="radio" value='Femenino'>
            <label for="femenino">Femenino</label>
        </div>
        <div>
            <label for="asunto">Asunto: </label>
            <input id='asunto' type="text" name='asunto'>
        </div>
        <div>
            <p><label for="comentario">Comentarios:</label></p>
            <textarea name="comentario" id="comentario" cols="30" rows="10"></textarea>
        </div>
        <button name='btnEnviar' type='submit'>Enviar</button>
        <button type='reset'>Limpiar</button>
    </form>
</body>
</html>