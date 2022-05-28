<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Tableau de bord - <?php 
						$jsonin = file_get_contents('./config/cms.json');
						$in = json_decode($jsonin, true);
						
						echo $in['entreprise'];?></title>
		<!-- CSS FILES -->
		<link rel="icon" href="/assets/img/favicon.png">
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/uikit@latest/dist/css/uikit.min.css">
		<link rel="stylesheet" type="text/css" href="/assets/css/dashboard.css">
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		
	</head>
	<body>
	<?php 
  
  include 'function/session.php';
 
if ($_SESSION['level'] != "admin") {

 header("location:./login.php");
} else if ($_SESSION['level'] == null) {
 header("location:./login.php");
}

?>
		<!--HEADER-->
		<!-- LEFT BAR -->
		<aside id="left-col" class="uk-light uk-visible@m">
			<div class="left-logo uk-flex uk-flex-middle">
				<img class="custom-logo" src="/assets/img/favicon.png" alt=""> <h4 class="uk-text-center uk-margin-remove-vertical text-light">  <?php 
						$jsonin = file_get_contents('./config/cms.json');
						$in = json_decode($jsonin, true);
						
						echo $in['entreprise'];?></h4>
			</div>
			<div class="left-content-box  content-box-dark">
				<img src="<?php echo $_SESSION['img'] ?>" alt="" class="uk-border-circle profile-img">
				<h4 class="uk-text-center uk-margin-remove-vertical text-light"><?php echo $_SESSION['name'] ?></h4>
				
				<div class="uk-position-relative uk-text-center uk-display-block">
				    <a  class="uk-text-small uk-text-muted uk-display-block uk-text-center" ><?php echo $_SESSION['jobs'] ?></a>
				    
				</div>
			</div>
			
			<div class="left-nav-wrap">
				
			
			<?php include 'function/menumain.php'; ?>
			<div class="bar-bottom">
				
			<?php include 'function/menu.php'; ?>
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
						$jsonin = file_get_contents(__DIR__.'/config/cms.json');
						$in = json_decode($jsonin, true);
						
						echo '<h3 class="uk-heading-primary uk-margin-remove uk-text-primary"> MaxenceDEVCMS '.$in['version'].'</h3>
						';
						$jsonout = file_get_contents('https://maxencedev.fr/config/cms.json');
						$out = json_decode($jsonout, true);
						
						if ($in['version'] < $out['version']){
							
							echo '<a href="update.php">Une mise à jour est disponible ! </a>';
						}
						?>

					</div>
					
					
				</div>
				<hr>
				<div class="uk-grid uk-grid-medium uk-sortable" data-uk-grid="" uk-sortable="handle: .sortable-icon">
		
<container class="uk-box-shadow-small"> 
<div class="uk-card uk-card-default uk-card-body">
<h3 class="uk-card-title">Bienvenue</h3>
<p> <?php echo $_SESSION['name'] ?>,<?php echo $_SESSION['jobs'] ?> chez 
  <?php 
						$jsonin = file_get_contents('./config/cms.json');
						$in = json_decode($jsonin, true);
						
						echo $in['entreprise']; ?> </p>
</div>
</container>


				</div>
				
			
		

		


				<footer class="uk-section uk-section-small uk-text-center">
					<hr>
					<p class="uk-text-small text-light">
						<span class="uk-text-bold">&nbsp;
  <?php 
						$jsonin = file_get_contents('./config/cms.json');
						$in = json_decode($jsonin, true);
						
						echo $in['entreprise']; ?></span> &copy; <?php echo date('Y'); ?>
					<p class="uk-text-small uk-text-center"><a href="https://maxencedev.fr/">Created by 
  <?php 
						$jsonin = file_get_contents('./config/cms.json');
						$in = json_decode($jsonin, true);
						
						echo $in['author']; ?></a> | Built with <a href="https://cms.maxencedev.fr/" title="MaxenceDEV-CMS" target="_blank" data-uk-tooltip><span  data-uk-icon="icon: heart"></span></a> </p>
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
