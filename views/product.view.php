<?php session_start();
if (!(isset($_SESSION['user']))) {
   header('Location: ../login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JsNet México| For engineers, by engineers</title>
    <link rel="stylesheet" href="../css/styleProduct.css">
</head>
<body>
  <div class="menuContainer"></div>
  <h5>Routers</h5>
  <div class="card-deck" id="cardsRouter">
  </div>
  <hr>
  <h5>Switches</h5>
  <div class="card-deck" id="cardsSwitch">
  </div>
  <hr>
  <h5>Access Points</h5>
  <div class="card-deck" id="cardsAccess">
  </div>
  <hr>
  <h5>Networking Cables</h5>
  <div class="card-deck" id="cardsCables">
  </div>

   <footer class="footer"></footer>
   <script src="../js/jquery-2.2.3.min.js"></script>
   <script src="../js/product.js"></script>
   <script>
        $(document).ready(function () {
          $('.menuContainer').load('../resource/navbarIndex.html');
          $('.footer').load('../resource/footer.html');
        });
        
   </script>
</body>
</html>