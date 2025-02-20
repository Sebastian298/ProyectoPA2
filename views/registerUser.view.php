
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JsNet México | For engineers, by engineers</title>
    <link rel="stylesheet" href="../css/stylesRegisterUser.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link rel="stylesheet" href="../css/darkMode.css"> 
</head>
<body id="body">
    <header class="menuContainer"></header>
    <form id="form1" class="was-validated" novalidate>
        <div class="container py-3">
            <h4 class="text-center text-uppercase">JsNet.com</h4>
            <div class="row">
                <div class="col-md-12">            
                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <div class="card border-secondary">
                                <div class="card-header">
                                    <h3 class="mb-0 my-2">Sign Up</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>User Name</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                                            </div>
                                            <input ID="txtUserName" Class="form-control" name="username" pattern="^(?![_.0-9])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$" type="text"  required onpaste="return false"/>
                                            <div id="valid1" class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Name</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                                            </div>
                                            <input ID="txtName" Class="form-control" name="name" pattern="^[a-zA-Záéíóú\s]*$" type="text" required onpaste="return false"/>
                                            <div id="valid2" class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                                            </div>
                                            <input ID="txtLastName" Class="form-control" name="lastname" pattern="^[a-zA-Záéíóú\s]*$" type="text" required onpaste="return false"/>
                                            <div id="valid3" class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                            </div>
                                            <input ID="txtPhone" placeholder="+52" Class="form-control" pattern="[0-9]*$" name="phonenumber" type="text"  required onpaste="return false"/>
                                            <div id="valid4" class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-email"></i></span>
                                            </div>
                                            <input ID="txtEmail" Class="form-control" name="email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="name@example.com" required onpaste="return false"/>
                                            <div id="valid5" class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Enter a valid email Or Please fill out this field.</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                            </div>
                                            <input ID="txtPassword"  type="Password" name="password" Class="form-control" required onpaste="return false"/>
                                        </div>
                                        <div id="strengthMessage"></div>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-success float-right rounded-0" onclick="registerUser()">Register</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <footer class="footer"></footer>
  <script src="../js/registerUser.js"></script>
  <script src="../resource/darkMode.js"></script>
  <script src="../js/jquery-2.2.3.min.js"></script>
  <script src="../js/validatePassword.js"></script>
  <script>
      $(document).ready(function () {
      $('.menuContainer').load('../resource/navbar.html');
      $('.footer').load('../resource/footer.html');
    });
    
  </script>
</body>
</html>