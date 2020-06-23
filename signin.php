<?php
include("config.php");
session_start();
$badID = 0;

if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username et password envoyé depuis le form 

	if (!$db) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$myemail = mysqli_real_escape_string($db,$_POST['email']);
	$mypassword = mysqli_real_escape_string($db,$_POST['password']); 

	$sql = "SELECT * FROM `Accounts` WHERE `Mail` = '$myemail' AND `Status` = 1";
	$result = mysqli_query($db,$sql);

	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$active = $row['active'];

	$count = mysqli_num_rows($result);

      // Si il y a un résultat qui match avec $myusername et $mypassword 		
	if($count == 1) {
		$mypasswordsql = "SELECT `Password` FROM `Accounts` WHERE `Mail` = '$myemail'";
		$mypasswordResult = mysqli_query($db,$mypasswordsql);
		$mypasswordhash = mysqli_fetch_row($mypasswordResult);

      	 // Si les mots de passes sont identiques
		if (password_verify($mypassword, $mypasswordhash[0])) {
      	 	// On récupére le nom
			$mynamesql = "SELECT `Name` FROM `Accounts` WHERE `Mail` = '$myemail'";
			$mynameResult = mysqli_query($db,$mynamesql);
			$myusername = mysqli_fetch_row($mynameResult);
			$_SESSION['login_user'] = $myusername[0];

		   // On regarde si l'utilisateur est administrateur
			$myAdminsql = "SELECT `Admin` FROM `Accounts` WHERE `Mail` = '$myemail'";
			$myAdminResult = mysqli_query($db,$myAdminsql);
			$myuserAdmin = mysqli_fetch_row($myAdminResult);
			// Si la variable vaut 1, alors l'utilisateur est Admin
			if ($myuserAdmin[0] == 1){
				$_SESSION['login_admin'] = $myuserAdmin[0];
			}

			$_SESSION['first_connexion'] = 1;
			header("location: index.php");
		}
		 // Si les mots de passes sont différents
		else{
			$badID = 1;
		}
	  // Si le compte n'est pas validé ou n'existe pas
	} else {
		$badID = 2;
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Connexion | Club Bridge Montois</title>
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

	<!-- Gestion des popups -->
	<link rel="stylesheet" href="/assets/notification-Hullabaloo/css/alert.css">
	<link rel="stylesheet" href="/assets/notification-Hullabaloo/css/hullabaloo.css">

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('assets/images/gzlyfqgi2dh-vexcybpg7itldzz0n8io5jwlu3ehm1c-2-2000x1250.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="" method="post">
					<!--<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>-->

					<span class="login100-form-title p-b-34 p-t-27">
						CONNEXION
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Veuillez saisir votre adresse mail">
						<input class="input100" type="text" name="email" placeholder="E-mail">
						<span class="focus-input100" data-placeholder="&#xf159;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Veuillez saisir un mot de passe">
						<input class="input100" type="password" name="password" placeholder="Mot de passe">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Se souvenir de moi
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							SE CONNECTER
						</button>
					</div>

					<div class="text-center p-t-20">
						<a class="txt1" href="signup.php">
							Pas encore inscrit ? Créer un compte
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
			hulla.send("Mot de passe incorrect !", "warning");
		</script> 
	<?php } ?>

	<?php if ($badID == 2) { ?>
		<script type="text/javascript">
			var hulla = new hullabaloo();
			hulla.send("Adresse mail incorrecte ou non validé !", "warning");
		</script> 
	<?php } ?>

</body>
</html>
