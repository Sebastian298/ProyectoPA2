
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/stylesRegisterUser.css">
</head>
<body>
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
                                            <input ID="txtUserName" Class="form-control" type="text" required onpaste="return false"/>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Name</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                                            </div>
                                            <input ID="txtName" Class="form-control" type="text" required onpaste="return false"/>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                                            </div>
                                            <input ID="txtLastName" Class="form-control" type="text" required onpaste="return false"/>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                                            </div>
                                            <input ID="txtEmail" Class="form-control" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="name@example.com" required onpaste="return false"/>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Enter a valid email Or Please fill out this field.</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                            </div>
                                            <input ID="txtPassword"  type="Password" Class="form-control" required onpaste="return false"/>
                                        </div>
                                        <div id="strengthMessage"></div>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                            </div>
                                            <input ID="txtConfirmPassword" type="Password" Class="form-control" required onpaste="return false"/>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-success float-right rounded-0">Register</button>
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