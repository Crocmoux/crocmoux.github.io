<?php
   include('session.php');
   session_start();
?>
<html">
   
   <head>
      <title>Bienvenue</title>
   </head>
   
   <body>
      <h1>Bienvenue <?php echo $_SESSION['login_user']; ?></h1> 
      <h2><a href = "logout.php">Quitter</a></h2>
   </body>
   
</html>
