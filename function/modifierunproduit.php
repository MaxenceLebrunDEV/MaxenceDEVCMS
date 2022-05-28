<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Utilisateurs - <?php 
						$dirsubtr = substr(dirname(__FILE__), 0, -9);
						$jsonin = file_get_contents($dirsubtr.'/assets/cms.json');
						$in = json_decode($jsonin, true);
						
						echo $in['entreprise'];
						?></title>
		<!-- CSS FILES -->
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/uikit@latest/dist/css/uikit.min.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/dashboard.css">
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		
		<link rel="icon" href="../assets/img/favicon.png">
	</head>
	<body>
	<?php 
  
  include 'session.php';
 
if ($_SESSION['level'] != "admin") {

 header("location:../login.php");
} else if ($_SESSION['level'] == null) {
 header("location:../login.php");
}

?>
		<!--HEADER-->
		<!-- LEFT BAR -->
		<aside id="left-col" class="uk-light uk-visible@m">
			<div class="left-logo uk-flex uk-flex-middle">
				<img class="custom-logo" src="../assets/img/favicon.png" alt=""> <h4 class="uk-text-center uk-margin-remove-vertical text-light">  MPO-47</h4>
			</div>
			<div class="left-content-box  content-box-dark">
				<img src="<?php echo $_SESSION['img'] ?>" alt="" class="uk-border-circle profile-img">
				<h4 class="uk-text-center uk-margin-remove-vertical text-light"><?php echo $_SESSION['name'] ?></h4>
				
				<div class="uk-position-relative uk-text-center uk-display-block">
				    <a  class="uk-text-small uk-text-muted uk-display-block uk-text-center" ><?php echo $_SESSION['jobs'] ?></a>
				    
				</div>
			</div>
			
			<div class="left-nav-wrap">
			<div class="uk-margin">
    <form form action="recherche.php" method="get" class="uk-search uk-search-default">
		
	<button type="submit" uk-search-icon></button>
        <input class="uk-search-input" type="search" name="query" placeholder="Rechercher">
    </form>
