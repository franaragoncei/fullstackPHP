<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>MI PRIMERA APP</h1>
    <?php
    require_once 'db/pdoconfig.php';

    try {
        $connection = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $username, $password, $options);
        echo 'Conectado satisfactoriamente a la base de datos ' . $dbname . ' en el host ' . $host;
        include 'pages/insertar.php';
        echo '<h3>LISTADO DE EMPLEADOS</h3>';
        include 'pages/select.php';
        echo '<a href="pages/insertarForm.php">Registrar Alumnos</a>';
    } catch (PDOException $error) {
        die('No se ha podido acceder a la base de datos ' . $dbname . ':' . $error->getMessage());
    }
    ?>
</body>

</html>