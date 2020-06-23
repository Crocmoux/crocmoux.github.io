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
  <meta name="description" content="Website Builder Description">
  
  
  <title>Contact | Club Bridge Montois</title>
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
            <ul class="navbar-nav nav-dropdown nav-right navbar-nav-top-padding" data-app-modern-menu="true">
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="index.php">Accueil</a>
                </li>
                <li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-4" href="" data-toggle="dropdown-submenu" aria-expanded="false">Le Club</a><div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="comity.php" aria-expanded="false">Notre Bureau</a><a class="text-white dropdown-item display-4" href="professors.php">Nos Professeurs</a><a class="text-white dropdown-item display-4" href="agenda.php" aria-expanded="false">L'Agenda du Club</a></div>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="clubLife.php">La vie du Club</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="bridgeSchool.php">L'Ecole de Bridge</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="contactFAQ.php">Contact & FAQ</a>
                </li>

                <?php if (!isset($_SESSION['login_user'])){ ?> 
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="signin.php">Connexion</a>
                </li>
                <?php } else { ?>
                <li class="nav-item dropdown">
                    <a class="nav-link link text-white dropdown-toggle display-4" href="" data-toggle="dropdown-submenu" aria-expanded="false"><?php echo $_SESSION['login_user']; ?></a>
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

<section class="mbr-section content4 cid-rZlMVVpQL8" id="content4-1j">



    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2">
                Nous contacter :</h2>
                
                
            </div>
        </div>
    </div>
</section>

<section class="mbr-section contacts3 cid-rZluATXjXL" id="contacts3-x">
    <!---->
    
    <!---->
    <!--Overlay-->
    
    <!--Container-->
    <div class="container">
        <div class="row">
            <!--Titles-->
            <div class="title col-12">


            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="wrapper">
                            <span class="iconfont-wrapper">
                                <span class="amp-iconfont icon fa-thumbs-o-up fa"></span>
                            </span>
                            <div class="b-info b-adress">
                                <h5 class="align-left mbr-fonts-style display-5">
                                    Adresse:
                                </h5>
                                <p class="mbr-text align-left mbr-fonts-style display-7">Le club est situé à Mont de Marsan, Plaine de la Hiroire <br>453, chemin des Sports (à coté du tennis club)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="wrapper">
                            <span class="iconfont-wrapper">
                                <span class="amp-iconfont icon fa-phone fa"></span>
                            </span>
                            <div class="b-info b-phone">
                                <h5 class="align-left mbr-fonts-style display-5">
                                    Téléphone:
                                </h5>
                                <p class="mbr-text align-left mbr-fonts-style display-7">
                                    Vous pouvez nous contacter au numéro suivant :<br>05.47.87.97.56<br></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="wrapper">
                                <span class="iconfont-wrapper">
                                    <span class="amp-iconfont icon fa-comment-o fa"></span>
                                </span>
                                <div class="b-info b-mail">
                                    <h5 class="align-left mbr-fonts-style display-5">
                                        E-mail:
                                    </h5>
                                    <p class="mbr-text align-left mbr-fonts-style display-7">Vous pouvez nous contacter a l'adresse mail suivante : bridgeclubmontois40@gmail.com
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="wrapper">
                                <span class="iconfont-wrapper">
                                    <span class="amp-iconfont icon fa-th-large fa"></span>
                                </span>
                                <div class="b-info b-mail">
                                    <h5 class="align-left mbr-fonts-style display-5">
                                    Heures d'ouvertures :</h5>
                                    <p class="mbr-text align-left mbr-fonts-style display-7">Horraires variables, nous contacter.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mbr-section form1 cid-rZluxBJOCV" id="form1-w">




        <div class="container">
            <div class="row justify-content-center">
                <div class="title col-12 col-lg-8">
                    <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
                    Formulaire de contact :</h2>
                    <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">
                    Envoyer nous un message en complétant le formulaire suivant.</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="media-container-column col-lg-8" data-form-type="formoid">
                    <!---Formbuilder Form--->
                    <form action="https://mobirise.com/" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="MUI3BMytFfeRLcQrkpH6Ai2m5wyl05u+JwFfiV4nL3mvh5OxqaHu/TLmzj/zLc54/ShUX5IYtcjU9nB4UGnk1ozyL95sOpBlMnPWN2/FXMJKR2GcAv/H2Y82Dfz8wjJd">
                        <div class="row">
                            <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Votre message à bien été envoyé !</div>
                            <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                            </div>
                        </div>
                        <div class="dragArea row">
                            <div class="col-md-4  form-group" data-for="name">
                                <label for="name-form1-w" class="form-control-label mbr-fonts-style display-7">Nom</label>
                                <input type="text" name="name" data-form-field="Name" required="required" class="form-control display-7" placeholder="Votre nom" id="name-form1-w">
                            </div>
                            <div class="col-md-4  form-group" data-for="email">
                                <label for="email-form1-w" class="form-control-label mbr-fonts-style display-7">Email</label>
                                <input type="email" name="email" data-form-field="Email" required="required" class="form-control display-7" placeholder="Votre adresse Email" id="email-form1-w">
                            </div>

                            <div data-for="message" class="col-md-12 form-group">
                                <label for="message-form1-w" class="form-control-label mbr-fonts-style display-7">Message</label>
                                <textarea name="message" data-form-field="Message" class="form-control display-7" placeholder="Votre Message" id="message-form1-w"></textarea>
                            </div>
                            <div class="col-md-12 input-group-btn align-center"><button type="submit" class="btn btn-primary btn-form display-4">ENVOYER</button></div>
                        </div>
                    </form><!---Formbuilder Form--->
                </div>
            </div>
        </div>
    </section>

    <section class="map1 cid-rZluEpQNNl" id="map1-y">



        <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2875.0090649336166!2d-0.48235038464960944!3d43.89707897911371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd55d0f0867fe665%3A0xb0a4a550ab6dbc0c!2s453%20Chemin%20des%20Sports%2C%2040000%20Mont-de-Marsan!5e0!3m2!1sfr!2sfr!4v1589553660805!5m2!1sfr!2sfr" allowfullscreen=""></iframe></div>
    </section>


    <section class="mbr-section content4 cid-rZlHcGmSK6" id="content4-1a">



        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 col-md-8">
                    <h2 class="align-center pb-3 mbr-fonts-style display-2">
                    FAQ</h2>
                    <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">
                    Retrouvez un ensemble des questions régulièrement posé !</h3>

                </div>
            </div>
        </div>
    </section>

    <section class="toggle1 cid-rZlHRz64IO" id="toggle1-1c">    
        <div class="container">
            <div class="media-container-row">
                <div class="col-12 col-md-8">
                    <div class="section-head text-center space30">

                    </div>
                    <div class="clearfix"></div>
                    <div id="bootstrap-toggle" class="toggle-panel accordionStyles tab-content">
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne">
                                <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core="" href="#collapse1_20" aria-expanded="false" aria-controls="collapse1">
                                    <h4 class="mbr-fonts-style display-5">
                                        <span class="sign mbr-iconfont mbri-arrow-down inactive"></span> Comment venir au club ?
                                    </h4>
                                </a>
                            </div>
                            <div id="collapse1_20" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body p-4">
                                    <p class="mbr-fonts-style panel-text display-7">
                                    Un parking est a disposition des joueurs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingTwo">
                                <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core="" href="#collapse2_20" aria-expanded="false" aria-controls="collapse2">
                                    <h4 class="mbr-fonts-style display-5">
                                        <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>&nbsp;Autre question 1 ?
                                    </h4>
                                </a>

                            </div>
                            <div id="collapse2_20" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body p-4">
                                    <p class="mbr-fonts-style panel-text display-7">blal fzG A Q ZGHAQG&nbsp;</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingThree">
                                <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core="" href="#collapse3_20" aria-expanded="false" aria-controls="collapse3">
                                    <h4 class="mbr-fonts-style display-5">
                                        <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>&nbsp;Autre question 2 ?
                                    </h4>
                                </a>
                            </div>
                            <div id="collapse3_20" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body p-4">
                                    <p class="mbr-fonts-style panel-text display-7">
                                     Principales différences par <strong>rapport</strong> aux ....</p>
                                 </div>
                             </div>
                         </div>                        
                     </div>
                 </div>
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
    <script src="/assets/theme/js/script.js"></script>
    <script src="/assets/formoid/formoid.min.js"></script>


</body>
</html>
