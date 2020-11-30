<?php
    $db_name = 'jsnet';
    $db_user = 'Administrador';
    $db_pass = 'Administrador';
    $db_dom = 'localhost';
    $conexion = mysqli_connect($db_dom, $db_user, $db_pass,$db_name);
    if(!$conexion){
        echo 'No hubo conexion';
    }
?>