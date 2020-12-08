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
    <script src="https://kit.fontawesome.com/8b850b0e85.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body id="body">
   <header class="menuContainer"></header>
   
  <div class="container">
    <h1>Purchase history</h1>
        <div class="row">  
           <div class="col">
            <input type="date" name="bday" max="3000-12-31" min="1000-01-01" class="ml-1 mt-1" id="FechaInicio""> to
            <input type="date" name="bday" max="3000-12-31" min="1000-01-01" class="ml-1 mt-1" id="FechaFinal">
            <i class="fas fa-search" onclick="cargarCompras()"></i>
           </div>
        </div>
        </div>
        <div class="row offset-1">
          <div class="col">
          <table class="table table-responsive">
         <thead>
             <tr>
               <th>Producto</th>
               <th>Cantidad</th>
               <th>Total</th>
             </tr>
           </thead>
           <tbody id="Historial">
           </tbody>
         </table>
          </div>
        </div>

  </div>   


   <footer class="footer"></footer>
  <script src="../js/jquery-2.2.3.min.js"></script>
  <script>
      $(document).ready(function () {
      $('.menuContainer').load('../resource/navbarIndex.html');
      $('.footer').load('../resource/footer.html');
    });

   
cargarCompras();
    
  function cargarCompras() {
    let FechaDeInicio, FechaFin;
    FechaDeInicio = FechaInicio.value,
    FechaFin = FechaFinal.value;
    var today = new Date();
    if(FechaInicio.value=="") {
      FechaDeInicio = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
    }
    if(FechaFinal.value==""){
      FechaFin = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
    }
  let param = 'FechaInicio='+FechaDeInicio+'&FechaFinal='+FechaFin;
  if (FechaDeInicio > FechaFin) {
    Swal.fire(
          'Error!',
          'The start date must not be greater than the end date',
          'error'
         )
  }else{
    let peticion = new XMLHttpRequest();
     peticion.open("POST", "../db/GetCompras.php");
     peticion.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
     peticion.send(param);
     peticion.onload = function () {
       let datos = JSON.parse(peticion.responseText);
       Historial.innerHTML = "";
         for (var i = 0; i < datos.length; i++) {
           Historial.innerHTML += `
             <tr>
             <td> <img src="${datos[i].Imagen}"width="100" height="100"></td>
             <td>${datos[i].Nombre}</td>
             <td>${datos[i].Cantidad}</td>
             <td>${datos[i].Total}</td>
             </tr>
             `;
       }
      };
  }

}
</script>


</body>
</html>