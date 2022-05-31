<?php

try{
    $alumnos = $connection->query('SELECT * FROM alumnos')->fetchAll();
}catch(Exception $error){
    echo '<p>Lo sentimos, algo ha fallado.</p>';
}


