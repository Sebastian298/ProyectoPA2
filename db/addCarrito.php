<?php  session_start();


if($_SERVER['REQUEST_METHOD']=='POST'){
    $idProd = $_POST['IdProducto'];
    try {
        include 'db_conexion.php';
        foreach ($_SESSION['carrito'] as $key => &$val) {
            if ($val['ProductoID'] == $idProd) {
                $val['Cantidad']=$val['Cantidad']+1;
                echo json_encode( $_SESSION['carrito']);
                return;
            }
        }
       $stm=$conexion->prepare("SELECT * FROM producto WHERE ProductoID='$idProd'");
       $stm->execute();
       $result = $stm->get_result();
       $answ=[];
       
       while ($row = $result->fetch_assoc()){
           $product = [
               'ProductoID' => $row['ProductoID'],
               'Nombre' =>$row['Nombre'],
               'Imagen' =>$row['Imagen'],
               'Descripcion' =>$row['Descripcion'],
               'Precio' =>$row['Precio'],
               'Cantidad' => 1
           ];
       }
       $_SESSION['carrito'][]=$product;

    } catch (Exception $e) {
        echo 'Error!: ',  $e->getMessage(), "\n";
    }
    echo json_encode( $_SESSION['carrito']);
}
?>