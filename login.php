<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Connexion - MPO-47</title>
		<link rel="icon" href="/assets/img/favicon.png">
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/uikit@latest/dist/css/uikit.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/login-dark.css">
	</head>
	<body class="login uk-cover-container uk-background-secondary uk-flex uk-flex-center uk-flex-middle uk-height-viewport uk-overflow-hidden uk-light" data-uk-height-viewport>
        <?php 
  
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);
        include 'function/session.php';
       
        
     if (isset($_SESSION['level'])) {
       if ($_SESSION['level'] == 'admin') {
     
         echo 'DEBUG_SESSION = ON';
         header("location:./dashboard.php");
       }
     }else {
       
     }
     
     ?>
		<div class="uk-position-cover uk-overlay-primary"></div>
		<div class="uk-position-bottom-center uk-position-small uk-visible@m uk-position-z-index">
			<span class="uk-text-small uk-text-muted">© 2022 MaxenceDEV CMS - <a href="https://maxencedev.fr">Créer avec MaxenceDEV CMS</a></span>
		</div>
		<div class="uk-width-medium uk-padding-small uk-position-z-index" uk-scrollspy="cls: uk-animation-fade">
			
			<div class="uk-text-center uk-margin">
				<img src="assets/img/favicon.png" alt="Logo">
				<br><h3>Connexion à l'administration</h3>
			</div>
<br>
<?php
         
		 if (isset($_COOKIE['error'])) {
		   $erreur = $_COOKIE['error'];
		   echo  '<div uk-alert>
		   <a class="uk-alert-close" uk-close></a>
		   <p>'.$erreur.'</p></div>';
		}
		?> 
			<!-- login -->
			<form class="toggle-class" action="function/session.php" method="post">
				<fieldset class="uk-fieldset">
					<div class="uk-margin-small">
					 
						<div class="uk-inline uk-width-1-1">
							<span class="uk-form-icon uk-form-icon-flip" data-uk-icon="icon: user"></span>
							<input class="uk-input uk-border-pill" name="username" required placeholder="Nom d'utilisateur:" type="text">
						</div>
					</div>
					<div class="uk-margin-small">
						<div class="uk-inline uk-width-1-1">
							<span class="uk-form-icon uk-form-icon-flip" data-uk-icon="icon: lock"></span>
							<input class="uk-input uk-border-pill" name="password" required placeholder="Mot de passe :" type="password">
						</div>
					</div>
					<div class="uk-margin-bottom">
						<button type="submit" name="process-login" class="uk-button uk-button-primary uk-border-pill uk-width-1-1">Connexion</button>
					</div>
				</fieldset>
			</form>
			<form class="toggle-class" action="function/phone.php" method="post" hidden>
				<div class="uk-margin-small">
					<div class="uk-inline uk-width-1-1">
						<span class="uk-form-icon uk-form-icon-flip" data-uk-icon="icon: phone"></span>
						<input class="uk-input uk-border-pill" name="phone" placeholder="Téléphone" required type="text">
					</div>
				</div>
				<div class="uk-margin-bottom">
					<button type="submit" name="sendphone" class="uk-button uk-button-primary uk-border-pill uk-width-1-1">Envoyer par sms</button>
				</div>
			</form>
			<div>
				<div class="uk-text-center">
					<a class="uk-link-reset uk-text-small toggle-class" data-uk-toggle="target: .toggle-class ;animation: uk-animation-fade">Mot de passe oublié ?</a>
					<a class="uk-link-reset uk-text-small toggle-class" data-uk-toggle="target: .toggle-class ;animation: uk-animation-fade" hidden><span data-uk-icon="arrow-left"></span> Retourner à la connexion</a>
				</div>
			</div>
		</div>
		
		<script src="https://cdn.jsdelivr.net/npm/uikit@latest/dist/js/uikit.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/uikit@latest/dist/js/uikit-icons.min.js"></script>
	</body>
</html>