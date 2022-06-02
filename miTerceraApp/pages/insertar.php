<?php
if (isset($_POST['btnAdd'])) {
    $cantidad = $_POST['cantidad'];
    $fecha = $_POST['fecha'];
    $id_cliente = $_POST['clienteElegido'];
    $id_comercial = $_POST['comercialElegido'];

    $sql = 'INSERT INTO pedido (cantidad, fecha, id_cliente, id_comercial) values (?,?,?,?)';

    try {
        $connection->prepare($sql)->execute([$cantidad, $fecha, $id_cliente, $id_comercial]);
    } catch (Exception $error) {
        echo $error;
    }
}
