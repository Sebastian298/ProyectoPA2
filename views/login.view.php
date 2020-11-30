<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Animated Login Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free Web Designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='css/bootstrap.min.css' media='all' rel='stylesheet'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/animate.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->
</head>
<body>

	<div class="agileits">
		<h1>Login for enter to JsNet</h1>
		<div class="w3-agileits-info">
			<form class='form animate-form' id='form1' action="login.php" method="POST">
				<p class="w3agileits">Login Here</p>
				<div class='form-group has-feedback w3ls'>
					<label class='control-label sr-only' for='username'>Username</label> 
					<input class='form-control' id='userName' name='userName' placeholder='User Name' type='text'onpaste="return false">
					<span class='glyphicon glyphicon-ok form-control-feedback'></span>
				</div>
				<div class='form-group has-feedback agile'>
					<label class='control-label sr-only' for='password'>Password</label> 
					<input class='form-control w3l' id='password' name='Password' placeholder='Password' type='password'><span class='glyphicon glyphicon-ok form-control-feedback' onpaste="return false"></span>
				</div>
				<div class='submit w3-agile'>
				   <button type="submit" class="btn btn-outline-success">SUBMIT</button>
				</div>
				<?php if(!empty($errores)):?>
                   <div class="error">
                       <ul>
                        <?php
                           echo $errores;
                        ?>
                       </ul>
                    </div>
               <?php endif; ?>
			</form>
			<div class="w3-agile-copyright">
			  <p class="agileinfo" style="margin-top:30px"> OR | Register Now <a href="views/registerUser.view.php" target="_blank">JsNet</a></p>
			</div>
		</div>
	</div>	
	
	<div class="w3-agile-copyright">
		<p class="agileinfo"> © 2020 Login Form . All rights reserved | Design by <a href="http://JsNet.com/" target="_blank">JsNet</a></p>
	</div>
	<script src="js/jquery-2.2.3.min.js"></script>
	<script src='js/jquery.validate.min.js'></script>
	<script src='js/formAnimation.js'></script>
	<script src='js/shake.js'></script> 

</body>
</html>