<?php

try{
    $alumnos = $connection->query('SELECT * FROM alumnos')->fetchAll();
    
    foreach ($alumnos as $alumno) {
        echo '<p>' . $alumno['id'] . ': ' . $alumno['nombre'] . ' ' . $alumno['apellidos'] . '</p>';
    }
}catch(Exception $error){
    echo '<p>Lo sentimos, algo ha fallado.</p>';
}


