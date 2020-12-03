<?php session_start();
if (isset($_SESSION['carrito'])) {
    echo json_encode($_SESSION['carrito']);
}
?>