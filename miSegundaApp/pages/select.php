<?php

try{
    $alumnos = $connection->query('SELECT producto.nombre, fabricante.nombre as nombreFabricante FROM producto join fabricante on producto.codigo_fabricante = fabricante.codigo')->fetchAll();
}catch(Exception $error){
    echo '<p>Lo sentimos, algo ha fallado.</p>';
}


