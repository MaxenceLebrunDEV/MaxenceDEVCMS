<?php
setcookie('log',  null, time() + (1), "/");
      include '../pdo.php';
     
        $name = trim($_POST['name']);
        $img = trim($_POST['img']);
        $description = trim($_POST['description']);
        $tva = trim($_POST['tva']);
        $price = trim($_POST['price']);
        
     $category =  trim($_POST['category']);
        $stock = trim($_POST['stock']);

        if(empty($name) || empty($img) || empty($description) || empty($tva) || empty($price) || empty($stock)){
            
          $error="Un champs est vide merci de le remplir";
        
          setcookie('log',  $error, time() + (1), "/");
          
        } else {
          $success="Félicitation votre produit a été ajouté";


          setcookie('log',  $success, time() + (1), "/");
          $login = $pdo->prepare("INSERT INTO `tb_produit` (`name`, `img`, `description`, `tva`, `price`, `stock`, `category`) VALUES ('$name', '$img', '$description', '$tva', '$price', '$stock', '$category');");
          $login->bindParam('$name',$name);
          $login->bindParam('$img',$img);
          $login->bindParam('$description',$description);
          $login->bindParam('$tva',$tva);
          $login->bindParam('$price',$price);
          $login->bindParam('$stock',$stock);
          $login->bindParam('$category',$category);
          $login->execute();
          $data = $login->fetch(PDO::FETCH_ASSOC);
        }
        
          
          header("location: addaproduct.php");
        
          
        
      
     