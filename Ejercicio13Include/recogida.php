<?php
if (isset($_POST['btnEnviar'])) {
    $error_usuario = ($_POST['usuario'] == '');
    $error_password = ($_POST['password'] == '');
    $error = $error_usuario || $error_password;

    if (!$error) {
        include 'paginaRecogida.php';
    } else {
        include 'index.php';
    }
} else {
    header('Location: index.php');
}
?>