</div>
				
			<?php include 'menu1infunc.php'; ?>
			<div class="bar-bottom">
				
			<?php include 'menu2func.php'; ?>
		</aside>


		<div id="content" data-uk-height-viewport="expand: true" class="uk-height-viewport" style="min-height: 705px;">
			<div class="uk-container uk-container-expand">
				<div class="uk-grid uk-grid-divider uk-grid-medium uk-child-width-1-2 uk-child-width-1-4@l uk-child-width-1-5@xl" data-uk-grid="">
					<div class="uk-first-column">
						<span class="uk-text-small"><span data-uk-icon="icon:grid" class="uk-margin-small-right uk-text-primary uk-icon"></span>Produits</span>
						<h1 class="uk-heading-primary uk-margin-remove  uk-text-primary"><?php 
             

             $sql = "SELECT * FROM `tb_produit` ORDER BY id DESC LIMIT 1;";
               $productquery = $pdo->prepare($sql);
                      
               $productquery->execute();
               $data = $productquery->fetch(PDO::FETCH_ASSOC);
               echo $data['id'];
                ?></h1>
						
					</div>
					<div>
						
						<span class="uk-text-small"><span data-uk-icon="icon:plus" class="uk-margin-small-right uk-text-primary uk-icon"></span>Devis</span>
						<h1 class="uk-heading-primary uk-margin-remove uk-text-primary"><?php 
             

             $sql = "SELECT * FROM `devis` ORDER BY id DESC LIMIT 1;";
               $productquery = $pdo->prepare($sql);
                      
               $productquery->execute();
               $data = $productquery->fetch(PDO::FETCH_ASSOC);
               echo $data['id'];
                ?></h1>
						
					</div>
					<div>
						
						<span class="uk-text-small"><span data-uk-icon="icon:user" class="uk-margin-small-right uk-text-primary uk-icon"></span>Utilisateurs</span>
						<h1 class="uk-heading-primary uk-margin-remove uk-text-primary"><?php 
             

             $sql = "SELECT * FROM `tb_admin` ORDER BY id DESC LIMIT 1;";
               $productquery = $pdo->prepare($sql);
                      
               $productquery->execute();
               $data = $productquery->fetch(PDO::FETCH_ASSOC);
               echo $data['id'];
                ?></h1>
						
						
					</div>
					<div>
						
						<span class="uk-text-small"><span data-uk-icon="icon:bolt" class="uk-margin-small-right uk-text-primary uk-icon"></span>Version:</span>
						<?php 
						$dirsubtr = substr(dirname(__FILE__), 0, -9);
						$jsonin = file_get_contents($dirsubtr.'/config/cms.json');
						$in = json_decode($jsonin, true);
						
						echo '<h3 class="uk-heading-primary uk-margin-remove uk-text-primary"> MaxenceDEVCMS '.$in['version'].'</h3>
						';
						$jsonout = file_get_contents('https://maxencedev.fr/config/cms.json');
						$out = json_decode($jsonout, true);
						
						if ($in['version'] < $out['version']){
							
							echo '<a href="https://cms.maxencedev.fr">Une mise à jour est disponible ! </a>';
						}
						?></div>
					
					
				</div>
				<hr>
				<div class="uk-grid uk-grid-medium uk-sortable" data-uk-grid="" uk-sortable="handle: .sortable-icon">
				<?php
            if (isset($_COOKIE['log'])) {
              
          $log = $_COOKIE['log'];
              echo  '<div class="uk-form-success" role="alert">
                      <strong>'.$log. '</strong>
                     </div>' ;
            }
           ?> 
		             <?php
      


      $id = $_GET['id'];
    
      $query = "SELECT * FROM `tb_produit` WHERE `id` = $id";
      $stmt = $pdo->prepare($query);
      
      $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    
          while ($data=$stmt->fetch(PDO::FETCH_ORI_NEXT)) { 
            ?>
            
            <form action="product/modifierunproduit.php" method="post">
			<fieldset class="uk-fieldset">


<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
<div class="uk-margin">
	
<legend class="uk-legend">Nom:</legend>
	<input class="uk-input" type="text" name="name" value="<?php echo $data['name']; ?>" placeholder="Nom:">
</div>

<div class="uk-margin">
	
<legend class="uk-legend">Image:</legend>
	<input class="uk-input" type="text" name="img" value="<?php echo $data['img']; ?>" placeholder="Image:">
</div>

<div class="uk-margin">
	
<legend class="uk-legend">Description:</legend>

<input class="uk-input" name="description" value="<?php echo $data['description']; ?>" placeholder="<?php echo $data['description']; ?>"></input>
</div>

<div class="uk-margin">
	
<legend class="uk-legend">Prix:</legend>
	<input class="uk-input" type="text" name="price" value="<?php echo $data['price']; ?>" placeholder="Prix:">
</div>

<div class="uk-margin">
	
<legend class="uk-legend">TVA:</legend>
	<input class="uk-input" type="text" name="tva" value="<?php echo $data['tva']; ?>" placeholder="TVA:">
</div>
<div class="uk-margin">
	
<legend class="uk-legend">Stock:</legend>
	<input class="uk-input" type="text" name="stock" value="<?php echo $data['stock']; ?>" placeholder="Stock:">
</div>

<div class="uk-margin">
	
<legend class="uk-legend">Catégories: </legend>
        <div uk-form-custom="target: > * > span:first-child">
            <select name="category" value="<?php echo $data['category']; ?>">
			
                <option <?php if($data['category'] == null){echo("selected");}?> value="">Aucune catégorie</option>
                <option <?php if($data['category'] == "0"){echo("selected");}?> value="0">-Rayonnage et stockage</option>
                <option <?php if($data['category'] == "1"){echo("selected");}?> value="1">-Équipement de magasin </option>
                <option <?php if($data['category'] == "2"){echo("selected");}?> value="2">-Gondole de magasin</option>
                <option <?php if($data['category'] == "3"){echo("selected");}?> value="3">-Manutention et levages</option>
                <option <?php if($data['category'] == "4"){echo("selected");}?> value="4">-Mobilier de bureau</option>
                <option <?php if($data['category'] == "5"){echo("selected");}?> value="5">-Autres </option>
            </select>
            <button class="uk-button uk-button-default" type="button" tabindex="-1">
                <span></span>
                <span uk-icon="icon: chevron-down"></span>
            </button>
        </div>
    </div>
</fieldset>

             
			

<button type="submit" class="uk-button uk-button-default"> Modifier le produit</button>
            
    <a class="uk-button uk-button-default" href="./produits.php">Retour</a>
	<?php } ?>

				</div>
				
			
		

		


				<footer class="uk-section uk-section-small uk-text-center">
					<hr>
					<p class="uk-text-small text-light">
						<span class="uk-text-bold">MPO-47</span> &copy; <?php echo date('Y'); ?>
					<p class="uk-text-small uk-text-center"><a href="https://maxencedev.fr/">Created by MaxenceDEV</a> | Built with <a href="https://maxencedev.fr/" title="MaxenceDEV-CMS" target="_blank" data-uk-tooltip><span  data-uk-icon="icon: heart"></span></a> </p>
				</footer>
			</div>
		</div>
		
		<!-- JS FILES -->
		<script src="https://cdn.jsdelivr.net/npm/uikit@latest/dist/js/uikit.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/uikit@latest/dist/js/uikit-icons.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
		<script src="js/chartScripts.js"></script>
	</body>
</html>
