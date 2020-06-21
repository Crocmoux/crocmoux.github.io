<?php
include("config.php");
session_start();

if (isset($_SESSION['article_publish'])){
  if (($_SESSION['article_publish']) == 1){
    $popupPublication = 1;
  } 
  elseif (($_SESSION['article_publish']) == 2){
    $popupPublication = 2;
  }
  unset($_SESSION['article_publish']); 
}

if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `Accounts`";
$result = mysqli_query($db,$sql);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="/assets/images/png-transparent-playing-card-card-game-hearts-spades-deck-of-cards-game-heart-hearts-128x128-1.png" type="image/x-icon">
  <meta name="description" content="Website Creator Description">
  <title>Administration | Club Bridge Montois</title>
  <link rel="stylesheet" href="/assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="/assets/tether/tether.min.css">
  <link rel="stylesheet" href="/assets/dropdown/css/style.css">
  <link rel="stylesheet" href="/assets/datatables/data-tables.bootstrap4.min.css">
  <link rel="stylesheet" href="/assets/theme/css/style.css">
  <link rel="preload" as="style" href="/assets/mobirise/css/mbr-additional.css">
  <link rel="stylesheet" href="/assets/mobirise/css/mbr-additional.css" type="text/css">

  <!-- Gestion des popups -->
  <link rel="stylesheet" href="/assets/notification-Hullabaloo/css/alert.css">
  <link rel="stylesheet" href="/assets/notification-Hullabaloo/css/hullabaloo.css">
