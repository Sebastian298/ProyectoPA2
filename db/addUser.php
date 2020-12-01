<?php session_start();
    if($_SERVER['REQUEST_METHOD']=='POST'){
        
       $username = htmlspecialchars($_POST['username']);
       $name = htmlspecialchars($_POST['name']);
       $lastname = htmlspecialchars($_POST['lastname']);
       $phone = htmlspecialchars($_POST['phonenumber']);
       $email = htmlspecialchars($_POST['email']);
       $password = htmlspecialchars($_POST['password']);
       try {
        include 'db_conexion.php';
        $query = "INSERT INTO USUARIO (Apellidos, CorreoElectronico, Nombre, Password, Telefono, Usuario) VALUES ('$lastname','$email','$name','$password','$phone','$username')";
        mysqli_query($conexion,$query);
        mysqli_close($conexion);
    } catch (Exception $e) {
        header("Location: ../views/registerUser.view.php");
        echo 'Error!: ',  $e->getMessage(), "\n";
    }
}
?>