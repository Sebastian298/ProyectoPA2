<?php
//if(!isset($_SESSION['User'])) header('Location: ../login.php');
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
    <!-- Se iran creando contenedores dinamicamente con js dependiendo cuantos tipos de productos existan
    En la bd, para cada tipo es un contenedor con cards y su respectivo carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
       
        <div class="carousel-inner offset-3" style="width:50%">
            <!-- Esta parte se hara dinamica dependiendo de cuantos productos esten en la bd -->
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
             <!-- Esta parte se hara dinamica dependiendo de cuantos productos esten en la bd -->
            <div class="carousel-item active">
              <img class="d-block w-100"  src="https://www.zadock.com.py/public/3b50f0b5dd205bbda3ee3c7f0584067c.png" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100"  src="https://images.pexels.com/photos/1181354/pexels-photo-1181354.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100"  src="https://images.pexels.com/photos/1181354/pexels-photo-1181354.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Third slide">
            </div>
             <!-- Esta parte no se modificara para el usp de ajax -->
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only bg-blue">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
    </div>
    <hr>
    <div id="carouselExample" class="carousel slide" data-ride="carousel">
       
        <div class="carousel-inner offset-3" style="width:50%">
            <!-- Esta parte se hara dinamica dependiendo de cuantos productos esten en la bd -->
            <ol class="carousel-indicators">
              <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExample" data-slide-to="1"></li>
              <li data-target="#carouselExample" data-slide-to="2"></li>
            </ol>
             <!-- Esta parte se hara dinamica dependiendo de cuantos productos esten en la bd -->
            <div class="carousel-item active">
              <img class="d-block w-100"  src="https://www.zadock.com.py/public/3b50f0b5dd205bbda3ee3c7f0584067c.png" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100"  src="https://images.pexels.com/photos/1181354/pexels-photo-1181354.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100"  src="https://images.pexels.com/photos/1181354/pexels-photo-1181354.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Third slide">
            </div>
             <!-- Esta parte no se modificara para el usp de ajax -->
          <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
    </div>


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