<?php
/**
 * views/components/header.php — <head> commun à toutes les pages.
 *
 * Variables fournies par public/index.php :
 *   $page   (string) slug de la page courante, ex. "faq"
 *   $meta   (array)  contenu de data/meta/<page>.json
 *   $jsonld (array)  contenu de data/jsonld/<page>.json (liste de blocs schema.org)
 *
 * Réfs :
 *   htmlspecialchars  https://www.php.net/manual/fr/function.htmlspecialchars.php
 *   syntaxe alternative (if/foreach ... endif/endforeach)  https://www.php.net/manual/fr/control-structures.alternative-syntax.php
 *   <script type="application/ld+json">  https://developer.mozilla.org/fr/docs/Web/HTML/Element/script#embedding_data
 */

// Fonction anonyme d'échappement : évite de répéter htmlspecialchars(...) partout.
$e = static fn(string $s): string => htmlspecialchars($s, ENT_QUOTES, 'UTF-8');

// Dossier des CSS côté disque (dirname(__DIR__, 2) = racine du projet).
$cssDisque = dirname(__DIR__, 2) . '/public/assets/css/';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $e($meta['title'] ?? 'Wonka Chocolate Factory') ?></title>
<?php if (!empty($meta['description'])): ?>
<meta name="description" content="<?= $e($meta['description']) ?>">
<?php endif; ?>
<?php if (!empty($meta['author'])): ?>
<meta name="author" content="<?= $e($meta['author']) ?>">
<?php endif; ?>
<?php if (!empty($meta['canonical'])): ?>
<link rel="canonical" href="<?= $e($meta['canonical']) ?>">
<?php endif; ?>
<?php foreach (($meta['og'] ?? []) as $propriete => $contenu): ?>
<meta property="<?= $e($propriete) ?>" content="<?= $e($contenu) ?>">
<?php endforeach; ?>
<link rel="stylesheet" href="assets/css/bases.css">
<?php if (is_file($cssDisque . $page . '.css')): ?>
<link rel="stylesheet" href="assets/css/<?= $e($page) ?>.css">
<?php endif; ?>
<?php foreach ($jsonld as $bloc): ?>
<script type="application/ld+json">
<?= json_encode($bloc, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG) ?>

</script>
<?php endforeach; ?>
</head>
<body>
