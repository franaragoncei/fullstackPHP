<?php

try {
    $productos = $connection->query('SELECT producto.codigo as codigoProducto, producto.nombre, producto.precio, fabricante.codigo, fabricante.nombre as nombreFabricante from producto right join fabricante on producto.codigo_fabricante = fabricante.codigo order by producto.precio desc')->fetchAll();
    // FABRICANTE
    $fabricantes = $connection->query('SELECT * from fabricante')->fetchAll();
    $unProducto = $connection->query('SELECT * from producto')->fetchAll();
} catch (Exception $error) {
    echo $error;
}
