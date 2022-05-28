<?php 
include '../pdo.php';
     
     
     $id = trim($_POST['id']);
     $name = trim($_POST['name']);
     $img = trim($_POST['img']);
     $description = trim($_POST['description']);
     $tva = trim($_POST['tva']);
     $price = trim($_POST['price']);
     $stock = trim($_POST['stock']);
     $category =  trim($_POST['category']);
     if($stock == 0){
         
      
      $sqlrequest = "DELETE FROM `tb_produit` WHERE `tb_produit`.`id` = $id";
      $request = $pdo->prepare($sqlrequest);
      $request->execute();
    }else{
      if(empty($name) || empty($price)){
         
        $error="Un champs est vide merci de le remplir";
      
        setcookie('log',  $error, time() + (1), "/");
        
      } else {
        $success="Félicitation votre produit a été modifié";
 
 
        setcookie('log',  $success, time() + (1), "/");
        $sqlrequest = "UPDATE `tb_produit` SET `name` = '$name', `img` = '$img', `description` = '$description',`category` = '$category', `tva` = '$tva', `price` = '$price', `stock` = '$stock' WHERE `tb_produit`.`id` = $id";
        $request = $pdo->prepare($sqlrequest);
        $request->execute();
      }
    }
          header("location: ../modifierunproduit.php?id=$id");
       ?>