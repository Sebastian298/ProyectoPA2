<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JsNet México| For engineers, by engineers</title>
</head>
<body>
   <header class="menuContainer"></header>

   <div class="container">
      <div class="row offset-3" style="margin-top:50px">
             <h3 class="text-primary">Address Information</h3>
             <form class="was-validated">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Outdoor Number</label>
                  <input type="text" class="form-control" placeholder="1234" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required onpaste="return false"/>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Interior number</label>
                  <input type="text" class="form-control" placeholder="1234" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required onpaste="return false"/>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputAddress">Street</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" required onpaste="return false">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group">
                <label for="inputAddress2">Suburbs</label>
                <input type="text" class="form-control" id="inputAddress2" onkeypress='return event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 97 &&  event.charCode <=122 ' required onpaste="return false">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputCity">City</label>
                  <input type="text" class="form-control" id="inputCity" onkeypress='return event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 97 &&  event.charCode <=122 ' required onpaste="return false">
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group col-md-4">
                  <label for="inputState">State</label>
                  <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>Tamaulipas</option>
                    <option>Jalisco</option>
                    <option>Sinaloa</option>
                    <option>Guerrero</option>
                    <option>Tabasco</option>
                  </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="inputZip">Zip</label>
                  <input type="text" class="form-control" id="inputZip" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required onpaste="return false">
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
              </div>
              <button type="button" class="btn btn-outline-success">Success</button>
      </form>
       </div>
   </div>
  
  <footer class="footer"></footer>


  <script src="../js/jquery-2.2.3.min.js"></script>
  <script>
      $(document).ready(function () {
      $('.menuContainer').load('../resource/navbar.html');
      $('.footer').load('../resource/footer.html');
    });
  </script>
</body>
</html>