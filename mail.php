<?php
     // Plusieurs destinataires
     $to  = 'charlesmaisonb@gmail.com'; // notez la virgule

     // Sujet
     $subject = 'Calendrier des anniversaires pour Août';

     // message
     $message = '
     <html>
      <head>
       <title>Calendrier des anniversaires pour Août</title>
      </head>
      <body>
       <p>Voici les anniversaires à venir au mois d\'Août !</p>
       <table>
        <tr>
         <th>Personne</th><th>Jour</th><th>Mois</th><th>Année</th>
        </tr>
        <tr>
         <td>Josiane</td><td>3</td><td>Août</td><td>1970</td>
        </tr>
        <tr>
         <td>Emma</td><td>26</td><td>Août</td><td>1973</td>
        </tr>
       </table>
      </body>
     </html>
     ';

     // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
     $headers[] = 'MIME-Version: 1.0';
     $headers[] = 'Content-type: text/html; charset=iso-8859-1';

     // En-têtes additionnels
     $headers[] = 'To: Mary <mary@example.com>, Kelly <kelly@example.com>';
     $headers[] = 'From: BridgeClubMontois <support@bridgeclubmontois.fr>';
     //$headers[] = 'Cc: anniversaire_archive@example.com';
     //$headers[] = 'Bcc: anniversaire_verif@example.com';

     // Envoi
     mail($to, $subject, $message, implode("\r\n", $headers));

     echo "MESSAGE ENVOYE";
?>