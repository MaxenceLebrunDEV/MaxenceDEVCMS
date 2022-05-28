<?php 
include '../pdo.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
     
     $id =  $_POST['id'];
     $name = $_POST['name'];
     $username = $_POST['username'];
     $img = $_POST['img'];
     $jobs = $_POST['jobs'];
     $tel = $_POST['tel'];
echo $id;
     echo $name;
echo $username;
echo $img;
echo $jobs;
echo $tel;

        $sqlrequest = "UPDATE `tb_admin` SET `name` = '$name', `username` = '$username', `img` = '$img', `jobs` = '$jobs', `tel` = '$tel'   WHERE `tb_admin`.`id` = $id;";
        $request = $pdo->prepare($sqlrequest);
        $request->execute();
      
     
        $success="Votre profil a été modifié pour voir les modifications: <br>Veuillez vous reconnecter";
 
 
        setcookie('log',  $success, time() + (1), "/");
        
        header('Location: ../profil.php');
       ?>