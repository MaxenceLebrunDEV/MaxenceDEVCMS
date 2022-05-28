<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ajouter des images | Tableau de bord</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../assets/css/bootstrap/css/bootstrap.css">

  <link rel="icon" href="../../assets/img/favicon.png">
  <link rel="stylesheet" href="../../assets/plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="../../assets/plugins/datatables/jquery.dataTables.css">
  <link rel="stylesheet" href="../../assets/plugins/datatables/dataTables.bootstrap.css">


  <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/uikit@latest/dist/css/uikit.min.css">
		<link rel="stylesheet" type="text/css" href="../../assets/css/dashboard.css">
<link
  rel="stylesheet"
  href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css"
  type="text/css"
/>


  <!-- Font Awesome --><script src="https://kit.fontawesome.com/aebd204a73.js" crossorigin="anonymous"></script>
  <!-- Theme style -->
  <link rel="stylesheet" href="../../assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../../assets/dist/css/skins/skin-blue.min.css">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php 
  
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);
  include '../session.php';
 
if ($_SESSION['level'] != "admin") {

 header("location:../../login.php");
} else if ($_SESSION['level'] == null) {
 header("location:../../login.php");

}

?>

<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="../dashboard.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>MPO</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">MPO-47</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="<?php echo $_SESSION['img'] ?>" class=" user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php echo $_SESSION['name'] ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?php echo $_SESSION['img'] ?>" class="img-circle" alt="User Image">
                <p>
                  <?php echo $_SESSION['name'] ?> - <?php echo $_SESSION['jobs'] ?>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="../logout.php" class="btn btn-default btn-flat">Déconnexion</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo $_SESSION['img'] ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php   echo $_SESSION['name'] ?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> En ligne</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <li ><a href="../../dashboard.php"><i class="fa fa-dashboard"></i> <span>Retour</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><i class="fa fa-dashboard"></i> Ajouter une image à la librairie</h1>
      <ol class="breadcrumb">
        <li><a href="../../dashboard.php"><i class="fa fa-dashboard"></i> Tableau de bord</a></li>
        <li class="active"><a>Ajout d'image</a></li>
      </ol>
    </section>
    <!-- Main content -->
  <section class="content">
    

        <div class="box box-success">
          <div class="box-header with-border">
            <h4 class="box-tittle"><i class="fa fa-graduation-cap"></i> Image Library</h4>
              <div class="box-tools pull-right">
              </div>
          </div>
          <div class="box-body">
        <!-- Form with image-->
        <div class="form-group">
            <div class="row">
                <div class="col-md-12">
                <div class="form-group">
                <?php
            if (isset($_COOKIE['log'])) {
              
          $log = $_COOKIE['log'];
              echo  '<div class="alert alert-primary alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>'.$log. '</strong>
                     </div>' ;
            }
           ?> 
                    <form action="img.php" method="post" enctype="multipart/form-data">
                    <?php
         
         if (isset($_COOKIE['error'])) {
           $erreur = $_COOKIE['error'];
           echo  '<div uk-alert>
           <a class="uk-alert-close" uk-close></a>
           <p>'.$erreur.'</p></div>';
        }
        ?> 
                    <label class="control-label">Importer des images:</label>
                    <br>*Pour ajouter plusieurs images, séparer les images par une virgule. (Windows)
                    <br>*Pour ajouter une image, cliquer sur le bouton "Parcourir" et sélectionner l'image. (Mac+Windows)
                    <br>*Le chargement peut parfois prendre du temps selon votre connexion et nombre d'utilisateurs sur le site.

                    <br>
                  
<div class="my-dropzone"><div class="js-upload uk-placeholder uk-text-center">
    <span uk-icon="icon: cloud-upload"></span>
    <span class="uk-text-middle">Upload une image</span>
    <div uk-form-custom>
    <input type="file"  name="fileToUpload" id="fileToUpload" multiple>
    
    <input type="text" class="uk-input" name="title" placeholder="Veuiller choisir un titre à l'image">
                    </div>
</div></div>

                    <button type="submit" name="img" class="btn btn-success btn-sm">Téléverser</button>
                    </form>
                </div>
                </div>

          </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->























  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">

    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2022 <a href="#">MaxenceDEV</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <!--<ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
         /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <!--<ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                  <span class="label label-danger pull-right">70%</span>
                </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="../../assets/plugins/jQuery/jquery-2.2.3.min.js"></script>

<!-- Bootstrap 3.3.6 -->
<script src="../../assets/css/bootstrap/js/bootstrap.min.js"></script>

<script>
  var myDropZone = new Dropzone("body", {
    "paramName" : "image",
    "url" : "https://upload.imagekit.io/rest/api/image/mpo47",
    "parallelUploads" : 10,
    "maxFilesize" :25
});
</script>

<!-- AdminLTE App -->
<script src="../../assets/dist/js/app.min.js"></script>
</body>
</html>