<?php

if ($_SERVER['REQUEST_METHOD']=='POST') {
    $IdCat = $_POST['IdCat'];

    include 'db_conexion.php';

    $stm=$conexion->prepare("SELECT * FROM producto WHERE CategoriaID='$IdCat'");
    $stm->execute();
    $result = $stm->get_result();
    $answ=[];

    while ($row = $result->fetch_assoc()){
        $product = [
            'ProductoID' => $row['ProductoID'],
            'Nombre' =>$row['Nombre'],
            'Imagen' =>$row['Imagen'],
            'Descripcion' =>$row['Descripcion'],
            'Precio' =>$row['Precio']
        ];
        array_push($answ,$product);
    }
    echo json_encode($answ);
}


?>