</head>
<body>
  <section class="menu cid-rZ4dsyKntU" once="menu" id="menu1-11">
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
        <li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-4" href="faq.html" data-toggle="dropdown-submenu" aria-expanded="false">A propos</a><div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="leclub.html" aria-expanded="false">Le club</a><a class="text-white dropdown-item display-4" href="faq.html">Règles &amp; FAQ</a><a class="text-white dropdown-item display-4" href="contact.html" aria-expanded="false">Contact</a></div></li><li class="nav-item"><a class="nav-link link text-white display-4" href="actualites.html">
        Actualités</a></li><li class="nav-item"><a class="nav-link link text-white display-4" href="classement.html">
        Classement</a></li>
        <?php if (!isset($_SESSION['login_user'])){ ?> 
          <li class="nav-item"><a class="nav-link link text-white display-4" href="signin.php">Connexion</a></li>
        <?php } else { ?>
          <li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-4" href="" data-toggle="dropdown-submenu" aria-expanded="false"><?php echo $_SESSION['login_user']; ?></a><div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="param.php" aria-expanded="false">Paramètres</a><a class="text-white dropdown-item display-4" href="logout.php">Déconnexion</a></div></li>
        <?php } ?>
      </div>
    </nav>
  </section>
  <section class="section-table cid-rZlAlRvbOz" id="table1-13">
    <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">
      BRIDGECLUBMONTOIS</h2>
      <h3 class="mbr-section-subtitle mbr-fonts-style align-center pb-5 mbr-light display-5">Page d'administration du site web !</h3>
    </div>
  </section>
  <section class="tabs4 cid-s1ZOK0t3zl" id="tabs4-1x">
    <div class="">
    </div>
    <div class="tabs-container">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item"><a class="nav-link mbr-fonts-style show display-7 active" role="tab" data-toggle="tab" href="#tabs4-1x_tab0" aria-selected="true">
          Gestion des comptes
        </a></li>
        <li class="nav-item"><a class="nav-link mbr-fonts-style show display-7" role="tab" data-toggle="tab" href="#tabs4-1x_tab1" aria-selected="true">
          Édition d'articles
        </a></li>
      </ul>
      <div class="tab-content">
        <div id="tabs4-1x_tab0" class="tab-pane in active" role="tabpanel">
          <div class="col-md-12">
            <section class="section-table cid-rZlAlRvbOx" id="table1-13">
              <div class="container container-table">
                <div class="table-wrapper">
                  <div class="container">
                    <div class="row search">
                      <div class="col-md-6">
                        <div class="dataTables_filter">
                          <label class="searchInfo mbr-fonts-style display-7">Rechercher :</label>
                          <input class="form-control input-sm" disabled="">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="container scroll">
                    <table class="table isSearch" cellspacing="0">
                      <thead>
                        <tr class="table-heads ">
                          <th class="head-item mbr-fonts-style display-7">ID</th>
                          <th class="head-item mbr-fonts-style display-7">NAME</th>
                          <th class="head-item mbr-fonts-style display-7">MAIL</th>
                          <!--<th class="head-item mbr-fonts-style display-7">PASSWORD</th> -->
                          <th class="head-item mbr-fonts-style display-7">STATUS</th>
                          <!--<th class="head-item mbr-fonts-style display-7">EMAILACTIVATIONKEY</th>-->
                          <th class="head-item mbr-fonts-style display-7">ACTION</th>

                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        while($row = mysqli_fetch_array($result)){
                          echo "<tr>";
                          echo "<td class=\"body-item mbr-fonts-style display-7\" style=\"vertical-align:middle;\">".$row['id']."</td>";
                          echo "<td class=\"body-item mbr-fonts-style display-7\" style=\"vertical-align:middle;\">".$row['Name']."</td>";
                          echo "<td class=\"body-item mbr-fonts-style display-7\" style=\"vertical-align:middle;\">".$row['Mail']."</td>";
              //echo "<td class=\"body-item mbr-fonts-style display-7\">".$row['Password']."</td>";

                          echo "<td class=\"body-item mbr-fonts-style display-7\" style=\"vertical-align:middle;\">";
                          if ($row['Status'] == "1"){ echo "<span style=\"background-color:lime;\">ENREGISTRÉ</span>"; }
                          else{ echo "<span style=\"background-color:coral;\">NON ENREGISTRÉ</span>";}
                          if ($row['Admin'] == "1"){ echo "&nbsp;-&nbsp;<span style=\"background-color:yellow;\">ADMIN</span>"; }
                          echo "</td>";

              //echo "<td class=\"body-item mbr-fonts-style display-7\">".$row['EmailActivationKey']."</td>";
                          echo "<td> <button type=\"button\" name=\"delete\" id=\"".$row['id']."\" class=\"btn btn-danger btn-xs delete\" style=\"padding:0.1rem 0.1rem !important; margin: 0rem !important; background-color: red !important;border-color: black !important; !important\">SUPPRIMER</button>"; 
                          if ($row['Status'] == "0"){ echo "&nbsp;&nbsp;<button type=\"button\" name=\"enreg\" id=\"".$row['id']."\" class=\"btn btn-danger btn-xs enreg\" style=\"padding:0.1rem 0.1rem !important; margin: 0rem !important; background-color: blue !important;border-color: black !important; !important\">ENREGISTRER</button>"; }
                          if ($row['Admin'] == "0"){ echo "&nbsp;&nbsp;<button type=\"button\" name=\"add_admin\" id=\"".$row['id']."\" class=\"btn btn-danger btn-xs add_admin\" style=\"padding:0.1rem 0.1rem !important; margin: 0rem !important; background-color: navy !important;border-color: black !important; !important\">ADD ADMIN</button>"; } else { echo "&nbsp;&nbsp;<button type=\"button\" name=\"del_admin\" id=\"".$row['id']."\" class=\"btn btn-danger btn-xs del_admin\" style=\"padding:0.1rem 0.1rem !important; margin: 0rem !important; background-color: navy !important;border-color: black !important; !important\">DEL ADMIN</button>";}
                          echo "</td>";
                          echo "</tr>";
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                  <div class="container table-info-container">
                    <div class="row info">
                      <div class="col-md-6">
                        <div class="dataTables_info mbr-fonts-style display-7">
                          <span class="infoBefore">Résultat : </span>
                          <span class="inactive infoRows"></span>
                          <span class="infoAfter">entrées</span>
                          <span class="infoFilteredBefore">(filtré depuis</span>
                          <span class="inactive infoRows"></span>
                          <span class="infoFilteredAfter"> résultat(s))</span>
                        </div>
                      </div>
                      <div class="col-md-6"></div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
        <div id="tabs4-1x_tab1" class="tab-pane" role="tabpanel">
          <div class="col-md-12">
            <iframe class="col-md-12" src="articlesEditor.php" style="border:0;"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section once="footers" class="cid-rZ4gg10MPF" id="footer6-12">
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
  <script src="/assets/datatables/jquery.data-tables.min.js"></script>
  <script src="/assets/datatables/data-tables.bootstrap4.min.js"></script>
  <script src="/assets/theme/js/script.js"></script>
  <script src="/assets/admin/js/admin.js"></script>
  <script src="/assets/notification-Hullabaloo/js/hullabaloo.js"></script>


  <script type="text/javascript">
    var framefenster = document.getElementsByTagName("iframe");
    var auto_resize_timer = window.setInterval("autoresize_frames()", 400);
    function autoresize_frames() {
      for (var i = 0; i < framefenster.length; ++i) {
        if(framefenster[i].contentWindow.document.body){
          var framefenster_size = framefenster[i].contentWindow.document.body.offsetHeight;
          if(document.all && !window.opera) {
            framefenster_size = framefenster[i].contentWindow.document.body.scrollHeight;
          }
          framefenster[i].style.height = framefenster_size + 'px';
        }
      }
    }
  </script>
  <!-- Popup de publication d'article -->
  <?php
  if ($popupPublication == 1){ ?>
    <script type="text/javascript">
      var hulla = new hullabaloo();
      hulla.send("Article Publié !", "success");
    </script> 
  <?php }?>
  <?php
  if ($popupPublication == 2){ ?>
    <script type="text/javascript">
      var hulla = new hullabaloo();
      hulla.send("Article non Publié !", "warning");
    </script> 
  <?php }?>
</body>
</html>
