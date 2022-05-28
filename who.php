<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>
  <?php 
						$jsonin = file_get_contents('./assets/cms.json');
						$in = json_decode($jsonin, true);
						
						echo $in['entreprise']; ?></title>
    <script src="https://kit.fontawesome.com/aebd204a73.js" crossorigin="anonymous"></script>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src="https://code.jquery.com/jquery-1.12.2.js"></script>
   
<!-- UIkit JS --><meta name="title" content="
  <?php 
						$jsonin = file_get_contents('./assets/cms.json');
						$in = json_decode($jsonin, true);
						
						echo $in['entreprise']; ?>">
<meta name="description" content="
  <?php 
						$jsonin = file_get_contents('./assets/cms.json');
						$in = json_decode($jsonin, true);
						
						echo $in['description']; ?>.">
<meta name="keywords" content="mpo-47, mpo, MPO, MPO-47, IDEALCONCEPT, Lavardac, Samy Labaied, MPO47, mpo47, MaxenceDEV">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="French">
<meta name="author" content="MaxenceDEV">

<link rel="icon" href="/assets/img/favicon.png">
    <link rel="stylesheet" href="/assets/css/bootstrap/css/bootstrap.min.css">
    <style>
      div#panier.modal {
   background-color: #28a745;
}
body {
   background-color: white;
}
.jumbotron {
    padding: 2rem 1rem;
    background-color: #e9ecef;
    border-radius: 0.3rem;
}
.navbar .navbar-collapse {
  text-align: center;
}
    </style>
  </head>
<body>


  <header>

  
  <nav class="navbar navbar-expand-lg  navbar-primary link-light" style="background-color: #28a745; color: #f8f9fa;">
  
    <img src="assets/img/favicon.png" width="30" height="30" class="d-inline-block align-top" alt="">
    
  <a class="navbar-brand" style="color: #f8f9fa;" href="#"> &nbsp;
  <?php 
						$jsonin = file_get_contents('./assets/cms.json');
						$in = json_decode($jsonin, true);
						
						echo $in['entreprise']; ?>
            </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto link-light">
      <li class="nav-item active ">
        <a class="nav-link link-light" style="color: #f8f9fa;" href="index.php">Accueil <span class="sr-only">(actuelle)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link link-light" style="color: #f8f9fa;" href="#">Qui sommes nous ?</a>
      </li>
      
    </ul>
    <div class="form-inline my-2 my-lg-0">
      <a class="btn btn-outline-light my-2 my-sm-0" href="login.php">Connexion</a>
</div>
 
</nav>
    </header>
<main>
  <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading"><?php
  
  $propertiesjson = file_get_contents('./assets/cms.json');
						$properties = json_decode($propertiesjson, true);
            
 echo $properties['entreprise'];
  ?></h1>
          <p class="lead text-muted"><?php
  
  $propertiesjson = file_get_contents('./assets/cms.json');
						$properties = json_decode($propertiesjson, true);
            
 echo $properties['description'];
  ?></p>
          <p>
          </p>
        </div>
        
      </section>
  

      <div class="album py-5 bg-light">

<div class="container">

  <div class="row">
    
    
    
    


  <div class="col-md-4">
  <div class="card mb-4 box-shadow">
      <div class="card-body">
            <p class="card-text">Directeur</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <p>Le directeur est Samy Labaied.</p>
              </div>
            </div>
          </div>
          
        </div>
      </div>


      <div class="col-md-4">
  <div class="card mb-4 box-shadow">
      
<div class="card-body">
            <p class="card-text">Développeur WEB</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <p>Le développeur web est Maxence Lebrun.</p>
              </div>
            </div>
          </div>
          
        </div>
      </div>

<div class="col-md-4">
  <div class="card mb-4 box-shadow">
<div class="card-body">
            <p class="card-text">Co-Directrice</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <p>La Co-Directrice est Sophie RODRIGUES
        <br> DA COSTA.</p>
              </div>
            </div>
          </div>
          
        </div>
        </div>
        <br>
        <br>
        <br>
        La page n'est pas fini elle est toujours en construction.
  </div>
