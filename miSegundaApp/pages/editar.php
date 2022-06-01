<?php
if (isset($_POST['editar'])) {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $codigoFabricante = $_POST['nombreFabricante'];
    $codigoProducto = $_POST['editarID'];

    $sql = 'UPDATE producto set nombre=?, precio=?, codigo_fabricante=? where codigo=?';

    try{
        $connection->prepare($sql)->execute([$nombre, $precio, $codigoFabricante, $codigoProducto]);
    }catch(Exception $error){
        echo $error;
    }
}
