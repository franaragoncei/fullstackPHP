<?php
include '../db/connection.php';
if (isset($_POST['acceder'])) {
    $usuario = $_POST['usuario'];
    $pass = $_POST['pass'];

    $unUsuario = $connection->query('SELECT * FROM usuarios where usuario="' . $usuario . '" AND pass="' . md5($pass) . '"')->fetchAll();

    if (count($unUsuario) > 0) {
        $_SESSION['id'] = $unUsuario[0]['id'];
        $_SESSION['nombre'] = $unUsuario[0]['nombre'];
        $_SESSION['apellido'] = $unUsuario[0]['apellido'];
        $_SESSION['usuario'] = $unUsuario[0]['usuario'];
        header('Location: home.php');
    }else{
        $_SESSION['errorLogin'] = true;
        header('Location: ../index.php');
    }
}
