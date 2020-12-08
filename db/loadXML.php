<?php session_start();
$target_dir = "../resource/";
$target_file = $target_dir . 'Mcqueen'.$_SESSION['id'];
$name = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($name,PATHINFO_EXTENSION));

if (file_exists($target_file)) {
    unlink($target_file);
}


if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}


if($imageFileType != "xml"){
  echo "Sorry, only XML, files are allowed.";
  $uploadOk = 0;
}


if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    $contador = 0;
    $id;
    $nombre;
    $img;
    $descripcion;
    $precio;
    $cantidad;
    $xml=simplexml_load_file($target_file);
    unset($_SESSION['carrito']);
    foreach($xml->children() as $child)
    {
        // echo $child->getName() . ": " . $child . "<br>";
      switch ($child->getName()) {
          case 'ID':
              $id = $child;
              break;
          case 'Name':
            $nombre = $child;
            break;
        case 'Description':
            $descripcion = $child;
            break;
        case 'Price':
          $precio = $child;
          break;
        case 'Quantity':
            $cantidad = $child;
            break;
        case 'Image':
            $img = $child;
            $product = [
                'ProductoID' => (string)$id,
                'Nombre' =>(string)$nombre,
                'Imagen' =>(string)$img,
                'Descripcion' =>(string)$descripcion,
                'Precio' =>(string)$precio,
                'Cantidad' => (string)$cantidad
            ];
            $_SESSION['carrito'][]=$product;
            break;
      }
      $contador++;
    }
    header("Location: ../resource/vistaCarrito.php");
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

?>