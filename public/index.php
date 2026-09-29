<?php

 
 $valeur = $_GET['page'];

if(!(file_exists("../views/page/$valeur.php"))){
    echo("Erreur fichier non trouvé");
    exit;
}
include "../views/components/header.php";

require "../views/page/$valeur.php";

include "../views/components/footer.php";