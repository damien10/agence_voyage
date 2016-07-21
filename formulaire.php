<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>formulaire</title>

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
<h1>Bienvenue dans l'agence de voyage</h1>
<?php
// Messages d'erreur
$nomErr = $prenomErr = "";
$nom = $prenom = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $valid = true;
  if (empty($_POST["nom"])) {
    $nomErr = "Veuillez entrer votre nom";
  }
  else {
    $nom = $_POST["nom"];
    header('Location: agence.php');
    exit();
  }

  if (empty($_POST["prenom"])) {
    $prenomErr = "Veuillez entrer votre prénom";
  }
  else {
    $prenom = $_POST["prenom"];
    header('Location: agence.php');
    exit();
  }
}
?>
<form method="post" action="<?PHP echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
  <label for="civilite">Civilité</label>
  <select name="civilite" id="civilite">
    <option value="Mr">Mr</option>
    <option value="Mme">Mme</option>
  </select><br>
  Nom : <input type="text" name="nom" id="nom" value="<?PHP if(isset($_POST['nom'])) echo htmlspecialchars($_POST['nom']); ?>"><span class="erreur">
    <?php echo $nomErr;?>
  </span><br>
  Prénom : <input type="text" name="prenom" id="prenom" value="<?php echo htmlspecialchars($prenom);?>"><span class="erreur">
    <?php echo $prenomErr;?>
  </span><br>
  Voyage <input type="radio" name="voyage-excursion" id="voyage-excursion" value="voyage" /><br>
  Excursion <input type="radio" name="voyage-excursion" id="voyage-excursion" value="excursion" /><br>
  <input type="submit" value="Suite" />
</form>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
