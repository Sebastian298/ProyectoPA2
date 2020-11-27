<?php session_start();
if(isset($_SESSION['User'])){
    require 'views/index.view.php';
  }else{
      header('Location: login.php');
  }
?>