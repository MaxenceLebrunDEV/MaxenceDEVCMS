
<html>
  <head>
    <title><?php 
						$dirsubtr = substr(dirname(__FILE__), 0, -9);
						$jsonin = file_get_contents($dirsubtr.'/config/cms.json');
						$in = json_decode($jsonin, true);
						
						echo $in['entreprise'];
						?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="../assets/css/bootstrap/css/bootstrap.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/plugins/font-awesome/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">

		<link rel="icon" href="../assets/img/favicon.png">
    <link rel="stylesheet" href="../assets/plugins/iCheck/square/blue.css">
  </head>  
  
  <body class="hold-transition login-page ">
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 if (isset($_POST['register'])) {
   echo "ok";
     include 'pdo.php';
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $jobs = $_POST['jobs'];
  $name = $_POST['name'];
  $level = $_POST['level'];
  $email = $_POST['email'];
  $sql = "INSERT INTO `tb_admin` (`name`, `username`, `password`, `level`, `email`, `tel`, `jobs`) VALUES ('$name', '$username', '$password', '$level', '$email', 'null', '$jobs');";
    $register = $pdo->prepare($sql);
    $register->bindParam('$username',$username);
    
    $register->bindParam('$name',$name);
            $register->bindParam('$password',$password);
            $register->bindParam('$email',$email);
            $register->bindParam('$level',$level);
            $register->bindParam('$jobs',$jobs);
            $register->execute();
          echo $sql;  
            echo "\nPDO::errorInfo():\n";
            print_r($register->errorInfo());
         
  }
?>
    
    <div class="login-box">
      <div class="login-logo">
        <b><?php 
						$dirsubtr = substr(dirname(__FILE__), 0, -9);
						$jsonin = file_get_contents($dirsubtr.'/config/cms.json');
						$in = json_decode($jsonin, true);
						
						echo $in['entreprise'];
						?></b>
      </div>
      <div class="login-box-body">
          <p class="login-box-msg">Ajouter un utilisateur </p>  
          
             <div class="alert alert-primary alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Lorsque vous avez cliquer sur créer l'utilisateur celui ci sera bien créer et vous serez redirigé sur le tableau de bord</strong>
                     </div>
          <form action="addauser.php" method="post">
          <div class="form-group has-feedback">
              <input type="text" class="form-control" name="name" placeholder="Prénom Nom">
              <span class="glyphicon  form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="text" class="form-control" name="email" placeholder="Email">
              <span class="glyphicon form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="text" class="form-control" name="level" readonly placeholder="Level" value="admin">
              <span class="glyphicon form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="text" class="form-control" name="username" placeholder="Nom d'utilisateur">
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="text" class="form-control" name="password" placeholder="Mot de passe">
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="text" class="form-control" name="jobs" placeholder="Métier exercée">
              <span class="glyphicon  form-control-feedback"></span>
            </div>
            <button type="submit" name="register" class="btn btn-success btn-block btn-flat"><span class="glyphicon glyphicon-log-in"></span><b> Ajouter un utilisateur</b></button>
          </form>
          <a href="../dashboard.php"> <button  class="btn btn-warning btn-block btn-flat"><span class="glyphicon glyphicon-log-in"></span><b> Retour</b></button></a>
      </div>
    </div>
    <script src="../assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <script src="../assets/css/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/plugins/iCheck/icheck.min.js"></script>
  </body>
</html>
