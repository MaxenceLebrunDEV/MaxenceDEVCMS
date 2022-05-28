<?php
include 'pdo.php';

$customquery = $_GET['product'];

if ($customquery == "addproduct") {
  $name = $_POST['name'];
  $description = $_POST['description'];
  $tva = $_POST['tva'];
  $price = $_POST['price'];
  $stock = $_POST['stock'];
  $image = $_POST['img'];
  $pdo = New PDO ("mysql:host=localhost;dbname=pdo-mpo","maxencedev","AXEL2007");
 $sql = "INSERT INTO `tb_produit` (`name`, `img`, `description`, `tva`, `price`, `stock`) VALUES (':name', ':img', ':description', ':tva', ':price', ':image');";
  $request = $pdo->prepare($sql);

  $request->bindParam(':name',$name);
  $request->bindParam(':description',$description);
  $request->bindParam(':tva',$tva);
  $request->bindParam(':price',$price);
  $request->bindParam(':stock',$stock);
  $request->bindParam(':img',$img);

  $request->execute();
}

?>
