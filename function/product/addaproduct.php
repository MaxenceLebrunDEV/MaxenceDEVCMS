
<html>
  <head>
    <title>MPO-47</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="../../assets/css/bootstrap/css/bootstrap.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../assets/plugins/font-awesome/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../assets/dist/css/AdminLTE.min.css">

		<link rel="icon" href="../../assets/img/favicon.png">
    <link rel="stylesheet" href="../../assets/plugins/iCheck/square/blue.css">
  </head>  <body class="hold-transition login-page ">

  
      
     
    
    <div class="login-box">
      <div class="login-logo">
        <b>MPO-47</b>
      </div>
      <div class="login-box-body">
          <p class="login-box-msg">Ajouter un produit </p>  
          <?php
            if (isset($_COOKIE['log'])) {
              
          $log = $_COOKIE['log'];
              echo  '<div class="alert alert-primary alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>'.$log. '</strong>
                     </div>' ;
            }
           ?>    
               
          <form action="addproduct.php" method="post">
            <div class="form-group has-feedback">
              <input type="text" class="form-control" name="name" placeholder="Titre">
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="text" class="form-control" name="img" placeholder="Image">
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="text" class="form-control" name="description" placeholder="Description">
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div><div class="form-group has-feedback">
              <input type="text" class="form-control" name="price" placeholder="Prix">
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="text" class="form-control" name="tva" placeholder="TVA">
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="text" class="form-control" name="stock" placeholder="Stock">
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <select  name="category" class="custom-select rounded-0">

			
            <option  value="">Aucune catégorie</option>
                <option  value="0">-Rayonnage et stockage</option>
                <option   value="1">-Équipement de magasin </option>
                <option   value="2">-Gondole de magasin</option>
                <option   value="3">-Manutention et levages</option>
                <option   value="4">-Mobilier de bureau</option>
                <option  value="5">-Autres </option>
</select>

            
<br>
<br>

            <button type="submit"  class="btn btn-success btn-block btn-flat"><span class="glyphicon glyphicon-log-in"></span><b> Ajouter un produit</b></button>
            
          </form>
          <a href="../../dashboard.php"> <button  class="btn btn-warning btn-block btn-flat"><span class="glyphicon glyphicon-log-in"></span><b> Retour</b></button></a>
      </div>
    </div>




    <script src="../../assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
    
    <script src="../../assets/css/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
