<?php
session_start();
$_SESSION['civilite'] = $_POST['civilite'];
$_SESSION['nom'] = $_POST['nom'];
$_SESSION['prenom'] = $_POST['prenom'];
$_SESSION['voyage-excursion'] = $_POST['voyage-excursion'];
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
      // <!-- Formulaire de choix de voyage -->
      echo '<form method="post" action="recapitulatif.php">';
          echo '<label for="choix_voyage">Choix du voyage</label>';
          echo '<select name="choix_voyage" id="choix_voyage">';
          echo '<option value="caraibes">Les caraibes - le pied - 4500€ par personnes pour une semaine </option>';
          echo '<option value="canaries">Les canaries - la main - 3500€ par personnes pour une semaine </option>';
          echo '</select><br>';
          echo 'Nombre de personnes : <input type="text" name="nombre">';
          echo '<br>';
          echo '<input type="submit" name="Estimation" value="Estimation">';
      echo '</form>';

      $tableau = array(
        "caraibes" => 4500,
        "canaries" => 3500
      );

      foreach ($tableau as $pays => $prix) {

      }
    }
    else {
      // <!-- Formulaire excursions -->
        echo '<form action="<?php echo htmlentities($_SERVER[\'PHP_SELF\']); ?>" method="post">';
          echo '<label for="Excursions">Choix d\'excursion :</label>';
            echo '<select name="excursions" id="excursions">';
              echo '<option value="Angleterre">Angleterre - 250€ par personne</option>';
              echo '<option value="Mr">Espagne - 200€ par personne</option>';
            echo '</select>';
              echo '<br>';
              echo 'Nombre de personnes : <input type="text" name="nombre">';
              echo '<br>';
            echo '<input type="submit" name="name" value="Estimation">';
        echo '</form>';
    }






       ?>
    </body>
</html>
