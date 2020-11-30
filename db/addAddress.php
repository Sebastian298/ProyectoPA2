<?php

if ($_SERVER['REQUEST_METHOD']=='POST') {

    $outNumber = htmlspecialchars($_POST['outNumber']);
    $interiorNumber = htmlspecialchars($_POST['interiorNumber']);
    $street = htmlspecialchars($_POST['street']);
    $settElement = htmlspecialchars($_POST['settlement']);
    $city = htmlspecialchars($_POST['city']);
    $state= htmlspecialchars($_POST['state']);
    $zip= htmlspecialchars($_POST['zip']);

    try {
        include 'db_conexion.php';
        $rs = mysqli_query($conexion,"SELECT MAX(UserID) AS id FROM usuario");
        if ($row = mysqli_fetch_row($rs)) {
           $id = trim($row[0]);
        }

        $query = "INSERT INTO direcciones (UserID,NumeroExterior,NumeroInterior,Calle,Colonia,Ciudad,Estado,CodigoPostal) 
        VALUES ('$id','$outNumber','$interiorNumber','$street','$settElement','$city','$state','$zip')";
        mysqli_query($conexion,$query);
        //header('Location: login.php');
        mysqli_close($conexion);
    } catch (Exception $ex) {
        header("Location: ../views/address.view.php");
        echo 'Error!: ',  $e->getMessage(), "\n";
    }
}
?>