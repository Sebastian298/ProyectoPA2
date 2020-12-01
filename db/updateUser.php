<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

    $Id=$_POST['Id'];
    $userName=htmlspecialchars($_POST['userName']);
    $lastName=htmlspecialchars($_POST['lastName']);
    $email=htmlspecialchars($_POST['email']);
    $phone=htmlspecialchars($_POST['phone']);

    try {
        include 'db_conexion.php';
        $query="UPDATE usuario SET Telefono='$phone',Nombre='$userName',Apellidos='$lastName',CorreoElectronico='$email'WHERE UserID = '$Id' ";
        mysqli_query($conexion,$query);
        mysqli_close($conexion);
    } catch (Exception $e) {
        header("Location: ../views/profile.view.php");
        echo 'Error!: ',  $e->getMessage(), "\n";
    }
}

?>