<?php
   include("config.php");
   session_start();
?>

<!DOCTYPE html>
<html  >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="/assets/images/png-transparent-playing-card-card-game-hearts-spades-deck-of-cards-game-heart-hearts-128x128-1.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Accueil | Club Bridge Montois</title>
    
  <link rel="stylesheet" href="/assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="/assets/tether/tether.min.css">
  <link rel="stylesheet" href="/assets/dropdown/css/style.css">
  <link rel="stylesheet" href="/assets/theme/css/style.css">
  <link rel="preload" as="style" href="/assets/mobirise/css/mbr-additional.css">
  <link rel="stylesheet" href="/assets/mobirise/css/mbr-additional.css" type="text/css">

  <!-- Gestion des popups -->
  <link rel="stylesheet" href="/assets/notification-Hullabaloo/css/alert.css">
  <link rel="stylesheet" href="/assets/notification-Hullabaloo/css/hullabaloo.css">

</head>
<body>
  <section class="menu cid-rZ4dsyKntU" once="menu" id="menu1-0">
    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right navbar-nav-top-padding" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="index.php">
                        Accueil</a>
                </li>
                <li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-4" href="" data-toggle="dropdown-submenu" aria-expanded="false">A propos</a><div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="leclub.html" aria-expanded="false">Le club</a><a class="text-white dropdown-item display-4" href="faq.html">Règles &amp; FAQ</a><a class="text-white dropdown-item display-4" href="contact.html" aria-expanded="false">Contact</a></div>
                </li>
                <li class="nav-item"><a class="nav-link link text-white display-4" href="actualites.html">
                        Actualités</a>
                </li>
                <li class="nav-item"><a class="nav-link link text-white display-4" href="classement.html">
                        Classement</a>
                </li>

                <?php if (!isset($_SESSION['login_user'])){ ?> 
                    <li class="nav-item"><a class="nav-link link text-white display-4" href="signin.php">Connexion</a></li>
                        <?php } else { ?>
                    <li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-4" href="" data-toggle="dropdown-submenu" aria-expanded="false"><?php echo $_SESSION['login_user']; ?></a><div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="param.php" aria-expanded="false">Paramètres</a><a class="text-white dropdown-item display-4" href="logout.php">Déconnexion</a></div></li>
                <?php } ?>


            </ul>
        </div>
    </nav>
</section>
<section class="cid-rZ4dtABDg3 mbr-fullscreen mbr-parallax-background" id="header2-1">
    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-8">
                <h1 class="mbr-section-title mbr-bold pb-1 mbr-fonts-style display-1" style="height: auto;background-color: white;margin: auto;width: auto;border-style: solid;">Club Bridge Montois</h1>
            </div>
        </div>
    </div>
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>
<section class="features11 cid-rZ4eJsPdje" id="features11-3">
    <div class="container">   
        <div class="col-md-12">
            <div class="media-container-row">
                <div class="mbr-figure m-auto" style="width: 50%;">
                    <img src="/assets/images/1501847705-670x503.jpg" alt="Mobirise" title="">
                </div>
                <div class=" align-left aside-content">
                    <h2 class="mbr-title pt-2 mbr-fonts-style display-2">
                        Description du club</h2>
                    <div class="mbr-section-text">
                    </div>
                    <div class="block-content">
                        <div class="card p-3 pr-3">
                            <div class="media">
                                <div class=" align-self-center card-img pb-3">
                                    <span class="mbr-iconfont mbri-map-pin"></span>
                                </div>     
                                <div class="media-body">
                                    <h4 class="card-title mbr-fonts-style display-7">
                                        Notre adresse</h4>
                                </div>
                            </div>                
                            <div class="card-box">
                                <p class="block-text mbr-fonts-style display-7"><br>Le club est situé à Mont de Marsan, Plaine de la Hiroire <br> 453, chemin des Sports (à coté du tennis club)</p>
                            </div>
                        </div>
                        <div class="card p-3 pr-3">
                            <div class="media">
                                <div class="align-self-center card-img pb-3">
                                    <span class="mbr-iconfont mbri-clock"></span>
                                </div>     
                                <div class="media-body">
                                    <h4 class="card-title mbr-fonts-style display-7">
                                        Horaires d'ouvertures</h4>
                                </div>
                            </div>                
                            <div class="card-box">
                                <p class="block-text mbr-fonts-style display-7">Nous sommes ouvert le :<br>- Lundi à 14h : parties libres ou tournoi parrainé une fois par mois<br>- Mardi à 14h : tournoi<br>- 1er et 3ème mercredi du mois à 20h : tournoi court <br>- 2ème mercredi 14h : tournoi 3ème et 4ème série<br>- Jeudi à 14h : tournoi <br>- Vendredi à 20h : suivant le nombre de joueurs (individuel, duplicate, triplicate)<br><br>Horaire des cours<br>- Jeudi 18h 2ème année avec JFL<br>- Lundi 18H 3ème année avec Joel<br>- Lundi 17h30 1ere année avec Gérard F</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>          
