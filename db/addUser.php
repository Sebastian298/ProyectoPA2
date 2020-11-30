<?php 
    if($_SERVER['REQUEST_METHOD']=='POST'){

       $username = $_POST['username'];
       $name = $_POST['name'];
       $lastname = $_POST['lastname'];
       $phone = $_POST['phonenumber'];
       $email = $_POST['email'];
       $password = $_POST['password'];
       try {
        include 'db_conexion.php';
        $query = "INSERT INTO USUARIO (Apellidos, CorreoElectronico, Nombre, Password, Telefono, Usuario) VALUES ('$lastname','$email','$name','$password','$phone','$username')";
        mysqli_query($conexion,$query);
        header("Location: ../login.php");
    } catch (Exception $e) {
        header("Location: ../views/registerUser.view.php");
        echo 'Error!: ',  $e->getMessage(), "\n";
    }
}
?>