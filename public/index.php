<?php

 
 $valeur = $_GET['page'];

if(!(file_exists("../views/page/$valeur.php"))){
    echo("Erreur fichier non trouvé");
    exit;
}
include "../views/components/header.php";

echo '<link rel="stylesheet" href="assets/css/bases.css">';

echo "<link rel='stylesheet' href='assets/css/$valeur.css'>";

require "../views/page/$valeur.php";

include "../views/components/footer.php";

?>