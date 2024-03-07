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
        var_dump($_FILES);
    }

      ?>


    </div>
</body>
</html>