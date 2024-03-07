<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil des Célébrités</title>
    <link rel="stylesheet" href="css/style-accueil.css">
</head>
<body>
    <h1>Je choisis mes Célébrités !!!</h1>
    <form action="index.html" method="post" enctype="multipart/form-data" >
    <input type="hidden" name="MAX_FILE_SIZE" value="2097152" >
    <input type="file" name="image" >
    <input type="submit" name="Ajouter" >
    </form>
    <div class="btn-affiche" >
        <a href="lib/celebrity.php">Afficher les Célébrités !</a>
    </div>
    
</body>
</html>