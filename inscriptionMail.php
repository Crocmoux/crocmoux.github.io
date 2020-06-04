<?php
    session_start();

    echo $user = $_SESSION['mail_username'];
    echo $mail = $_SESSION['mail_email'];
    echo $ActivationKey = $_SESSION['mail_ActivationKey'];


     // Plusieurs destinataires
     $to  = $mail; // avec une virgule pour plusieurs personnes

     // Sujet
     $subject = 'Bienvenue au clud de Bridge de Mont de Marsan !';

     // message
     $message = '
     <html>
      <head>
       <title>Bienvenue au clud de Bridge de Mont de Marsan !</title>
      </head>
      <body>
       <p>Bonjour '.$user.' !</p>

       Veuillez cliquer sur le lien ci dessous afin de valider votre inscription :
       '.$ActivationKey.'
  
      </body>
     </html>
     ';

     // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
     $headers[] = 'MIME-Version: 1.0';
     $headers[] = 'Content-type: text/html; charset=iso-8859-1';

     // En-têtes additionnels
     $headers[] = 'To: '.$user.' <'.$mail.'>';
     $headers[] = 'From: BridgeClubMontois <support@bridgeclubmontois.fr>';

     // Envoi
     mail($to, $subject, $message, implode("\r\n", $headers));

     echo "MESSAGE ENVOYE";
     unset($_SESSION['mail_username']);
     unset($_SESSION['mail_email']);
     unset($_SESSION['mail_ActivationKey']);

?>
