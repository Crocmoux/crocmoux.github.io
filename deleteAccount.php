<?php
   include("config.php");
   session_start();

   if (isset($_GET['email'],$_GET['key'])){
         //Récupération du mail et de la key dans l'url
         $mail = $_GET['email'];
         $key = $_GET['key'];
   } else{
      header("location: index.php");
   }

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      if (!$db) {
         die("Connection failed: " . mysqli_connect_error());
      }

      if(isset($_POST['yes'])){
         //Confirmation de l'utilisateur

         //On Compare le mail et la key recu à celles dans la DB
         $sql = "SELECT * FROM `Accounts` WHERE `Mail` = '$mail' AND `EmailActivationKey` = '$key'";
         $result = mysqli_query($db,$sql);

         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
         $active = $row['active'];

         $isMailAndKeyInDB = mysqli_num_rows($result);

         if($isMailAndKeyInDB == 1) {
            $sql = "DELETE FROM `Accounts` WHERE `Mail` = '$mail' AND `EmailActivationKey` = '$key'";
            $result = mysqli_query($db,$sql);
            $_SESSION['deletedCount'] = 1;
            header("location: index.php");
         }
         else{
            $_SESSION['deletedCount'] = 2;
            header("location: index.php");
         }

      } else if(isset($_POST['no'])){
         //Refus de l'utilisateur
         $_SESSION['deletedCount'] = 0;
         header("location: index.php");
      }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Suppression du compte | Club Bridge Montois</title>
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

               <span class="login100-form-title p-b-27 p-t-27">
                  SUPPRESSION DU COMPTE !
               </span>

               <div class="text-center p-t-27 p-b-27">
                  <a class="txt2" style="color:white">
                  Etes-vous sûr de vouloir supprimer votre compte du site bridgeclubmontois.fr ?
                  </a>
               </div>

               <div class="container-login100-form-btn">
                  <button class="login100-form-btn" type="submit" name="yes" value="">
                     OUI
                  </button>
                  &nbsp;
                  &nbsp;
                  <button class="login100-form-btn" type="submit" name="no" value="">
                     NON
                  </button>
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


<?php unset($_SESSION['email']);
     unset($_SESSION['key']); ?>

</body>
</html>