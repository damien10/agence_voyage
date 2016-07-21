<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Agence de voyage</title>
  </head>
    <body>
    <!-- Formulaire de choix de voyage -->
      <form method="post" action="recapitulatif.php">
        <p>
          <label for="choix_voyage">Choix du voyage</label>
          <select name="choix_voyage" id="choix_voyage">
            <option value="caraibes">Les caraibes - le pied - 4500€ par personnes pour une semaine </option>
            <option value="canaries">Les canaries - la main - 3500€ par personnes pour une semaine </option>
          </select>
        </p>
        <p>
          <label for="nbr_personnes">Nombres de personnes</label>
            <select name="nbr_personnes" id="nbr_personnes">
              <option value="1">1 personne </option>
              <option value="2">2 personnes </option>
              <option value="3">3 personnes </option>
              <option value="4">4 personnes </option>
            </select>
        </p>
          <input type="submit" name="Estimation" value="Estimation">
      </form>
<br>
<br>
<br>


      <!-- Formulaire excursions -->
        <?php
          if(isset($_POST['formSubmit']))
          {
          $pays = $_POST['Excursions'];
          $erreur = "";
          if(empty($pays))
          {
          $erreur = "<li>Vous n'avez pas selectionné d'Excursion!</li>";
          }
          if($erreur != "")
          {
          echo("<p>Erreur! (╯°□°）╯︵ ┻━┻ </p>\n");
          echo("<ul>" . $erreur . "</ul>\n");
          }
          else
          {
          switch($pays)
          {
          case "Angleterre": $redir = "Angleterre.html"; break;
          case "Allemagne": $redir = "Allemagne.html"; break;
          case "Espagne": $redir = "Espagne.html"; break;
          case "Italie": $redir = "Italie.html"; break;
          case "Portugal": $redir = "Portugal.html"; break;
          default: echo("Erreur!"); exit(); break;
          }
          echo " redirecting to: $redir ";
          exit();
          }
          }
        ?>

      <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
          <label for='Excursions'>Choix d'excursion :</label>
            <select name="Excursions">
              <option value="">Selectionnez un pays...</option>
              <option value="Angleterre">Angleterre</option>
              <option value="Allemagne">Allemagne</option>
              <option value="Espagne">Espagne</option>
              <option value="Italie">Italie</option>
              <option value="Portugal">Portugal</option>
            </select>
          <br>
            Nombre de personnes : <input type="text" name="nombre">
          <br>
        <input type="submit" name="name" value="Estimation">
      </form>
    </body>
</html>
