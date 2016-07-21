<?php
session_start();
$_SESSION['voyage-excursion'] = $_POST['voyage-excursion'];
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Agence de voyage</title>
  </head>
    <body>
    <!-- Formulaire de choix de voyage -->
    <?php
      if ($_SESSION['voyage-excursion'] == "voyage") {
        echo '<form method="post" action="recapitulatif.php">';
            echo '<label for="choix_voyage">Choix du voyage</label>';
            echo '<select name="choix_voyage" id="choix_voyage">';
              echo '<option value="caraibes">Les caraibes - le pied - 4500€ par personnes pour une semaine </option>';
            echo '  <option value="canaries">Les canaries - la main - 3500€ par personnes pour une semaine </option>';
            echo '</select><br>';
            echo '<label for="nbr_personnes">Nombres de personnes</label>';
            echo '  <select name="nbr_personnes" id="nbr_personnes">';
              echo '  <option value="1">1 personne </option>';
                echo '<option value="2">2 personnes </option>';
                echo '<option value="3">3 personnes </option>';
                echo '<option value="4">4 personnes </option>';
              echo '</select><br>';
            echo '<input type="submit" name="Estimation" value="Estimation">';
        echo '</form>';
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
