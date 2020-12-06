<?php session_start();

if ($_SERVER['REQUEST_METHOD']=='POST') {
    $UserID=$_SESSION['id'];
    $FechaInicio = $_POST['FechaInicio'];
    $FechaFinal = $_POST['FechaFinal'];
    
  

    include 'db_conexion.php';

    $stm=$conexion->prepare("SELECT producto.Nombre,Cantidad, Cantidad*producto.Precio as 'Total',producto.Imagen FROM compras 
    inner join producto on compras.ProductoID= producto.ProductoID
    where UserID = $UserID AND compras.FechaCompra>='$FechaInicio' AND compras.FechaCompra<='$FechaFinal'
    ");
    $stm->execute();
    $result = $stm->get_result();
    $answ=[];

    while ($row = $result->fetch_assoc()){
        $PurchaseHistory = [
            'Nombre' => $row['Nombre'],
            'Cantidad' =>$row['Cantidad'],
            'Total' =>$row['Total'],
            'Imagen' =>$row['Imagen']
        ];
        array_push($answ,$PurchaseHistory);
    }
    echo json_encode($answ);
}


?>