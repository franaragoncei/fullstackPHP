<?php

try{
    $datos = $connection->query('SELECT cliente.id as idCliente, cliente.nombre, cliente.apellido1, cliente.apellido2, cliente.ciudad, cliente.categoria, pedido.id, pedido.cantidad, pedido.fecha, comercial.nombre as nombreComercial, comercial.id from cliente join pedido on cliente.id = pedido.id_cliente join comercial on pedido.id_comercial = comercial.id')->fetchAll();
    $clientes = $connection->query('SELECT * FROM cliente')->fetchAll();
    $comerciales = $connection->query('SELECT * FROM comercial')->fetchAll();
}catch(Exception $error){
    echo $error;
}