<?php session_start();

if ($_SERVER['REQUEST_METHOD']=='POST') {

  
   
    try {

        // $idProd = $_POST['idProducto'];
        // $cantidad = $_POST['cantidad'];
        $metodo = $_POST['metodoID'];
        // $compraID=$_POST['compraID'];
        // $userID=$_SESSION['id'];
       
        include 'db_conexion.php';
        $query = "INSERT INTO compras (CompraID,UserID, ProductoID, MetodoID, Cantidad) 
        VALUES ('$compraID','$userID','$idProd','$metodo','$cantidad')";
        mysqli_query($conexion,$query);
        mysqli_close($conexion);
        unset( $_SESSION["carrito"] ); //Limpia el carrito
        return;
        
    } catch (Exception $e) {
        echo 'Error!: ',  $e->getMessage(), "\n";
    }
}



?>