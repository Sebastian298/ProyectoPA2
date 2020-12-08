<?php session_start();
if(!(isset($_SESSION['user']))){
  header('Location: ../login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JsNet México | For engineers, by engineers</title>
    <link rel="stylesheet" href="../css/darkMode.css"> 
</head>
<body id="body">
   <header class="menuContainer"></header>
   <div class="imgOne">
    <div class="textOne">
      Lorem ipsum.
    </div>
    <div class="textTwo">
      Lorem dolor
    </div>
    <div class="textThree">
      Lorem ipsum dolor
    </div>
  </div>
  <section class="blue">
    <h1>Lorem ipsum dolor sit amet.</h1>
    <p>
    </p>
  </section>
  <div class="imgTwo">
    <div class="textFour">
      Lorem ipsum dolor sit.
    </div>
  </div>
  <section class="blue" id="blue">
    <h2>Lorem ipsum dolor sit amet.</h2>
    <p>
    </p>
  </section>
  <div class="imgThree"></div>
  <section class="blue">
    <h3>Lorem ipsum dolor sit amet.</h3>
  </section>
  <div class="imgFour"></div>
  <footer class="footer"></footer>
  <script src="../js/jquery-2.2.3.min.js"></script>
  <script src="../resource/darkMode.js"></script>
  <script>
      $(document).ready(function () {
      $('.menuContainer').load('../resource/navbarIndex.html');
      $('.footer').load('../resource/footer.html');
    });
  </script>
</body>
</html>