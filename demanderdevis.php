
<html>
  <head>
    <title>MPO-47</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="../assets/css/bootstrap/css/bootstrap.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/plugins/font-awesome/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">

		<link rel="icon" href="/assets/img/favicon.png">
    <link rel="stylesheet" href="../assets/plugins/iCheck/square/blue.css">
  </head>  
  
  <body class="hold-transition login-page ">
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 if (isset($_POST['adddevis'])) {
   echo "ok";
     include './function/pdo.php';
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $adresse = $_POST['adresse'];
  $email = $_POST['email'];
  $commande = $_POST['commande'];

  $sql = "INSERT INTO `devis` (`nom`,	`prenom`,	`adresse`,	`email`,	`commande`,	`status`) VALUES ('$nom', '$prenom', '$adresse', '$email', '$commande', 'Non payé');";
    $adddevis = $pdo->prepare($sql);
    $adddevis->bindParam('$nom',$nom);
    $adddevis->bindParam('$prenom',$prenom);
    $adddevis->bindParam('$adresse',$adresse);
    $adddevis->bindParam('$commande',$commande);
    $adddevis->bindParam('$email',$email);
            $adddevis->execute();

            
          $success="Félicitation votre devis a été créer";

          setcookie('log',  $success, time() + (1), "/");
          header("location: demanderdevis.php?id=$commande");

    }
    
  
?>
    
    <div class="login-box">
      <div class="login-logo">
        <b>MPO-47</b>
      </div>
      <div class="login-box-body">
          <p class="login-box-msg">Créer un devis</p>  
          <?php
            if (isset($_COOKIE['log'])) {
              
          $log = $_COOKIE['log'];
              echo  '<div class="alert alert-primary alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>'.$log. '</strong>
                     </div>' ;
            }
           ?> 
             
          <form action="demanderdevis.php" method="post">
          <div class="form-group has-feedback">
              <input type="text" class="form-control" name="prenom" placeholder="Prénom">
              <span class="glyphicon  form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="text" class="form-control" name="nom" placeholder="Nom">
              <span class="glyphicon  form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="text" class="form-control" name="adresse" placeholder="adresse">
              <span class="glyphicon form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="text" class="form-control" name="email" placeholder="Email">
              <span class="glyphicon form-control-feedback"></span>
            </div>
              <input type="text" class="form-control" name="commande" hidden placeholder="ID du produit" value="<?php echo $_GET['id'] ?>">
           
            
            </div>
            <button type="submit" name="adddevis" class="btn btn-success btn-block btn-flat"><b> Créer le devis</b></button>
          </form>
          <a href="../index.php"> <button  class="btn btn-warning btn-block btn-flat"><b> Annuler</b></button></a>
      </div>
    </div>
    <script src="../assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <script src="../assets/css/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/plugins/iCheck/icheck.min.js"></script>
  </body>
</html>
