<?php session_start();

if ($_SERVER['REQUEST_METHOD']=='POST') {
    
    $IdProd = $_POST['IdProducto'];
    $quantity = $_POST['Quantity'];

foreach ($_SESSION['carrito'] as $key => &$val) {
    if ($val['ProductoID'] == $IdProd) {
        $val['Cantidad']=$quantity;
        return;
    }
}
}
?>