<?php
	include("config.php");
    session_start();

    if (!isset($_SESSION['key'],$_SESSION['myemail'])) {
    	    if (!isset($_POST['post_mail'],$_POST['post_ActivationKey'])) {
    	    	header("location: index.php");
    	    	exit;
    	    }
    } else {
    	$mail = $_SESSION['myemail'];
    	$ActivationKey = $_SESSION['key'];
    }
    
	if($_SERVER["REQUEST_METHOD"] == "POST") {
    	if (!$db) {
        	die("Connection failed: " . mysqli_connect_error());
      	}

		if(isset($_POST['mail'])){
         	//on renvoie le mail
	  		$_SESSION['myemail'] = $_POST['post_mail'];
	  		$_SESSION['key'] = $_POST['post_ActivationKey'];
	  		header("location: passwordForgetMail.php");
	  		exit;
    	} else if(isset($_POST['home'])){
         //on renvoie a l'accueil
         header("location: index.php");
      }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Réinitialisation du mot de passe | Club Bridge Montois</title>
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
				<form class="login100-form validate-form" action="" method ="post">
					<!--<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>-->

					<span class="login100-form-title p-b-27 p-t-27">
						REINITIALISATION DU MOT DE PASSE !
					</span>

					<div class="text-center p-t-27 p-b-27">
						<a class="txt2" style="color:white">
							Un email vous a été envoyé a l'adresse mail : <?php echo $_SESSION['myemail']; ?>
						</a>
					</div>

					<div class="text-center p-t-5 p-b-27">
						<a class="txt2" style="color:white">
							Veuillez cliquer sur le lien envoyé par mail pour confirmer la réinitialisation de votre mot de passe. N'oubliez pas de regarder vos messages indésirables !
						</a>
					</div>

					<div class="container-login100-form-btn">
						<input type="hidden" name="post_mail" value="<?php echo $mail; ?>" />
						<input type="hidden" name="post_ActivationKey" value="<?php echo $ActivationKey; ?>" />
						<button class="login100-form-btn" type="submit" name="mail">
                     		RENVOYER UN MAIL
                  		</button>
                  		&nbsp;
                  		&nbsp;
                  		<button class="login100-form-btn" type="submit" name="home" value="">
                     		ACCUEIL
                  		</button>
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
		if (isset($_SESSION['mail_send'])){
		if ($_SESSION['mail_send'] == 1){ ?>
		<script type="text/javascript">
		var hulla = new hullabaloo();
		hulla.send("Email envoyé !", "success");
		</script> 
	<?php }} ?>

	<?php 
		unset($_SESSION['myemail']);
		unset($_SESSION['key']);
		unset($_SESSION['mail_send']);  
	?>

</body>
</html>