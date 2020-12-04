<?php session_start();
if (!(isset($_SESSION['user']))) {
   header('Location: ../login.php');
}
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Basket</title>
</head>

<body>
 <div class="menuContainer"></div>

 <iframe src="../resource/vistaCarrito.php" frameborder="0" width="60%" height="650"></iframe>
  <footer class="footer"></footer>
  <script src="../js/jquery-2.2.3.min.js"></script>
  <script>
      $(document).ready(function () {
      $('.menuContainer').load('../resource/navbarIndex.html');
      $('.footer').load('../resource/footer.html');
      
    });
  </script>
</body>
</html>

