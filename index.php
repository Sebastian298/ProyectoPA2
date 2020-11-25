<?php session_start();
if(isset($_SESSION['User'])){
    require 'content.php';
  }else{
      header('Location: login.php');
  }
?>