<?php
include("config.php");
session_start();

$sql = "SELECT * FROM `Articles` ORDER BY `id` DESC";
$result = mysqli_query($db,$sql);
?>

<!DOCTYPE html>
<html  >
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<link rel="shortcut icon" href="/assets/images/png-transparent-playing-card-card-game-hearts-spades-deck-of-cards-game-heart-hearts-128x128-1.png" type="image/x-icon">
	<meta name="description" content="Website Maker Description">
	
	
	<title>La vie du Club | Club Bridge Montois</title>
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

<section class="mbr-section content4 cid-rZlIMFY32M" id="content4-1d">
	<div class="container">
		<div class="media-container-row">
			<div class="title col-12 col-md-8">
				<h2 class="align-center pb-3 mbr-fonts-style display-2">Vie du Bridge Club Montois - Tous les billets</h2>                
			</div>
		</div>
	</div>
</section>

<?php
while($row = mysqli_fetch_array($result))
	{?>
		<div class="container">
			<div class="col-md-12">
				<h2><?php echo $row['Title']?></h2>
			</br>
			<?php echo $row['Text'];?>
			<div>
				<h6>
					<span class="badge badge-info">Publié le : <?php echo $row['PublicationDate'] ?></span>&nbsp;
					<span class="badge badge-warning">Par  : <?php echo $row['Name'] ?></span>
				</h6>
			</div>
			<hr style="border: 2px solid #55b4d4; border-radius: 10px;">
		</div>     
	</div>
<?php } ?>

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
