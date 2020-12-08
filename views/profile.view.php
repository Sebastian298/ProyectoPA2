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
    <title>JsNet México | For engineers, by engineers</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <link rel="stylesgeet" href="https://rawgit.com/creativetimofficial/material-kit/master/assets/css/material-kit.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/stylesProfile.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="../js/Profile.js"></script>
    <link rel="stylesheet" href="../css/darkMode.css"> 
</head>
<header class="menuContainer" ></header>
<body class="profile-page" id="profile-page">
    <div class="page-header header-filter" data-parallax="true" style="background-image:url('https://cdn.discordapp.com/attachments/616076985231343665/783154896773709834/thumb-1920-1034735.png');"></div>
    <div class="main main-raised">
		<div class="profile-content" id="profile">
            <div class="container">
                <div class="row">
	                <div class="col-md-6 ml-auto mr-auto">
        	           <div class="profile">
	                        <div class="avatar">
	                            <img src="https://cdn.discordapp.com/attachments/616076985231343665/783150570591617094/ChrisEvans.jpg" alt="Circle Image" class="img-raised rounded-circle img-fluid">
	                        </div>
	                        <div class="name">
                            <?php
                        try {
                         include '../db/db_conexion.php';
                         $query = "SELECT * FROM usuario where UserID=".$_SESSION['id'];
                         $resultado = mysqli_query($conexion,$query);
                      while($array = mysqli_fetch_array($resultado)) {
                            echo '
                        <h3 class="title">'.$array['Usuario'].'</h3>
                        <input type="text" id="userID" value="'.$array['UserID'].'"></>
                        <h6><b>Name: </b></h6>
                        <input type="text" id="nameUser" class="form-control" value="'.$array['Nombre'].'"</>
                        <h6><b>Last Name: </b></h6>
                        <input type="text" id="lName" class="form-control" value="'.utf8_decode($array['Apellidos']).'"></>
                        <h6><b>Email: </b></h6>
                        <input type="text" id="emailUser" class="form-control" value="'.$array['CorreoElectronico'].'"></b>
                        <h6><b>Phone: </b></h6>
                        <input type="text" class="form-control" id="tel" value="'.$array['Telefono'].'"></>';
                         }
                            } catch (PDOException $e) {
                              echo 'Error!: ',  $e->getMessage(), "\n";
                                    }
                                    ?>						
                            </div>
                        </div>
    	            </div>
                </div>
                <button type="button" class="btn btn-outline-success" onclick="updateUser()">Update</button>
              <a href="PurchaseHistory.view.php"> <button type="button" class="btn btn-outline-primary"">Show purchase history</button></a> 
            </div>
            </div>
        </div>
	</div>
	
	<footer class="footer"></footer>
  <script src="../js/jquery-2.2.3.min.js"></script>
  <script src="../js/registerUser.js"></script>
  <script src="../resource/darkMode.js"></script>
  <script>
      $(document).ready(function () {
      $('.menuContainer').load('../resource/navbarIndex.html');
      $('.footer').load('../resource/footer.html');
    });
  </script>
    
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>

</body>
</html>