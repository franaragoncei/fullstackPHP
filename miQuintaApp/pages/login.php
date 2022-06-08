<?php
include '../db/connection.php';
if (isset($_POST['acceder'])) {
    $usuario = $_POST['usuario'];
    $pass = $_POST['pass'];

    $miUsuario = $connection->query('SELECT * from usuarios where usuario="' . $usuario . '" AND pass="' . md5($pass) . '"')->fetchAll();

    if(count($miUsuario) >0){
        $_SESSION['nombreUsuario'] = $miUsuario[0]['nombre'];
        $_SESSION['apellidoUsuario'] = $miUsuario[0]['apellido'];
        $_SESSION['usuario'] = $miUsuario[0]['usuario'];
        header('Location: home.php');
    }else{
        $_SESSION['error'] = true;
        header('Location: ../index.php');
    }
}
