<?php session_start();
    if($_SERVER['REQUEST_METHOD']=='POST'){

        //evita el sql injection convirtiendo los caracteres especiales en entidades html
        $user = htmlspecialchars(strtolower($_POST['userName']));
        $password = htmlspecialchars(strtolower($_POST['Password']));
        $errores='';
    
        try {
            include 'db/db_conexion.php';
            $query = "SELECT COUNT(*) as count FROM usuario where Usuario='$user' AND Password = '$password'";
            $resultado = mysqli_query($conexion,$query);
            $array = mysqli_fetch_array($resultado);
            if ($array['count']>0) {
                $_SESSION['user'] = $user;
                header('Location: index.php');
                mysqli_close($conexion);
            }else{
                $errores .= '<li style="color: blue;">Datos incorrectos</li>';
            }
        } catch (PDOException $e) {
            echo 'Error!: ',  $e->getMessage(), "\n";
        }
    }
require 'views/login.view.php';
?>