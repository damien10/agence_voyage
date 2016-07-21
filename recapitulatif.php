<?php
  session_start(); // démarrage de la session
  // obligatoire pour récupérer les variables de session stockées
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Agence de voyage</title>
  </head>
  <body>
<<<<<<< HEAD
<h1> 
</h1>
=======
    <?php
      echo '<h3>Résumé de votre demande</h3><br>';
      echo 'Bonjour, '.$_SESSION['civilite'].' '.$_SESSION['prenom'].' '.$_SESSION['nom'].'<br>';
      echo 'Vous avez choisie une excursion <strong>'.$_SESSION[''].' au prix de <strong> '.$_SESSION[''].' par personne<br>';
      echo 'Vous nous avez indiqué '.$_SESSION[''].' personnes<br>';
      echo 'Le montant total est de '.$_SESSION[''].' €';
      echo '<br><a class="rouge" href="formulaire.php">Retour au formulaire</p>';
    ?>
>>>>>>> d3909f66db81c9a795da0f8bdb3a0803a179f4a0
  </body>
</html>
