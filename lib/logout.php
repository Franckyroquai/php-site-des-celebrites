<?php
session_start();
session_destroy();
//rmdir("adresse_dossier");
//$_SESSION["chemin"]
include("function.php");
suprime_dossier_visiteur($_SESSION["chemin"]);
unset($_SESSION);
header("Location: ../") ;

?>