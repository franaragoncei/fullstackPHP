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
    <h1>INICIAR SESIÓN</h1>
    <form method='post' action="recogida.php">
        <div>
            <label for="nombre">Nombre Completo: </label>
            <input type="text" name="nombre" id="nombre">
        </div>
        <div>
            <label for="email">Email: </label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="mensaje">Mensaje: </label>
            <textarea type="text" name="mensaje" id="mensaje"></textarea>
        </div>
        <div>
            <div>
                <input checked value="Primera Opcion" type="radio" name="opciones" id="primeraOpcion">
                <label for="primeraOpcion">Primera Opción</label>
            </div>
            <div>
                <input value="Segunda Opcion" type="radio" name="opciones" id="segundaOpcion">
                <label for="segundaOpcion">Segunda Opción</label>
            </div>
            <div>
                <input value="Tercera Opcion" type="radio" name="opciones" id="terceraOpcion">
                <label for="terceraOpcion">Tercera Opción</label>
            </div>
        </div>
        <div>
            <div>
                <input value="Primera Opcion Checkbox" type="checkbox" name="opcionesCheckbox[]" id="primeraOpcionCheck">
                <label for="primeraOpcionCheck">Primera Opción</label>
            </div>
            <div>
                <input value="Segunda Opcion Checkbox" type="checkbox" name="opcionesCheckbox[]" id="segundaOpcionCheck">
                <label for="segundaOpcionCheck">Segunda Opción</label>
            </div>
            <div>
                <input value="Tercera Opcion Checkbox" type="checkbox" name="opcionesCheckbox[]" id="terceraOpcionCheck">
                <label for="terceraOpcionCheck">Tercera Opción</label>
            </div>
        </div>
        <div>
            <select name="opcionesSelect">
                <option  value="primeraOpcion">Opcion 1</option>
                <option selected value="segundaOpcion">Opcion 2</option>
                <option value="terceraOpcion">Opcion 3</option>
            </select>
        </div>
        <button name='btnEnviar' type="submit">Enviar</button>
    </form>
</body>

</html>