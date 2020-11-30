<?php session_start();
if(isset($_SESSION['user'])){
  header('Location: views/index.view.php');
  }else{
      header('Location: login.php');
  }
?>