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
  <meta name="description" content="Website Creator Description">
  
  
  <title>Agenda | Club Bridge Montois</title>
  <link rel="stylesheet" href="/assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="/assets/tether/tether.min.css">
  <link rel="stylesheet" href="/assets/dropdown/css/style.css">
  <link rel="stylesheet" href="/assets/theme/css/style.css">
  <link rel="preload" as="style" href="/assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="/assets/mobirise/css/mbr-additional.css" type="text/css">
  
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
            <li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-4" href="" data-toggle="dropdown-submenu" aria-expanded="false">Le Club</a><div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="comity.php" aria-expanded="false">Notre Bureau</a><a class="text-white dropdown-item display-4" href="professors.php">Nos Professeurs</a><a class="text-white dropdown-item display-4" href="agenda.php" aria-expanded="false">L'Agenda du Club</a></div>
            </li>
            <li class="nav-item"><a class="nav-link link text-white display-4" href="clubLife.php">
            La vie du Club</a>
        </li>
        <li class="nav-item"><a class="nav-link link text-white display-4" href="bridgeSchool.php">
        L'Ecole de Bridge</a>
    </li>
    <li class="nav-item"><a class="nav-link link text-white display-4" href="contactFAQ.php">
    Contact & FAQ</a>
</li>

<?php if (!isset($_SESSION['login_user'])){ ?> 
    <li class="nav-item"><a class="nav-link link text-white display-4" href="signin.php">Connexion</a></li>
<?php } else { ?>
  <li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-4" href="" data-toggle="dropdown-submenu" aria-expanded="false"><?php echo $_SESSION['login_user']; ?></a>
    <div class="dropdown-menu">
      <a class="text-white dropdown-item display-4" href="param.php" aria-expanded="false">Paramètres</a>
      <?php if (isset($_SESSION['login_admin'])){ ?> <a class="text-white dropdown-item display-4" href="admin.php">Administration</a><?php } ?>
      <a class="text-white dropdown-item display-4" href="logout.php">Déconnexion</a>
  </div>
</li>
<?php } ?>
</ul>
</div>
</nav>
</section>

<section class="countdown1 cid-rZlCVDuZnb" id="countdown1-16">
    
    
    
    <div class="container ">
        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2">
        Prochain concours</h2>
        <h3 class="mbr-section-subtitle align-center mbr-fonts-style display-5">
        Le prochain concours aura lieu le 1er Juin 2020 dans notre club de bridge.</h3>
        
    </div>
    <div class="container countdown-cont align-center">
        <div class="daysCountdown col-xs-3 col-sm-3 col-md-3" title="Jours"></div>
        <div class="hoursCountdown col-xs-3 col-sm-3 col-md-3" title="Heures"></div> 
        <div class="minutesCountdown col-xs-3 col-sm-3 col-md-3" title="Minutes"></div> 
        <div class="secondsCountdown col-xs-3 col-sm-3 col-md-3" title="Secondes"></div>
        <div class="countdown pt-5 mt-2" data-due-date="2020/06/01"> 
        </div>
    </div>
</section>

<section class="timeline2 cid-rZlEnDOqVa" id="timeline2-18">

    

    

    <div class="container align-center">
        <h2 class="mbr-section-title pb-3 mbr-fonts-style display-2">
        Programme</h2>
        <h3 class="mbr-section-subtitle pb-5 mbr-fonts-style display-5">
        Programme du prochain concours : 1er Juin 2020</h3>

        <div class="container timelines-container" mbri-timelines="">
            <!--1-->
            <div class="row timeline-element reverse separline">
                <span class="iconsBackground">
                    <span class="mbr-iconfont mbri-clock"></span>
                </span>          
                <div class="col-xs-12 col-md-6 align-left">
                    <div class="timeline-text-content">
                        <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-5">
                        14h - Accueil des participants</h4>
                        <p class="mbr-timeline-text mbr-fonts-style display-7">Accueil des participants par le directeur du club</p>
                    </div>
                </div>
            </div>
            <!--2-->
            <div class="row timeline-element  separline">
                <span class="iconsBackground">
                    <span class="mbr-iconfont mbri-hot-cup"></span>
                </span>
                <div class="col-xs-12 col-md-6 align-left ">
                    <div class="timeline-text-content">
                        <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-5">
                        14h30 - Café de bienvenue</h4>
                        <p class="mbr-timeline-text mbr-fonts-style display-7">
                        Un café sera offert a tous les participants du tournoi.</p>
                    </div>
                </div>
            </div>
            <!--3-->
            <div class="row timeline-element reverse separline">
                <span class="iconsBackground">
                    <span class="mbr-iconfont mbri-play"></span>
                </span>
                <div class="col-xs-12 col-md-6 align-left">
                    <div class="timeline-text-content">
                        <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-5">
                        15h00 - Début du tournoi</h4>      
                        <p class="mbr-timeline-text mbr-fonts-style display-7">Début de l'ouverture du tournoi, pas de pauses</p>
                    </div>
                </div>
            </div>
            <!--4-->
            <div class="row timeline-element  separline">
                <span class="iconsBackground">
                    <span class="mbr-iconfont mbri-close"></span>
                </span>
                <div class="col-xs-12 col-md-6 align-left ">
                    <div class="timeline-text-content">
                        <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-5">
                        17h00 - Fin du tournoi</h4>
                        <p class="mbr-timeline-text mbr-fonts-style display-7">Fin estimée du tournoi</p>
                    </div>
                </div>
            </div>
            <!--5-->
            <div class="row timeline-element reverse">
                <span class="iconsBackground">
                    <span class="mbr-iconfont mbri-gift"></span>
                </span>
                <div class="col-xs-12 col-md-6 align-left">
                    <div class="timeline-text-content">
                        <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-5">
                        17h30 - Remise des résultats</h4>
                        <p class="mbr-timeline-text mbr-fonts-style display-7">
                        Remise des résultats et des prix par le président de la séance</p>
                    </div>
                </div>
            </div>
            <!--6-->
            
            <!--7-->
            
            <!--8-->
            
            <!--9-->
            
            <!--10-->
            
            <!--11-->
            
            <!--12-->
            
        </div>
    </div>
</section>

<section once="footers" class="cid-rZ4gg10MPF" id="footer6-15">

    

    

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
<script src="/assets/tether/tether.min.js"></script>
<script src="/assets/smoothscroll/smooth-scroll.js"></script>
<script src="/assets/dropdown/js/nav-dropdown.js"></script>
<script src="/assets/dropdown/js/navbar-dropdown.js"></script>
<script src="/assets/touchswipe/jquery.touch-swipe.min.js"></script>
<script src="/assets/countdown/jquery.countdown.min.js"></script>
<script src="/assets/theme/js/script.js"></script>


</body>
</html>
