<?php

if (isset($_POST['btnAdd'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellidos'];

    $sql = 'INSERT INTO alumnos (nombre, apellidos) VALUES (?,?)';

    try{
        $connection->prepare($sql)->execute([$nombre, $apellido]);
    }catch(Exception $error){
        echo '<p>Lo sentimos, algo ha fallado.</p>';
    }
}
