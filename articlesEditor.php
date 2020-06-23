<?php
include("config.php");
session_start();

// Si on n'est pas connecté ET pas admin
if (!isset($_SESSION['login_admin'],$_SESSION['login_user'])){
    header("location: index.php");
    exit;
} else {
    $user = $_SESSION['login_user'];
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username et password envoyé depuis le form 

    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    } 

    if (!empty($_POST['Title']) && !empty($_POST['Text'])){

        //echo "Titre :<".$_POST['Title'].">";
        //echo "Message :<".$_POST['Text'].">";
        $Title = mysqli_real_escape_string($db,$_POST['Title']);
        $Text = mysqli_real_escape_string($db,$_POST['Text']);
        $date = date('Y-m-d');

        $sql = "INSERT INTO `Articles`(`Name`, `PublicationDate`, `Text`, `Title`) VALUES ('$user','$date', '$Text', '$Title')";
        $result = mysqli_query($db,$sql);

        $_SESSION['article_publish'] = 1;
        header("location: admin.php");
        exit;

    }else {
        // Cas d'erreur a traiter
        $_SESSION['article_publish'] = 2;
        header("location: admin.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Articles Editeur | Club Bridge Montois</title>
</head>
<body style="background-color: #f9f9f9;">
    <div class="container">
        <link rel="stylesheet" href="/assets/Editor/src/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="/assets/Editor/src/css/all.min.css">
        <link href="/assets/Editor/src/css/wysiwyg.css" rel="stylesheet">
        <link href="/assets/Editor/src/css/highlight.min.css" rel="stylesheet">
        <div class="row">
            <div class="col-md-1">&nbsp;</div>
            <div class="col-md-10">
                <div class="well" style="margin: 2rem 0;">
                    <div class="form-group">

                        <form class="" action="" method="post" target="_top">

                            <label class="control-label">Titre:</label>
                            <textarea id="" name="Title" class="form-control" rows="0" style="resize: none;" placeholder="Bonjour et bienvenue sur le site du club de bridge de Mont de Marsan ! Cet encadré constitue le titre de l'article et est modifiable ! Le contenu de l'article se trouve en dessous."></textarea>

                        </br>
                        <label class="control-label" for="editor">Message:</label>
                        <textarea id="editor" name="Text" class="form-control" rows="3" >
                            <p style="text-align: justify; ">Bonjour et bienvenue sur le site du club de bridge de Mont de Marsan !</p><p style="text-align: justify; "><b>Cet article est modifiable et constitue un exemple !!</b></p><p style="text-align: justify; ">Ceci est un <b>exemple</b>&nbsp;d'utilisation de <font color="#ff0000"><b><i>l'éditeur d'article</i></b></font>. Vous pouvez rédiger vos propres articles. Il apparaîtront dans le fil d'actualité du site. De nombreux outils sont à votre disposition, de <sup>grands</sup>, de <sub>petits</sub> ... et bien plus encore...&nbsp;😁. N'oubliez pas de mettre un <font color="#0000ff"><b>titre</b></font> dans l'encadré supérieur.&nbsp;</p><p style="text-align: left;"></p><ul><li>Vous pouvez insérer des liens ou des images.</li><li>Vous pouvez insérer des tableaux.</li><li>Vous pouvez aligner le texte a gauche, a droite, le centrer ou le justifier :</li></ul><p style="text-align: left;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Augue neque gravida in fermentum et sollicitudin. Sed tempus urna et pharetra pharetra massa massa. Faucibus scelerisque eleifend donec pretium vulputate sapien nec sagittis aliquam. Elit at imperdiet dui accumsan sit amet nulla facilisi.&nbsp;</p><p style="text-align: center;">Nec nam aliquam sem et tortor consequat id porta. Magnis dis parturient montes nascetur ridiculus mus mauris vitae ultricies. Suspendisse ultrices gravida dictum fusce. Malesuada bibendum arcu vitae elementum curabitur vitae nunc. Lacus laoreet non curabitur gravida arcu ac. Tellus in hac habitasse platea dictumst vestibulum rhoncus est pellentesque.&nbsp;</p><p style="text-align: justify;">At tempor commodo ullamcorper a lacus vestibulum. Felis imperdiet proin fermentum leo vel orci. Egestas sed tempus urna et pharetra. Condimentum vitae sapien pellentesque habitant morbi. In massa tempor nec feugiat nisl pretium fusce id.&nbsp;Adipiscing elit ut aliquam purus sit. Proin nibh nisl condimentum id venenatis a condimentum vitae. Posuere morbi leo urna molestie at elementum eu.</p><p style="text-align: justify;">Une fois terminé, n'oubliez pas d'enregistrer l'article en cliquant sur <b><u>le bouton en bas de cette page</u></b>.⬇⬇⬇</p>
                        </textarea>
                    </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">PUBLIER</button>
                    </form>
                </div>
            </div>
        </div>
        <!--</div>-->

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

        <script src="/assets/Editor/src/js/bootstrap.min.js"></script>
        <script src="/assets/Editor/src/js/wysiwyg.js"></script>
        <script src="/assets/Editor/src/js/highlight.js"></script>

    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#editor').wysiwyg({

            });
        });
    </script>
</body>
</html>