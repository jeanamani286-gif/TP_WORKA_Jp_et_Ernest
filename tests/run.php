<?php
/**
 * Tests du framework : `php tests/run.php`
 * Vérifie chaque route (200), les redirections des anciennes URL (301),
 * les URL inconnues (404), les méthodes refusées (405) et le cache HTTP (304).
 */

use Wonka\Core\Autoloader;
use Wonka\Core\Config;
use Wonka\Core\Request;
use Wonka\Repository\ProductRepository;

$root = dirname(__DIR__);
require $root . '/src/core/Autoloader.php';
Autoloader::register($root);

$failures = 0;
$checks = 0;
function check($label, $ok, $detail = '')
{
    global $failures, $checks;
    $checks++;
    if (!$ok) {
        $failures++;
    }
    echo ($ok ? '  OK   ' : '  FAIL ') . $label . ($ok || $detail === '' ? '' : ' — ' . $detail) . "\n";
}

$kernel = new Kernel($root);
$config = $kernel->getConfig();
$get = function ($path, array $headers = array()) use ($kernel) {
    return $kernel->handle(new Request('GET', $path, $headers));
};

echo "Pages\n";
$pages = array('/', '/produits', '/histoire', '/faq', '/contact', '/visite-usine', '/golden-ticket', '/recrutement', '/mentions-legales');
foreach ($pages as $path) {
    $response = $get($path);
    check("GET $path → 200", $response->getStatus() === 200, 'reçu ' . $response->getStatus());
    check("GET $path contient le header et le footer", strpos($response->getBody(), '<header class="site">') !== false && strpos($response->getBody(), '<footer class="site">') !== false);
    check("GET $path ne contient plus de lien *.html", !preg_match('/href="[^"]*\.html"/', $response->getBody()));
}

echo "Produits\n";
$repository = new ProductRepository($root . '/data/products');
$products = $repository->findAll();
check('8 fiches produit chargées depuis data/products', count($products) === 8, 'reçu ' . count($products));
$expectedOrder = array('wonka-bar', 'everlasting-gobstopper', 'fizzy-lifting-drink', 'three-course-dinner-gum', 'lickable-wallpaper', 'golden-egg', 'scrumdiddlyumptious-bar', 'invisible-chocolate');
$actualOrder = array_map(function ($p) { return $p->getSlug(); }, $products);
check('Ordre du catalogue identique à produits.html', $actualOrder === $expectedOrder, implode(', ', $actualOrder));
foreach ($products as $product) {
    $response = $get($product->getUrl());
    check('GET ' . $product->getUrl() . ' → 200 et affiche « ' . $product->getName() . ' »', $response->getStatus() === 200 && strpos($response->getBody(), $product->getName()) !== false, 'reçu ' . $response->getStatus());
}
$index = $get('/produits');
foreach ($products as $product) {
    check('Le catalogue liste ' . $product->getName(), strpos($index->getBody(), 'href="' . $product->getUrl() . '"') !== false);
}

echo "Cache HTTP\n";
$first = $get('/produits/wonka-bar');
$etag = $first->getHeader('ETag');
check('La fiche renvoie un ETag et un Cache-Control', is_string($etag) && $etag !== '' && $first->getHeader('Cache-Control') !== null);
$cached = $get('/produits/wonka-bar', array('If-None-Match' => $etag));
check('If-None-Match identique → 304 sans corps', $cached->getStatus() === 304 && $cached->getBody() === '', 'reçu ' . $cached->getStatus());

echo "Redirections 301\n";
foreach ($config->redirects() as $from => $to) {
    $response = $get($from);
    check("GET $from → 301 $to", $response->getStatus() === 301 && $response->getHeader('Location') === $to, 'reçu ' . $response->getStatus() . ' ' . $response->getHeader('Location'));
}

echo "Erreurs\n";
foreach (array('/page-inconnue', '/produits/inconnu', '/produits/wonka-bar/extra', '/pages/home') as $path) {
    $response = $get($path);
    check("GET $path → 404", $response->getStatus() === 404, 'reçu ' . $response->getStatus());
}
$notFound = $get('/page-inconnue');
check('La page 404 utilise le layout du site', strpos($notFound->getBody(), '<header class="site">') !== false);
$method = $kernel->handle(new Request('POST', '/produits/wonka-bar'));
check('POST /produits/wonka-bar → 405 avec Allow', $method->getStatus() === 405 && $method->getHeader('Allow') === 'GET, HEAD', 'reçu ' . $method->getStatus());
$post = $kernel->handle(new Request('POST', '/contact', array(), array('nom' => 'Charlie', 'email' => 'charlie@example.org', 'message' => 'Bonjour')));
check('POST /contact valide → 200', $post->getStatus() === 200, 'reçu ' . $post->getStatus());
$invalid = $kernel->handle(new Request('POST', '/contact', array(), array('nom' => '', 'email' => 'pas-un-email', 'message' => '')));
check('POST /contact invalide → 422', $invalid->getStatus() === 422, 'reçu ' . $invalid->getStatus());

echo "\n$checks vérifications, $failures échec(s).\n";
exit($failures === 0 ? 0 : 1);