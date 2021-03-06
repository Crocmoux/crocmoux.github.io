<?php
include("config.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username et password envoyé depuis le form 

	if (!$db) {
		die("Connection failed: " . mysqli_connect_error());
	   } //else { echo "Connexion SUCESSED - "; }

	   $myemail = mysqli_real_escape_string($db,$_POST['email']);

	   $sql = "SELECT * FROM `Accounts` WHERE `Mail` = '$myemail'";
	   $result = mysqli_query($db,$sql);

	   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	   $active = $row['active'];

	   $isMailInDB = mysqli_num_rows($result);

	   if($isMailInDB == 1) {
			$_SESSION['myemail'] = $myemail;
		   	$sql = "SELECT `EmailActivationKey` FROM `Accounts` WHERE `Mail` = '$myemail'";
	  	    $result = mysqli_query($db,$sql);
	  	    $key = mysqli_fetch_row($result);
		    $_SESSION['key'] = $key[0];
		   	header("location: passwordForgetMail.php");
	   } else {
	   		$_SESSION['error_mail'] = 1;
	   }
	}
?>

	   <!DOCTYPE html>
	   <html lang="en">
	   <head>
	   	<title>Mot de passe oublié | Club Bridge Montois</title>
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
						MOT DE PASSE OUBLIÉ
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Veuillez saisir une adresse mail">
						<input class="input100" type="text" name="email" placeholder="E-mail">
						<span class="focus-input100" data-placeholder="&#xf159;"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							ENVOYER
						</button>
					</div>

					<div class="text-center p-t-20">
						<a class="txt1" href="signin.php">
							Déjà inscrit ? Se connecter
						</a>
					</div>
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
<script src="/assets/login/js/main.js"></script>
<script src="/assets/notification-Hullabaloo/js/hullabaloo.js"></script>

<!-- Popup de bienvenue -->
<?php
	if (isset($_SESSION['error_mail'])){
	if ($_SESSION['error_mail'] == 1){ ?>
	<script type="text/javascript">
	var hulla = new hullabaloo();
	hulla.send("Email invalide !", "warning");
	</script> 
<?php }} ?>

<?php 
	unset($_SESSION['error_mail']);
?>
</body>
</html>
