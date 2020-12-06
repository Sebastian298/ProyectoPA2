<?php session_start();
$xml = new XMLWriter();
$xml->openURI('cart'.$_SESSION['id'].'.xml');
$xml->setIndent(true);
$xml->setIndentString('    ');
$xml->startDocument('1.0', 'UTF-8');
    $xml->startElement('xml');
            foreach($_SESSION['carrito'] as $product => $item) {
                $xml->startElement('Product');
                    $xml->writeElement('ID', $item['ProductoID']);
                    $xml->writeElement('Name', $item['Nombre']);
                $xml->endElement();
            }
    $xml->endElement();
$xml->endDocument();
var_dump($xml);
$xml->flush();
unset($xml);
?>