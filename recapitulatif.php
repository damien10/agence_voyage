<?php
  session_start(); // démarrage de la session
  // obligatoire pour récupérer les variables de session stockées
  $_SESSION['choix_voyage'] = $_POST['choix_voyage'];
  $_SESSION['nombre'] = $_POST['nombre'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Agence de voyage</title>
  </head>
  <body>
    <?php
      if ($_SESSION['voyage-excursion'] == "voyage") {
        echo '<h3>Résumé de votre demande</h3><br>';
        echo 'Bonjour, '.$_SESSION['civilite'].' '.$_SESSION['prenom'].' '.$_SESSION['nom'].'<br>';
        echo 'Vous avez choisie un voyage au <strong>'.$_SESSION['choix_voyage'].'</strong> au prix de <strong> '.$_SESSION[''].'</strong> par personne<br>';
        echo 'Vous nous avez indiqué '.$_SESSION['nombre'].' personnes<br>';
        echo 'Le montant total est de '.$_SESSION[''].' €';
        echo '<br><a class="rouge" href="formulaire.php">Retour au formulaire</p>';
      }
      else {
        # code...
      }
    ?>
  </body>
</html>
