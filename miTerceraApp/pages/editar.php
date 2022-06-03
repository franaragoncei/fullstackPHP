<?php
if (isset($_POST['btnEditar'])) {
    $cantidad = $_POST['cantidad'];
    $fecha = $_POST['fecha'];
    $cliente = $_POST['clienteElegido'];
    $comercial = $_POST['comercialElegido'];
    $idPedido = $_POST['idPedido'];

    $sql = 'UPDATE pedido SET cantidad=?, fecha=?, id_cliente=?, id_comercial=? WHERE id=?';

    try {
        $connection->prepare($sql)->execute([$cantidad, $fecha, $cliente, $comercial, $idPedido]);
    } catch (Exception $error) {
        echo $error;
    }
} else if (isset($_POST['editarCliente'])) {
    $nombre = $_POST['nombre'];
    $apellido1 = $_POST['apellido1'];
    $apellido2 = $_POST['apellido2'];
    $ciudad = $_POST['ciudad'];
    $categoria = $_POST['categoria'];
    $idCliente = $_POST['idCliente'];

    $sql = 'UPDATE cliente SET nombre=?, apellido1=?, apellido2=?, ciudad=?, categoria=? WHERE id=?';

    try{
        $connection->prepare($sql)->execute([$nombre, $apellido1, $apellido2, $ciudad, $categoria, $idCliente]);
    }catch(Exception $error){
        echo $error;
    }
}
