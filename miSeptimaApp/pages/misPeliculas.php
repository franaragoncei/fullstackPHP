<?php
include '../db/connection.php';
try {
    $peliculas = $connection->query('SELECT * from peliculas where usuarioPelicula="' . $_SESSION['id'] . '"')->fetchAll();

    echo json_encode($peliculas);
} catch (Exception $error) {
    echo $error;
}
