<?php
  session_start(); // démarrage de la session
  // obligatoire pour récupérer les variables de session stockées
  $_SESSION['civilite'] = $_POST['civilite'];
  $_SESSION['nom'] = $_POST['nom'];
  $_SESSION['prenom'] = $_POST['prenom'];
  $_SESSION['voyage-excursion'] = $_POST['voyage-excursion'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico"> -->

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Modif CSS  -->
    <link href="css/styleperso.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <!-- <link href="" rel="stylesheet"> -->

    <!-- jquery libs -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title>Choisissez votre destination</title>

  </head>
  <body>

    <header class="well bg-opacity col-md-10 col-md-offset-1">
      <h1 class="text-center">Réservation des billets</h1>
    </header>

    <div class="containerpanel panel-default col-md-6 col-md-offset-3">
      <!-- Default panel contents -->
      <div class="panel-heading bg-panel-heading text-center">Choisissez votre destination</div>
      <div class="panel-body">
        <?php
          if ($_SESSION['voyage-excursion'] == "voyage") {
            // <!-- Formulaire de choix de voyage -->
            echo '<form method="post" action="recapitulatif.php">';
            echo '<label for="choix-voyage">Choix voyage</label>';
            echo '<select name="choix-voyage" id="choix_voyage">';
            echo '<option value="Caraibes">Les caraibes - Le pied ! - 4500€ par personnes pour une semaine</option>';
            echo '<option value="Canaries">Les canaries - la main - 3500€ par personnes pour une semaine</option>';
            echo '</select><br>';
            echo 'Nombres de personnes : <input type="number" name="nombre" placeholder="exemple : 3" required="requis" max="100">';
            echo '<br>';
            echo '<center><input type="submit" name="Estimation" value="Estimation"></center>';
            echo '</form>';
          }
          else {
            // <!-- Formulaire excursions -->
            echo '<form method="post" action="recapitulatif.php">';
            echo '<label for="Excursions">Choix d\'excursion :</label>';
            echo '<select name="excursions" id="excursions">';
            echo '<option value="Angleterre">Angleterre - 250€ par personne</option>';
            echo '<option value="Espagne">Espagne - 200€ par personne</option>';
            echo '</select>';
            echo '<br>';
            echo 'Nombre de personnes : <input type="number" name="nombre" placeholder="exemple : 3" required="requis" max="100">';
            echo '<br>';
            echo '<center><input type="submit" name="name" value="Estimation"></center>';
            echo '</form>';
          }
        ?>
      </div>
    </div>

   <!-- Bootstrap core JavaScript ================================================== -->
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
