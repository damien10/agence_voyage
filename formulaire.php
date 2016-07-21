<!DOCTYPE html>
<<<<<<< HEAD
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>forumlaire</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- <div class="#"> pour faire le background page entiere responsive -->


    </div>
    <h1>Bienvenu dans l'agence de voyage</h1>
    <form method="post" action="agence.php">
          <label for="civilite">Civilité</label>
          <select name="civilite" id="civilite">
              <option value="Mr">Mr</option>
              <option value="Mme">Mme</option>
          </select><br>
          Nom : <input type="text" name="nom" id="nom" /><br>
          Prénom : <input type="text" name="prenom" id="prenom" /><br>
          Voyage <input type="radio" name="voyage-excursion" id="voyage-excursion" value="voyage" /><br>
          Excursion <input type="radio" name="voyage-excursion" id="voyage-excursion" value="excursion" /><br>
          <input type="submit" value="Suite" />
    </form>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
=======
<html>
 <head>
   <meta charset="utf-8">
   <title>Agence de voyage</title>
 </head>
 <body>
   <form method="post" action="agence.php">
      <label for="civilite">Civilité</label>
      <select name="civilite" id="civilite">
          <option value="Mr">Mr</option>
          <option value="Mme">Mme</option>
      </select><br>
      Nom : <input type="text" name="nom" id="nom" /><br>
      Prénom : <input type="text" name="prenom" id="prenom" /><br>
      Voyage <input type="radio" name="voyage-excursion" id="voyage-excursion" value="voyage" /><br>
      Excursion <input type="radio" name="voyage-excursion" id="voyage-excursion" value="excursion" /><br>
      <input type="submit" value="Suite" />
   </form>
 </body>
>>>>>>> d3909f66db81c9a795da0f8bdb3a0803a179f4a0
</html>
