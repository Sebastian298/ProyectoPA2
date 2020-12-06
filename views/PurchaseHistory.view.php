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
</head>
<body>
   <header class="menuContainer"></header>
   
  <div class="container">
    <h1>Purchase history</h1>
        <div class="row offset-1">
        <input type="date" name="bday" max="3000-12-31" min="1000-01-01" class="ml-1 mt-1" id="FechaInicio""> to
                    <input type="date" name="bday" max="3000-12-31" min="1000-01-01" class="ml-1 mt-1" id="FechaFinal">
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
    var today = new Date();
    if(FechaInicio.value=="") {
      FechaDeInicio = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
    }
    if(FechaFinal.value==""){
      FechaFin = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
    }
  let param = 'FechaInicio='+FechaDeInicio+'&FechaFinal='+FechaFin;

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

 /*
//Calando AJAX
$("#FechaInicio").change(function(){
    //Recibimos los valores de los datetime
    var fechaini = $(this).val();
    var fechafinal = $("#datepicker2").val();

  if(fechafinal==""){ //En caso de que la fecha no tenga nada, le asignamos el mismo valor de la primera fecha para no saltar ningún error.
    fechafinal=fechaini 
  }
//Mandamos mediante Ajax las fechas para cargar las gráficas sin tener que actualizar la página.
    $.ajax({
        url: 'php/PlatillosMasVendidos.php',
        type: 'post',
        data: { fechainicio: fechaini, fechafin: fechafinal },
        dataType: 'JSON', //Le decimos al JQuery que se ponga trucha porque va a recibir un JSON para que lo parsee.
        success:function(response){
          //Al ejecutarse correctamente ingresará aquí
          var arrPlatillos = [];
            var len = response.length;
           /* for( var i = 0; i<len; i++){ //Recorremos el JSON para guardar los datos de los platillos en un arreglo de objetos.
                var cantidad = response[i]['cantidad'];
                var nombre = response[i]['nombre'];
                var platillo = { Cantidad: cantidad, Nombre: nombre };//Creamos el objeto
                arrPlatillos[i] = platillo; //Lo agregamos al arreglo.
            }
            //Instanciamos una graficaaaaaaaa
            CrearGrafica(arrPlatillos); var cantidad = []
            var nombre = []
            for( var i = 0; i<len; i++){
               cantidad.push(response[i]['cantidad']);
               nombre.push(response[i]['nombre']);
            }


CrearGrafica(cantidad,nombre);
        } //Fin del success
    });
    
});

});*/

  </script>


</body>
</html>