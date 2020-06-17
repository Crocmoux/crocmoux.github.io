<?php
include("config.php");
session_start();
$badID = 0;

if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username et password envoyé depuis le form 

	if (!$db) {
		die("Connection failed: " . mysqli_connect_error());
	   } //else { echo "Connexion SUCESSED - "; }

	   $myusername = mysqli_real_escape_string($db,$_POST['username']);
	   $mypassword = password_hash(mysqli_real_escape_string($db,$_POST['confirmpass']), PASSWORD_DEFAULT); 
	   $myemail = mysqli_real_escape_string($db,$_POST['email']);

	   if (isset($myemail,$mypassword,$myusername)){

			// ON VERIFIE SI LE NAME EST DANS LA TABLE
	   		$sql = "SELECT * FROM `Accounts` WHERE `Mail` = '$myemail'";
	   		$result = mysqli_query($db,$sql);

	   		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	   		$active = $row['active'];

	   		$count = mysqli_num_rows($result);

	   		if($count == 1) {
	   			echo "MAIL DEJA UTILISE";
	   			$badID = 1;
	   		}else {
	      		$myActivationKey = md5(rand(0,1000)); // Genere une clé aléatiure de 32 caractères
	      		$sql2 = "INSERT INTO `Accounts`(`Name`, `Mail`, `Password`, `Status`, `EmailActivationKey`, `Admin`) VALUES ('$myusername','$myemail', '$mypassword', 0, '$myActivationKey', 0)";
	      		$result = mysqli_query($db,$sql2);
	      		$_SESSION['mail_username'] = $myusername;
	      		$_SESSION['mail_email'] = $myemail;
	      		$_SESSION['mail_ActivationKey'] = $myActivationKey;
	      		header("location: inscriptionMail.php");
	      	}
	  	}else { 
	  		// Si on ne renseigne aucun champ (F5 par exemple)
	  		$badID = 2;
	  	}
	}
	?>

	<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>Inscription | Club Bridge Montois</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--===============================================================================================-->	
		<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="/assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="/assets/login/fonts/iconic/css/material-design-iconic-font.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="/assets/login/vendor/css-hamburgers/hamburgers.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="/assets/login/vendor/animsition/css/animsition.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="/assets/login/css/util.css">
		<link rel="stylesheet" type="text/css" href="/assets/login/css/main.css">
		<!--===============================================================================================-->
		<link rel="preload" as="style" href="/assets/mobirise/css/mbr-additional.css">
		<link rel="stylesheet" href="/assets/mobirise/css/mbr-additional.css" type="text/css">

  		<!-- Gestion des popups -->
  		<link rel="stylesheet" href="/assets/notification-Hullabaloo/css/alert.css">
  		<link rel="stylesheet" href="/assets/notification-Hullabaloo/css/hullabaloo.css">

	</head>
	<body>

		<div class="limiter">
			<div class="container-login100" style="background-image: url('assets/images/gzlyfqgi2dh-vexcybpg7itldzz0n8io5jwlu3ehm1c-2-2000x1250.jpg');">
				<div class="wrap-login100">
					<form class="login100-form validate-form" action="" method="post">
						<!--form class="login100-form validate-form" action="index.html">-->
					<!--<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>-->

					<span class="login100-form-title p-b-34 p-t-27">
						S'INSCRIRE
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Veuillez saisir un nom d'utilisateur">
						<input class="input100" type="text" name="username" placeholder="Utilisateur">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Veuillez saisir une adresse mail">
						<input class="input100" type="text" name="email" placeholder="E-mail">
						<span class="focus-input100" data-placeholder="&#xf159;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Minimun 7 caractères, un chiffre et un caractère speciale">
						<input class="input100" type="password" name="createpass" placeholder="Mot de passe">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Mot de passe différent">
						<input class="input100" type="password" name="confirmpass" placeholder="Confirmer le mot de passe">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							S'INSCRIRE
						</button>
					</div>

					<div class="text-center p-t-20">
						<a class="txt1" href="signin.php">
							Déjà inscrit ? Se connecter
						</a>
					</div>

					<div class="text-center p-t-10">
						<a class="txt1" href="passwordForget.php">
							Mot de passe oublié ?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!--===============================================================================================-->
	<script src="/assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="/assets/login/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="/assets/login/js/main.js"></script>
	<!--===============================================================================================-->
	<script src="/assets/notification-Hullabaloo/js/hullabaloo.js"></script>

	<?php if ($badID == 1) { ?>
		<script type="text/javascript">
			var hulla = new hullabaloo();
			hulla.send("Ce compte existe déjà !", "error");
		</script> 
	<?php } ?>

	<?php if ($badID == 2) { ?>
		<script type="text/javascript">
			var hulla = new hullabaloo();
			hulla.send("Veuillez renseigner les champs !", "warning");
		</script> 
	<?php } ?>

</body>
</html>
