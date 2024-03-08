
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celebrity</title>
    <link rel="stylesheet" href="../css/style-celebrity.css">
</head>
<body>
    <div class="celebrity" >
        <h1>Les Célébrités !</h1>
        <div class="btn-ajout" >
            <a href="../">Ajouter une célébrité</a>
        </div>
      <?php
      //var_dump($_FILES);

      if (isset($_FILES["image"]["name"]) && ($_FILES["image"]["error"] ==0)) {
        //stockage de l'image
        if(!isset($_SESSION["adresse"])){
          $nom_dossier_visiteur = time();
          mkdir("../images/".$nom_dossier_visiteur);
          $_SESSION["chemin"] = "../images/".$nom_dossier_visiteur;
        }

        $dossier_destination_fichier = $_SESSION["chemin"]."/".$_FILES["image"]["name"];

        move_uploaded_file($_FILES["image"]["tmp_name"], $dossier_destination_fichier);
        $_SESSION["adresse"][$_FILES["image"]["name"]] = $dossier_destination_fichier;

      }

      //Affichage de l'image
      if (isset($_SESSION["adresse"])){
        foreach ($_SESSION["adresse"] as $key => $value) {
          echo "<img src=\"$value\" alt=\"$key\" />";
        }
      }
      ?>

        <div class="btn-ajout" >
          <?php
          if (isset($_SESSION["adresse"])){
            echo '<a href="../">Ajouter une célébrité</a>';
          }
          ?>
            
        </div>
        <div class="btn-ajout" >
        <?php
          if (isset($_SESSION["adresse"])){
            echo '<a href="logout.php">Réinitialiser</a>';
          }
          ?>
        </div>


    </div>
</body>
</html>