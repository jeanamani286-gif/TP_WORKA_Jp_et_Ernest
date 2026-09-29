<?php
declare(strict_types=1);

/**
 * public/index.php — point d'entrée unique (front controller).
 * Réfs : ?? https://www.php.net/manual/fr/migration70.new-features.php
 *        array_key_exists https://www.php.net/manual/fr/function.array-key-exists.php
 *        http_response_code https://www.php.net/manual/fr/function.http-response-code.php
 */

// Liste blanche : slug de l'URL => dossier de la vue. Seules ces clés sont acceptées,
// ce qui empêche ?page=../../fichier (path traversal).
$pages = [
    'accueil'                     => 'page',
    'produits'                    => 'page',
    'histoire'                    => 'page',
    'visite-usine'                => 'page',
    'golden-ticket'               => 'page',
    'recrutement'                 => 'page',
    'faq'                         => 'page',
    'contact'                     => 'page',
    'mentions-legales'            => 'page',
    'wonka-bar'                   => 'page',
    'everlasting-gobstopper'      => 'products',
    'fizzy-lifting-drink'         => 'products',
    'golden-egg'                  => 'products',
    'invisible-chocolate'         => 'products',
    'lickable-wallpaper'          => 'products',
    'scrumdiddlyumptious-bar'     => 'products',
    'three-course-dinner-gum'     => 'products',
];

$page = $_GET['page'] ?? 'accueil';
if (!is_string($page) || !array_key_exists($page, $pages)) {
    http_response_code(404);
    exit('Page introuvable');
}

$racine = dirname(__DIR__);   // dossier du projet (parent de public/)

/** Lit un fichier JSON ; renvoie [] s'il n'existe pas. */
function chargerJson(string $chemin): array
{
    if (!is_file($chemin)) {
        return [];
    }
    return json_decode(file_get_contents($chemin), true, 512, JSON_THROW_ON_ERROR);
}

$meta   = chargerJson("$racine/data/meta/$page.json");
$jsonld = chargerJson("$racine/data/jsonld/$page.json");

require "$racine/views/components/header.php";
require "$racine/views/{$pages[$page]}/$page.php";
require "$racine/views/components/footer.php";
