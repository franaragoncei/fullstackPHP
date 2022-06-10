<?php
// include '../db/connection.php';
if (isset($_POST['editar'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $_SESSION['nombre'] = $nombre;
    $_SESSION['apellido'] = $apellido;
    $_SESSION['usuario'] = $usuario;
    $id = $_SESSION['id'];

    $unUsuario = $connection->query('SELECT * FROM usuarios where usuario="'.$usuario.'"')->fetchAll();

    if(count($unUsuario) > 0){
        $_SESSION['errorEditarUsuario'] = true;
        header('Location: editarForm.php');
    }else{
        $sql = 'UPDATE usuarios set nombre=?, apellido=?, usuario=? where id=?';

        try{
            $connection->prepare($sql)->execute([$nombre, $apellido, $usuario, $id]);
            header('Location: home.php');
        }catch(Exception $error){
            echo $error;
        }
    }
}
