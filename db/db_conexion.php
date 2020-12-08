<?php
    $db_name = 'jsnet';
    $db_user = 'Administrador';
    $db_pass = 'Administrador';
    $db_dom = 'localhost';
    /*$db_name = 'u116984415_jsnet ';
    $db_user = 'u116984415_Administrador';
    $db_pass = '*jdb;gD3';
    $db_dom = '151.106.97.204';*/
    $conexion = mysqli_connect($db_dom, $db_user, $db_pass,$db_name);
    if(!$conexion){
        echo 'No hubo conexion';
    }
?>