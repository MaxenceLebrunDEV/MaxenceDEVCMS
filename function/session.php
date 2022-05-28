<?php

session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



include 'pdo.php';

if (isset($_POST['register'])) {
     
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$username = trim($_POST['username']);
$password = md5(trim($_POST['password']));
$jobs = trim($_POST['jobs']);
$name = trim($_POST['name']);
$level = trim($_POST['level']);
$email = trim($_POST['email']);
  $register = $pdo->prepare("INSERT INTO `tb_admin` (`username`, `password`, `level`, `email`, `jobs`) VALUES ('$username', '$password', '$level', '$email', '$jobs');");
          $register->bindParam('$username',$username);
          $register->bindParam('$password',$password);
          $register->bindParam('$email',$email);
          $register->bindParam('$level',$level);
          $register->bindParam('$jobs',$jobs);
          $register->execute();
          
  
}
if (isset($_POST['process-login'])) {
        $username = trim($_POST['username']);
        $password = md5(trim($_POST['password']));

        if ($username=="" || $password=="") {
          $error="Username and Password is Required";
        }
        else {
          $login = $pdo->prepare("SELECT * FROM `tb_admin` WHERE username=:username");
          $login->bindParam(':username',$username);
          $login->execute();

          $data = $login->fetch(PDO::FETCH_ASSOC);
          if (COUNT($data['username']) == 1 && $password == $data['password']) {
            
            session_unset();
            session_start();
            
            $id = $data['id'];
              $username = $data['username'];
              $level = $data['level'];
              $name = $data['name'];
              $jobs = $data['jobs'];
              $img = $data['img'];
              
            $_SESSION['id'] = $data['id'];
            
            $_SESSION['username'] = $data['username'];
            $_SESSION['level'] = $data['level'];
            $_SESSION['name'] = $data['name'];
            $_SESSION['jobs'] = $data['jobs'];
            $_SESSION['img'] = $data['img'];
            setcookie('error', null, time() + (60 * 60 * 24 * 30), "/");
            header("location:../dashboard.php");
          }
          else {
            $error="Nom d'utilisateur ou mot de passe incorrect";
            setcookie('error', $error, time() + (1), "/");
            header('Location: ../login.php');
	    $username = "";
	    $password = "";
		
          }
        }
      }


?>
