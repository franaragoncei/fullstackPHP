<?php
if (isset($_POST['registrar'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $pass = $_POST['pass'];

    $sql = 'INSERT INTO usuarios (nombre, apellido, usuario, pass) values (?,?,?,?)';

    try {
        $connection->prepare($sql)->execute([$nombre, $apellido, $usuario, md5($pass)]);
    } catch (Exception $error) {
        header('Location: pages/error.php');
    }
}
