<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username et password envoyé depuis le form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM Accounts WHERE name = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      echo $result;
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // Si il y a un résultat qui match avec $myusername et $mypassword 		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         header("location: welcome.php");
      }else {
	$error = "Login ou Password invalide";
	echo $error;
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

					<div class="wrap-input100 validate-input" data-validate = "Veuillez saisir un nom d'utilisateur">
						<input class="input100" type="text" name="username" placeholder="Utilisateur">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
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
						<a class="txt1" href="signup.html">
							Pas encore inscrit ? Créer un compte
						</a>
					</div>

					<div class="text-center p-t-10">
						<a class="txt1" href="passwordForget.html">
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

</body>
</html>