</div>
</div>


</div>
</div>



<footer class="bg-dark text-center text-white">
  
<div class="row justify-content-center mb-0 pt-5 pb-0 row-2 px-3">
           <div class="col-12">
                <div class="row row-2">
                    <div class="col-sm-3 text-md-center"><h5><span> <i class="fa fa-firefox text-light" aria-hidden="true"></i></span><b>  MPO-47</b></h5></div>
                    <div class="col-sm-3  my-sm-0 mt-5" style="color: #6c757d;"><ul class="list-unstyled"><li class="mt-0"><a href="https://maxencedev.fr" style="color: #6c757d;">CMS</a></li><li><a href="https://maxencedev.fr" style="color: #6c757d;">Créateur du site internet</a></li><li><a href="https://cloudflare.com" style="color: #6c757d;">Sécurité</a></li></ul></div>
                    
                    <div class="col-sm-3  my-sm-0 mt-5" style="color: #6c757d;"><ul class="list-unstyled"><li class="mt-0"><a href="https://www.societe.com/societe/ideal-concept-834604977.html" style="color: #6c757d;">Société</a></li><li><a href="https://mpo-47.fr/mentionslegales.html" style="color: #6c757d;">CGU/CGV</a></li></ul></div>
                </div>  
           </div>
       </div>
       <div class="row justify-content-center mt-0 pt-0 row-1 mb-0  px-sm-3 px-2">
            <div class="col-12">
                <div class="row my-4 row-1 no-gutters">
                    <div class="col-sm-3 col-auto text-center"><small>&#9400; 2022 Copyright:
    <a class="text-white" href=""><?php $propertiesjson = file_get_contents('./assets/cms.json');
						$properties = json_decode($propertiesjson, true);
 echo $properties['entreprise'] . '';
  ?></small></div><div class="col-md-3 col-auto "></div><div class="col-md-3 col-auto"></div>
                    <div class="col  my-auto text-md-left  text-right "> <small> Made with <3 with MaxenceDEVCMS</small>  </div> 
                </div>
            </div>
        </div>
</footer>
<div class="modal" tabindex="-1" role="dialog" aria-labelledby="Panier" aria-hidden="true" id="panier">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Panier</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"><?php
      
    include './function/pdo.php';
    if(empty($_GET['id'])){ 

      echo "Dommage tu n'a pas sélectionné de produit";
      }
       if(isset($_GET['id'])){
	  $id = $_GET['id'];
		$query = "SELECT * FROM tb_produit WHERE id = $id";
		$stmt = $pdo->prepare($query);
		$stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    
       }
	   while ($data=$stmt->fetch(PDO::FETCH_ORI_NEXT)) { ?>

        <tr>
        <?php if(isset($_GET['id'])){ 

            echo '
            <table class="uk-table uk-table-striped">
            <thead>
                <tr>
              <th>Nom</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Prix</th>
              
                </tr>
            </thead>
        
            <tbody>
                <tr>
            
            <td>'.$data['name'].'</td> 
            <td><img src="'.$data['img'].'" alt="Img MPO-47 '.$data['name'].'" height="100" width="100" class="item__image item__image--hue"></td>
<td>'.$data['description'].' </td>
<td>'.$data['price'].' €</td>
</tr>
</tbody>    
</table>';}


?>

<?php
}?>
      
      </div>
      <div class="modal-footer">
      <?php if (isset($_GET['id'])) { 
    
    echo '
    <a href="demanderdevis.php?id='.$_GET['id'].'" class="btn btn-primary">Demander le devis</a>';
    } ?>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<script>
//when modal opens
$('#panier').on('shown.bs.modal', function (e) {
  $("#pageContent").css({ opacity: 0 });
})

//when modal closes
$('#panier').on('hidden.bs.modal', function (e) {
  $("#pageContent").css({ opacity: 1 });
})</script>
<script src="./assets/holder.js">
</script>
</body>
</html>