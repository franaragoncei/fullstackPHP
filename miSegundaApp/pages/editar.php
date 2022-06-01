<?php

if(isset($_POST['btnEditar'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellidos'];
    $id = $_POST['alumnoEditar'];
    $sql = 'UPDATE alumnos SET nombre=?, apellidos=? WHERE id=?';

    try{
        $connection->prepare($sql)->execute([$nombre, $apellido, $id]);
    }catch(Exception $error){
        echo 'Lo sentimos, algo ha fallado.';
    }
}