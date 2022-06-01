<?php

if (isset($_POST['borrarID'])) {
    $codigo = $_POST['borrarID'];
    $sql = 'DELETE FROM producto WHERE codigo=?';

    try{
        $connection->prepare($sql)->execute([$codigo]);
    }catch(Exception $error){
        echo $error;
    }
}
