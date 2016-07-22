<?php
  session_start(); // démarrage de la session
  // obligatoire pour récupérer les variables de session stockées
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
    <![endif]-->    <!-- Custom styles for this template -->
    <!-- <link href="" rel="stylesheet"> -->    <!-- jquery libs -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title>Formulaire</title>
  </head>
  <body>
    <header class="well bg-opacity col-md-10 col-md-offset-1">
      <h1 class="text-center">Bienvenue dans l'agence de voyage du cargo qui fuit</h1>
    </header>
    <div class="containerpanel panel-default col-md-6 col-md-offset-3">
      <!-- Default panel contents -->
      <div class="panel-heading bg-panel-heading text-center">Commandez vos billets</div>
      <div class="panel-body">
        <div class="col-sm-6 col-sm-offset-3">
          <form class="form-group" method="post" action="agence.php">
            <label for="civilite">Civilité</label>
            <select name="civilite" id="civilite">
              <option value="Mr">Mr</option>
              <option value="Mme">Mme</option>
            </select><br>
            Nom : <input type="text" name="nom" id="nom" placeholder="nom" required="requis" /><br>
            Prénom : <input type="text" name="prenom" id="prenom" placeholder="prénom" required="requis"/><br>
            Voyage <input type="radio" name="voyage-excursion" id="voyage-excursion" value="voyage" required="bouh"/><br>
            Excursion <input type="radio" name="voyage-excursion" id="voyage-excursion" value="excursion" /><br>
            <input type="submit" value="Suite" id="submit-button" />
          </form>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript
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
