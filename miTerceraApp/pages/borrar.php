<?php
if (isset($_POST['btnBorrar'])) {
    $id = $_POST['btnBorrar'];
    $sql = 'DELETE FROM pedido where id=?';
    try {
        $connection->prepare($sql)->execute([$id]);
    } catch (Exception $error) {
        echo $error;
    }
}
