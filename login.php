<?php session_start();
    if($_SERVER['REQUEST_METHOD']=='POST'){

        //evita el sql injection convirtiendo los caracteres especiales en entidades html
        $user = htmlspecialchars(strtolower($_POST['userName']));
        $password = htmlspecialchars(strtolower($_POST['Password']));
        $errores='';
    
        try {
            include 'db/db_conexion.php';
           /* $query = "SELECT * FROM usuario where Usuario='$user' AND Password = '$password'";
            $resultado = mysqli_query($conexion,$query);
            $array = mysqli_fetch_array($resultado);
            if ($array>0) {
                $_SESSION['user'] = $user;
                $_SESSION['id'] = $array[0];
                header('Location: index.php');
                mysqli_close($conexion);
            }*/
            $query = "SELECT * FROM usuario where Usuario='$user' AND Password = '$password'";
            $resultado = mysqli_query($conexion,$query);
            while($array = mysqli_fetch_array($resultado)){ 
                $_SESSION['user'] = $user;
                $_SESSION['id'] = $array[0];
                header('Location: index.php');
                mysqli_close($conexion);
            }
        } catch (PDOException $e) {
            echo 'Error!: ',  $e->getMessage(), "\n";
        }
    }
require 'views/login.view.php';
?>