<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Categorie - <?php 
						$dirsubtr = substr(dirname(__FILE__), 0, -9);
						$jsonin = file_get_contents($dirsubtr.'/config/cms.json');
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
				<img class="custom-logo" src="../assets/img/favicon.png" alt=""> <h4 class="uk-text-center uk-margin-remove-vertical text-light">  <?php 
						$dirsubtr = substr(dirname(__FILE__), 0, -9);
						$jsonin = file_get_contents($dirsubtr.'/config/cms.json');
						$in = json_decode($jsonin, true);
						
						echo $in['entreprise'];
						?></h4>
			</div>
			<div class="left-content-box  content-box-dark">
				<img src="<?php echo $_SESSION['img'] ?>" alt="" class="uk-border-circle profile-img">
				<h4 class="uk-text-center uk-margin-remove-vertical text-light"><?php echo $_SESSION['name'] ?></h4>
				
				<div class="uk-position-relative uk-text-center uk-display-block">
				    <a  class="uk-text-small uk-text-muted uk-display-block uk-text-center" ><?php echo $_SESSION['jobs'] ?></a>
				    
				</div>
			</div>
			
			<div class="left-nav-wrap">
				
				
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
						?>
					</div>
					
					
				</div>
				<hr>
				<div class="uk-grid uk-grid-medium uk-sortable" data-uk-grid="" uk-sortable="handle: .sortable-icon">
				
    <caption>Gestion de catégories:</caption>
	
<p>
<br><br><br>
<strong>Rayonnage et stockage 0</strong><br><br>
Rayonnages lourds 0.1<br>

Rayonnages mi-lourds 0.2<br>

Rayonnages léger 0.3<br>

Mezzanine 0.4<br>

Passerelles 0.5<br>

Sécurité 0.6<br>

Autres Produits 0.7<br>


<br>
<strong>Équipement de magasin 1</strong><br><br>
Barre de guidage et portillon 1.1<br>

Chariots / Panier 1.2<br>

Divers 1.3<br>

Accessoires Divers 1.4<br>

Équipement de poissonnerie 1.5<br>

Matériel Inox 1.6<br>

Mobilier de boulangerie 1.7<br>

Portes labo / Chambre Froides 1.8<br>

Présentoirs spécifiques 1.9<br>

Sortie de caisse 1.91<br>

Vitrine froid / Armoire / Mobilier 1.92<br>





<br>
<strong>Gondole de magasin 2</strong><br><br>
Gondole murale simple 2.1<br>

Gondole centrale double face 2.2<br>

Pièces détachées de gondoles 2.3<br>

Tête de gondoles 2.4<br>

Accessoires de gondoles 2.5<br>

Étiquetage 2.6<br>

Autres 2.7<br>



<br>
<strong>Manutention et levages 3</strong><br><br>

Chariots élévateurs 3.1<br>

Convoyeur 3.2<br>

Transpalettes 3.3<br>

Transpalettes électriques 3.4<br>

Autres 3.5<br>




<br>
<strong>Mobilier de bureau 4</strong><br><br>
Bureaux 4.1<br>

Tables de réunion 4.2<br>

Chaises 4.3<br>

Armoires 4.4<br>

Caissons 4.5<br>

Porte-manteaux 4.6<br>

Poubelles 4.7<br>

Tableaux 4.8<br>

Autres 4.9<br>



<br>
<strong>Autres 5</strong><br><br>
Crochet Peseur 5.1<br>
</p>    			

</div>
			
				<footer class="uk-section uk-section-small uk-text-center">
					<hr>
					<p class="uk-text-small text-light">
						<span class="uk-text-bold"><?php 
						$dirsubtr = substr(dirname(__FILE__), 0, -9);
						$jsonin = file_get_contents($dirsubtr.'/config/cms.json');
						$in = json_decode($jsonin, true);
						
						echo $in['entreprise'];
						?></span> &copy; <?php echo date('Y'); ?>
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
