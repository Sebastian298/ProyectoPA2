<?php session_start();
    if($_SERVER['REQUEST_METHOD']=='POST'){
        
        $usuario = filter_var(strtolower($_POST['userName']),FILTER_SANITIZE_STRING);
        $password = filter_var($_POST['Password'],FILTER_SANITIZE_STRING);
        $errores='';
    
        try {
            include 'db/db_conexion.php';
            $query = "SELECT COUNT(*) as count FROM usuario where Usuario='$usuario' AND Password = '$password'";
            $resultado = mysqli_query($conexion,$query);
            $array = mysqli_fetch_array($resultado);
            if ($array['count']>0) {
                $_SESSION['user'] = $usuario;
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