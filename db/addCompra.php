<?php session_start();

if ($_SERVER['REQUEST_METHOD']=='POST') {

  
   
    try {
        $metodo = $_POST['metodoID'];
        $userID=$_SESSION['id'];
        $IDCompra = 1 ; //Se define 1 por si no hay compras en la BDD, indicar que es la primera compra
       
        include 'db_conexion.php';
        //Realizamos la consulta donde obtenemos el último ID insertado (Que viene siendo el mayor)
        $stm=$conexion->prepare("SELECT CompraID from compras ORDER BY CompraID DESC LIMIT 1");
        $stm->execute();
        $result = $stm->get_result();

    while ($row = $result->fetch_assoc()){
        //En caso de que devuelva un ID la consulta anterior, le sumamos 1 para indicar que es el siguiente
        //caso contrario se inserta el 1 predefinido
       $IDCompra = $row['CompraID'] + 1;
    }
    //Recorremos el carrito y vamos insertando cada producto
    foreach ($_SESSION['carrito'] as $key => &$val) {
        $idProd = $val['ProductoID'];
        $cantidad = $val['Cantidad'];
        $query = "INSERT INTO compras (CompraID,UserID, ProductoID, MetodoID, Cantidad) 
        VALUES ('$IDCompra','$userID','$idProd','$metodo','$cantidad')";
        mysqli_query($conexion,$query);
    }

       //Terminamos la conexión
        mysqli_close($conexion);
        unset( $_SESSION["carrito"] ); //Limpia el carrito
        return;
        
    } catch (Exception $e) {
        echo 'Error!: ',  $e->getMessage(), "\n";
    }
}



?>