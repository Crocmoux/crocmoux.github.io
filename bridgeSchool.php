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
  <meta name="description" content="Website Maker Description">
  
  
  <title>L'Ecole du Bridge | Club Bridge Montois</title>
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

<section class="mbr-section content4 cid-rZlIMFY32M" id="content4-1d">
  <div class="container">
    <div class="media-container-row">
      <div class="title col-12 col-md-8">
        <h2 class="align-center pb-3 mbr-fonts-style display-2">Bridge - Les règles du jeu</h2>
        <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">Les conventions que je vous propose s'adressent aux joueurs qui débuteraient la compétition et voudraient se mettre au point avec leur partenaire.</h3>
        
      </div>
    </div>
  </div>
</section>

<section class="mbr-section content4 cid-rZlJC4b5bU" id="content4-1g">

  

  <div class="container">
    <div class="media-container-row">
      <div class="title col-12 col-md-8">
        <h2 class="align-center pb-3 mbr-fonts-style display-5">
        Le principe du jeu</h2>
        
        
      </div>
    </div>
  </div>
</section>

<section class="mbr-section article content1 cid-rZlJ7wvKyp" id="content1-1e">
  
 

  <div class="container">
    <div class="media-container-row">
      <div class="mbr-text col-12 mbr-fonts-style display-7 col-md-10"><p><strong>2 camps de 2 joueurs</strong><br></p><p>Le Bridge se joue à 4 joueurs répartis en 2 équipes (ou paires). A la table de Bridge chaque joueur s'assoie en face de son partenaire. Il est d'usage de repérer les joueurs l'aide des points cardinaux : l'équipe Nord-Sud est donc opposée l'équipe Est-Ouest.</p><p><strong>Couleurs et honneurs</strong></p><p>Pour jouer on utilise un jeu de 52 cartes comprenant 4 couleurs de 13 cartes chacune : les Piques, les Cœurs, les Carreaux et les Trèfles. Dans chaque couleur la carte la plus forte est l'As, puis le Roi, la Dame, le Valet, le 10, le 9 et ainsi de suite jusqu'au 2. As, Roi, Dame et Valet constituent les 4 honneurs d'une couleur.</p><p><strong>Majeures et mineures</strong></p><p>Ces 4 couleurs sont classées en 2 catégories : Pique et Cœur sont appelées des couleurs "majeures". Carreau et Trèfle sont appelées des couleurs "mineures".</p><p><strong>Distribution des cartes</strong></p><p>Chaque joueur est donneur à tour de rôle. La distribution des cartes se fait une une, joueur par joueur, en tournant dans le sens des aiguilles d'une montre. Chaque joueur reçoit 13 cartes.</p><p><strong>Une levée</strong></p><p>Lorsque l'on joue, l'un des joueurs (nous verrons plus loin lequel) choisit une de ses cartes et la pose sur la table, face découverte. Puis le joueur situé à sa gauche fait de même et enfin les 2 autres joueurs. Les 4 cartes ainsi posées sur la table constituent une levée et cette levée est gagnée par le camp du joueur qui fournit la carte la plus forte.</p><p><strong><span style="font-size: 1rem;">Le but du jeu : faire des levées</span><br></strong></p><p>Le jeu consiste, pour chaque camp, à réaliser un nombre de levées (ou de plis) au moins égal au nombre de levées déterminé par les enchères. Puisque chaque joueur a 13 cartes, il y a 13 levées possibles.</p></div>
    </div>
  </div>
</section>

<section class="mbr-section content4 cid-rZlKsPdQMn" id="content4-1h">

  

  <div class="container">
    <div class="media-container-row">
      <div class="title col-12 col-md-8">
        <h2 class="align-center pb-3 mbr-fonts-style display-5">
        Les enchères</h2>
        
        
      </div>
    </div>
  </div>
</section>

