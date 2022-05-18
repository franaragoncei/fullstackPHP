<?php
if (isset($_POST['btnEnviar'])) {
    include 'paginaErrores.php';

    if (!$errorTotal) {
        include 'paginaRecogida.php';
    } else {
        include 'index.php';
    }
} else {
    header('Location: index.php');
}
