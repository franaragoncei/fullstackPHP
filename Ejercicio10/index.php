<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Suscripción electrónica a nuestro boletín</h1>
    <p>Nota: Los datos de este formulario van a mandarse a otra página</p>
    <form method='POST' action="recogida.php">
        <div>
            <label for="nombre">Nombre*: </label>
            <input required type="text" name='nombre' id="nombre">
            <label for="apellido">Apellido: </label>
            <input type="text" name='apellido' id="apellido">
            <label for="email">Email*: </label>
            <input required type="email" name='email' id="email">
        </div>
        <p></p>
        <div>
            <label for="password">Contraseña: </label>
            <input type="password" name='password' id="password">
        </div>
        <div>
            <div>
                <p>Sexo</p>
                <div>
                    <input checked value='Hombre' name='sexo' id='hombre' type="radio"> 
                    <label for="hombre">Hombre</label>
                </div>
                <div>
                    <input value='Mujer'  name='sexo' id='mujer' type="radio"> 
                    <label for="mujer">Mujer</label>
                </div>
            </div>
            <div>
                <p>Nivel de estudios</p>
                <div>
                    <input checked value='Certificado Escolar'  name='estudios' id='certificadoEscolar' type="radio"> 
                    <label for="certificadoEscolar">Certificado Escolar</label>
                </div>
                <div>
                    <input value='Gradudado en ESO'  name='estudios' id='graduado' type="radio"> 
                    <label for="graduado">Graduado en ESO</label>
                </div>
                <div>
                    <input value='Bachilllerato o Formación Profesional'  name='estudios' id='bachillerato' type="radio"> 
                    <label for="bachillerato">Bachillerato - Formación Profesional</label>
                </div>
                <div>
                    <input value='Diplomado'  name='estudios' id='diplomado' type="radio"> 
                    <label for="diplomado">Diplomado</label>
                </div>
                <div>
                    <input value='Licenciado o Doctorado'  name='estudios' id='doctorado' type="radio"> 
                    <label for="doctorado">Licenciado o Doctorado</label>
                </div>
            </div>
            <div>
                <p>Interesado en los siguientes temas</p>
                <div>
                    <input value='Música' name='temas[]' id='musica' type="checkbox"> 
                    <label for="musica">Musica</label>
                </div>
                <div>
                    <input value='Deportes' name='temas[]' id='deportes' type="checkbox"> 
                    <label for="deportes">Deportes</label>
                </div>
                <div>
                    <input value='Cine' name='temas[]' id='cine' type="checkbox"> 
                    <label for="cine">Cine</label>
                </div>
                <div>
                    <input value='Libros' name='temas[]' id='libros' type="checkbox"> 
                    <label for="libros">Libros</label>
                </div>
                <div>
                    <input value='Ciencia' name='temas[]' id='ciencia' type="checkbox"> 
                    <label for="ciencia">Ciencia</label>
                </div>
            </div>
        </div>
        <div>
            <p>Dia de la semana que le interesa recibirlo:</p>
            <select name="dias" id="dias">
                <option value="Lunes">Lunes</option>
                <option value="Martes">Martes</option>
                <option value="Miércoles">Miércoles</option>
                <option value="Jueves">Jueves</option>
                <option value="Viernes">Viernes</option>
                <option value="Sábado">Sábado</option>
                <option value="Domingo">Domingo</option>
            </select>
        </div>
        <div>
            <p><label for="comentario">Su opinión:</label></p>
            <textarea name="comentario" id="comentario" cols="30" rows="10" placeholder='Comentario:'></textarea>
        </div>
        <button name='btnEnviar' type='submit'>Comprobar el formulario</button>
        <button type='reset'>Borrar todo</button>
    </form>
</body>
</html>