</section>
<section class="mbr-section contacts1 cid-rZ4gAdgm1U" id="contacts1-8">
    <!---->
    <!---->
    <!--Overlay-->
    <!--Container-->
    <div class="container">
        <div class="row">
            <!--Titles-->
            <div class="title col-12">
                <h2 class="align-left mbr-fonts-style display-2">
                    Nous contacter</h2>
            </div>
            <!--Left-->
            <div class="col-12 col-md-6">
                <div class="left-block wrapper">
                    <div class="b b-adress">
                        <h5 class="align-left mbr-fonts-style m-0 display-5">
                            Adresse :
                        </h5>
                        <p class="mbr-text align-left mbr-fonts-style display-7">Le club est situé à Mont de Marsan, Plaine de la Hiroire <br>453, chemin des Sports (à coté du tennis club)</p>
                    </div>
                    <div class="b b-phone">
                        <h5 class="align-left mbr-fonts-style m-0 display-5">
                            Téléphone :
                        </h5>
                        <p class="mbr-text align-left mbr-fonts-style display-7">05.47.87.97.56</p>
                    </div>
                    <div class="b b-mail">
                        <h5 class="align-left mbr-fonts-style m-0 display-5">
                            E-mail :
                        </h5>
                        <p class="mbr-text align-left mbr-fonts-style display-7">
                            bridgeclub.montois@sfrclub.fr</p>
                    </div>
                </div>
            </div>
            <!--Right-->
            <div class="col-12 col-md-6">
                <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2875.0090649336166!2d-0.48235038464960944!3d43.89707897911371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd55d0f0867fe665%3A0xb0a4a550ab6dbc0c!2s453%20Chemin%20des%20Sports%2C%2040000%20Mont-de-Marsan!5e0!3m2!1sfr!2sfr!4v1589553660805!5m2!1sfr!2sfr" allowfullscreen=""></iframe></div>
            </div>
        </div>
    </div>
</section>
<section class="mbr-section form3 cid-rZ4g1BZO7r" id="form3-6">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="align-center pb-2 mbr-fonts-style display-2">
                    Restons en contact</h2>
                <h3 class="mbr-section-subtitle align-center pb-5 mbr-light mbr-fonts-style display-5">
                    Inscrivez vous aux actualités !</h3>
            </div>
        </div>
        <div class="row py-2 justify-content-center">
            <div class="col-12 col-lg-6  col-md-8 " data-form-type="formoid">
                <!---Formbuilder Form--->
                <form action="https://mobirise.com/" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="QgPSzuh8dhqCLXNIuHYJI1Kgx8+cdi1Df++UIhIe2zhU6Gk616/krRspjhNWlJPfFuz+9JmSg3V2wjbi/ycXVlFkrybUi1kHwCVbX/+tNb8wdhX+/BxO4VayNgcR2XlK">
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="form-group col" data-for="email">
                            <input type="email" name="email" placeholder="Email" data-form-field="Email" required="required" class="form-control display-7" id="email-form3-6">
                        </div>
                        <div class="col-auto input-group-btn"><button type="submit" class="btn btn-primary display-4">S'INSCRIRE</button></div>
                    </div>
                </form><!---Formbuilder Form--->
            </div>
        </div>
    </div>
</section>
<section once="footers" class="cid-rZ4gg10MPF" id="footer6-7">
    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7">
                    © Copyright 2019 Club Montois - All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section>
  <script src="/assets/web/assets/jquery/jquery.min.js"></script>
  <script src="/assets/popper/popper.min.js"></script>
  <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="/assets/smoothscroll/smooth-scroll.js"></script>
  <script src="/assets/tether/tether.min.js"></script>
  <script src="/assets/dropdown/js/nav-dropdown.js"></script>
  <script src="/assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="/assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="/assets/parallax/jarallax.min.js"></script>
  <script src="/assets/theme/js/script.js"></script>
  <script src="/assets/formoid/formoid.min.js"></script>
  <script src="/assets/notification-Hullabaloo/js/hullabaloo.js"></script>

<!-- Popup de bienvenue -->
  <?php
   if (isset($_SESSION['login_user'],$_SESSION['first_connexion'])){
      if ($_SESSION['first_connexion'] == 1){ ?>
        <script type="text/javascript">
        var hulla = new hullabaloo();
        hulla.send("Bonjour <?php echo $_SESSION['login_user']; ?> !", "success");
        </script> 
  <?php }} ?>

<!-- Popup de validation d'email -->
  <?php 
  if (isset($_SESSION["AccountVerify"])){ 
      if ($_SESSION["AccountVerify"] == 1){
      ?>
      <script type="text/javascript">
      var hulla = new hullabaloo();
      hulla.send("Votre compte a bien été créé !", "info");
      </script> 

      <?php
      }
      else {
      ?>
      <script type="text/javascript">
      var hulla = new hullabaloo();
      hulla.send("Une erreur est survenue !", "error");
      </script> 

      <?php }} ?>

<!-- Popup de suppression de compte -->
  <?php 
  if (isset($_SESSION["deletedCount"])){ 
      if ($_SESSION["deletedCount"] == 1){
      ?>
      <script type="text/javascript">
      var hulla = new hullabaloo();
      hulla.send("Votre compte a bien été supprimé !", "success");
      </script> 

      <?php
      }
      else if($_SESSION["deletedCount"] == 0){
      ?>
      <script type="text/javascript">
      var hulla = new hullabaloo();
      hulla.send("Votre compte n'a pas été supprimé  !", "info");
      </script> 
      
      <?php
      }
      else if($_SESSION["deletedCount"] == 2){
      ?>
      <script type="text/javascript">
      var hulla = new hullabaloo();
      hulla.send("Votre compte a déjà été supprimé  !", "info");
      </script> 

      <?php }}

unset($_SESSION['AccountVerify']);
unset($_SESSION['first_connexion']);
unset($_SESSION['logout']); 
unset($_SESSION['deletedCount']); ?>

</body>
</html>
  <!--hulla.send("jQuery Hullabaloo.js Plugin Examples", "info");
  hulla.send("A Bootstrap 4 Notification Plugin", "warning");-->