<section class="mbr-section article content1 cid-rZlKXxXOvQ" id="content1-1i">
  
 

  <div class="container">
    <div class="media-container-row">
      <div class="mbr-text col-12 mbr-fonts-style display-7 col-md-10"><p><span style="font-size: 1rem;">Une donne de Bridge comporte 2 phases successives : les "enchêres" et le "jeu de la carte".</span></p><p><strong>Le camp du déclarant</strong></p><p>Les enchères ont pour but de déterminer la fois la couleur d'atout (ou Sans-Atout) et le nombre de levées minimum qu'aura réaliser le camp qui aura fait la dernière enchère, que l'on appelle le camp déclarant. Le camp adverse s'appelle le camp de la défense ou le "flanc".</p><p><strong>Une enchère comprend 2 éléments</strong></p><p>Ces 2 éléments sont :</p><p>&nbsp;&nbsp;&nbsp;&nbsp;- Un nombre de 1 à 7 (que l'on appelait autrefois un "tric" et que l'on appelle aujourd'hui un palier)</p><p>&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: 1rem;">- Une couleur (Trêfle, Carreau, Cœur ou Pique) ou le mot "Sans-Atout".</span></p><p>Par exemple "2 Piques" est une enchère, de même que "3 Sans-Atout".</p><p><strong>Atout et Sans-Atout (SA)</strong></p><p>La couleur détermine l'atout que l'on propose d'adopter.</p><p>Sans-Atout (not SA) veut dire que l'on propose de jouer sans qu'il n'y ait d'atout.</p><p><strong>Hiérarchie des couleurs</strong></p><p>Pour les enchères, les 4 couleurs sont hiérarchisées : la couleur la plus chère est Pique, puis Cœur, puis Carreau et enfin Trêfle qui est la couleur la moins chère.</p><p><strong>Enchères et surenchères</strong></p><p>C'est le joueur qui a distribué les cartes, le "donneur", qui a le premier la parole pour faire une enchère, ou "Passer". Ensuite chaque joueur, tour de rôle et dans le sens des aiguilles d'une montre, fait son tour une surenchère. Une surenchère ne peut être faite que si elle est plus forte que l'enchère précédente en respectant la hiérarchie des couleurs et sachant que Sans-Atout est plus fort que toutes les autres couleurs.</p><p><strong>L'ordre croissant des enchères</strong></p><p>L'ordre croissant des enchères est donc : 1 Trèfle, 1 Carreau, 1 Cœur, 1 Pique, 1 Sans-Atout 2 Trèfles, 2 Carreaux, 2 Cœurs, 2 Piques, 2 Sans-Atout 3 Trèfles, etc. jusqu' 7 Sans-Atout. La plus petite enchère possible est donc "1 Trêfle" et l'enchère la plus forte est "7 Sans-Atout". Si l'on ne veut pas faire d'enchère, on "Passe". Il y a généralement plusieurs tours successifs d'enchères et un joueur qui a Passé peut parfaitement enchérir quand revient son tour de parole.</p><p><strong>Contre et surcontre</strong></p><p>Un joueur a le droit de Contrer l'enchère faite par l'adversaire et celui-ci peut son tour surcontrer. Contre et surcontre augmentent le nombre de points gagnés ou perdus.</p><p><strong>Le contrat final</strong></p><p>Les enchères s'arrêtent quand 3 joueurs consécutifs ont déclar "Passe" : dès lors plus personne ne peut se manifester et la dernière enchère faite devient le contrat final.</p><p><strong>Les levées réaliser</strong><br></p><p>Le camp qui a fait la dernière enchère devient le camp déclarant. Il doit réaliser au moins autant de levées que le palier du contrat final, plus 6. Par exemple, si Sud annonce "4 Piques" et que les 3 autres joueurs Passent, "4 Piques" devient le contrat final et le camp Nord-Sud s'engage réaliser au moins 10 levées, Pique étant désigné comme couleur d'atout. Si le camp Nord-Sud réalise au moins 10 levées, on dit qu'il "gagne son contrat" et il marque des points. En revanche s'il réalise moins de 10 levées, on dit qu'il "chute son contrat" et c'est le camp adverse qui marque des points. Ces points sont majorés si le contrat a été Contré ou surcontré .</p></div>
    </div>
  </div>
</section>

<section once="footers" class="cid-rZ4gg10MPF" id="footer6-10">
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
<script src="/assets/mbr-switch-arrow/mbr-switch-arrow.js"></script>
<script src="/assets/theme/js/script.js"></script>


</body>
</html>
