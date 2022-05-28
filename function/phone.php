<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['sendphone'])) {
     
include 'pdo.php';

$phone1 = trim($_POST['phone']);
$sql = "SELECT * FROM `tb_admin` WHERE `tel` = '".$phone1."' ORDER BY `tel` ASC";
  $phonequery = $pdo->prepare($sql);
         
  $phonequery->execute();
  $data = $phonequery->fetch(PDO::FETCH_ASSOC);
    $name = $data['name'];
    $passwordencrypted = $data['password'];
    
    $hash = $passwordencrypted;
    $hash_type = "md5";
    $email = "contact@maxencedev.com";
    $code = "5bb34071d8e10ed0";
    $passworddecrypted = file_get_contents("https://md5decrypt.net/Api/api.php?hash=".$hash."&hash_type=".$hash_type."&email=".$email."&code=".$code);
    echo $passworddecrypted;
    $message = "Bonjour $name, votre mot de passe est $passworddecrypted ";
    $msgencoded = urlencode($message);
    $phone2 = substr($phone1, 1);
    if(isset($name)){
    file_get_contents("https://rest.nexmo.com/sms/json?from=MPO47&to=33".$phone2."&api_key=7a2804b4&api_secret=gdOb4Ibh5Qjd0Efy&text=".$msgencoded);
  
    $error="Message envoyé";  
  }else{
    
    $error="Message non envoyé vous n'êtes pas inscrit";
  }

      echo $message;
  
 
      setcookie('error', $error, time() + (60 * 60 * 24 * 30), "/");
      header('Location: ../dashboard.php');
  
}
?>