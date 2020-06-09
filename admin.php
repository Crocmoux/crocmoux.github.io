<?php
  include("config.php");
  session_start();

  if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
   }

  $sql = "SELECT * FROM `Accounts`";
  $result = mysqli_query($db,$sql);

  /*
  echo "<table border='1'><tr><th>Firstname</th><th>Lastname</th></tr>";

  while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>" . $row['Name'] . "</td>";
    echo "<td>" . $row['Mail'] . "</td>";
    echo "</tr>";
  }
  echo "</table>";


  while($table = $row) { // go through each row that was returned in $result
    echo($table[0] . "<br>");    // print the table that was returned on that row.
  }

  //$showtables = mysql_query($db,$sql);
  //$row = mysqli_fetch_array($showtables,MYSQLI_ASSOC);
  
  /*while($table = $row) { // go through each row that was returned in $result
    echo($table[0] . "<br>");    // print the table that was returned on that row.
  }
*/
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
                    <a class="nav-link link text-white display-4" href="index.html">
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
<section class="section-table cid-rZlAlRvbOy" id="table1-13">
  <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">
          BRIDGECLUBMONTOIS</h2>
      <h3 class="mbr-section-subtitle mbr-fonts-style align-center pb-5 mbr-light display-5">Page d'administration du site web !</h3>
      <div class="table-wrapper">
        <div class="container">
          <div class="row search">
            <div class="col-md-6"></div>
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
              if ($row['Status'] == "1"){ echo "ENREGISTRÉ"; }else{ echo "NON ENREGISTRÉ";}
              echo "</td>";

              //echo "<td class=\"body-item mbr-fonts-style display-7\">".$row['EmailActivationKey']."</td>";
              echo "<td> <button type=\"button\" name=\"delete\" id=\"".$row['id']."\" class=\"btn btn-danger btn-xs delete\" style=\"padding:0.1rem 0.1rem !important; margin: 0rem !important; background-color: red !important;border-color: black !important; !important\">SUPPRIMER</button></td>";
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
                <span class="infoBefore">Showing</span>
                <span class="inactive infoRows"></span>
                <span class="infoAfter">entries</span>
                <span class="infoFilteredBefore">(filtered from</span>
                <span class="inactive infoRows"></span>
                <span class="infoFilteredAfter"> total entries)</span>
              </div>
            </div>
            <div class="col-md-6"></div>
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

</body>
</html>
