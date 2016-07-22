<?php
  session_start(); // démarrage de la session
  // obligatoire pour récupérer les variables de session stockées
  $_SESSION['nombre'] = $_POST['nombre'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags ​must​ come first in the head; any other head content must come ​after​ these tags -->
  <!-- <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico"> -->    <title>Formulaire</title>    <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Modif CSS  -->
  <link href="css/styleperso.css" rel="stylesheet">    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="js/ie-emulation-modes-warning.js"></script>    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->    <!-- Custom styles for this template -->
  <!-- <link href="" rel="stylesheet"> -->    <!-- jquery libs -->
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      <title>Formulaire</title>  </head>
<body>
  <header class="well bg-opacity col-md-10 col-md-offset-1">
    <h1 class="text-center">Bienvenue dans l'agence de voyage du cargo qui fuit</h1>
  </header>    <div class="containerpanel panel-default col-md-6 col-md-offset-3">
    <!-- Default panel contents -->
    <!-- <div class="panel-heading bg-panel-heading text-center">Commandez vos billets</div>
    <div class="panel-body"> -->
      <div class="col-md-10 col-md-offset-1">

    <?php

      if ($_SESSION['voyage-excursion'] == "voyage") {

        $_SESSION['choix-voyage'] = $_POST['choix-voyage'];

        switch ($_SESSION['choix-voyage']) {
          case 'Caraibes':
            $_SESSION['prix'] = 4500;
            break;

          case 'Canaries':
            $_SESSION['prix'] = 3500;
            break;

          // Ajouter un voyage ici

          default:
            # code...
            break;
        }
        // echo '<div class="well">';
        $prixTotal = $_SESSION['prix'] * $_SESSION['nombre'];
        echo '<div class="well bg-panel-heading text-center">';
        echo '<h3>Résumé de votre demande</h3><br>';
        echo 'Bonjour, '.$_SESSION['civilite'].' '.$_SESSION['prenom'].' '.$_SESSION['nom'].'<br>';
        echo 'Vous avez choisie un voyage au <strong>'.$_SESSION['choix-voyage'].'</strong> au prix de <strong> '.$_SESSION['prix'].'€</strong> par personne<br>';
        echo 'Vous nous avez indiqué '.$_SESSION['nombre'].' personnes<br>';
        echo 'Le montant total est de '.$prixTotal.' €';
        echo '<br>';
        echo '<br><a class="rouge" href="formulaire.php">Retour au formulaire</p>';
        echo '</div>';
      }
      else {
        $_SESSION['excursions'] = $_POST['excursions'];

        switch ($_SESSION['excursions']) {
          case 'Angleterre':
            $_SESSION['prix'] = 250;
            break;

          case 'Espagne':
            $_SESSION['prix'] = 200;
            break;

          // Ajouter un voyage ici

          default:
            # code...
            break;
        }

        $prixTotal = $_SESSION['prix'] * $_SESSION['nombre'];
        echo '<div class="well bg-panel-heading text-center">';
        echo '<h3>Résumé de votre demande</h3><br>';
        echo 'Bonjour, '.$_SESSION['civilite'].' '.$_SESSION['prenom'].' '.$_SESSION['nom'].'<br>';
        echo 'Vous avez choisie une excursion en <strong>'.$_SESSION['excursions'].'</strong> au prix de <strong> '.$_SESSION['prix'].'€</strong> par personne<br>';
        echo 'Vous nous avez indiqué '.$_SESSION['nombre'].' personnes<br>';
        echo 'Le montant total est de '.$prixTotal.' €';
        echo '<br>';
        echo '<br><a class="rouge" href="formulaire.php">Retour au formulaire</p>';
        echo '</div>';

      }
    ?>
</div>
</div>
</div>   <!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- jquery libs -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<!-- <script src="js/vendor/holder.min.js"></script> -->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
