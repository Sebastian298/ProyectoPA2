<?php session_start();

if ($_SERVER['REQUEST_METHOD']=='POST') {
    $idProduct = $_POST['idProduct'];
    $contador = 0;

    foreach ($_SESSION['carrito'] as $key => &$val) {
        if ($val['ProductoID'] == $idProduct) {
            break;
        }
        $contador++;
    }
    unset($_SESSION['carrito'][$contador]);
    return;
}

?>