<?php

if (isset($_POST['insertar'])) {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $nombreFabricante = $_POST['nombreFabricante'];

    $sql = 'INSERT INTO producto (nombre, precio, codigo_fabricante) VALUES (?,?,?)';

    try{
        $connection->prepare($sql)->execute([$nombre, $precio, $nombreFabricante]);
    }catch(Exception $error){
        echo $error;
    }
}
