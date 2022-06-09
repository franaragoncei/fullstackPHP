<?php
try {
    $peliculas = $connection->query('SELECT * FROM peliculas WHERE usuarioPelicula = "' . $_SESSION['idUsuario'] . '"')->fetchAll();
    // foreach ($peliculas as $pelicula) {
    //     echo '<p>' . $pelicula['id'] . ' -> ' . $pelicula['nombre'] . '</p>';
    // }
} catch (Exception $error) {
}
