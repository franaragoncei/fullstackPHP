<?php

if(isset($_POST['btnBorrar'])){
    $id = $_POST['alumnoBorrar'];
    $sql = 'DELETE FROM alumnos WHERE id=?';
    try{
        $connection->prepare($sql)->execute([$id]);
    }catch(Exception $error){
        echo '<p>Lo sentimos, algo ha fallado.</p>';
    }
}