<?php
/** @var \Wonka\Core\View $view */
$page = isset($page) ? $page : array();
$site = isset($site) ? $site : array();
$title = isset($page['title']) ? $page['title'] : $site['name'];
$description = isset($page['description']) ? $page['description'] : '';
$path = isset($page['path']) ? $page['path'] : (isset($currentPath) ? $currentPath : '/');
$canonical = rtrim($site['domain'], '/') . $path;
$globalStyles = isset($assets['styles']) ? $assets['styles'] : array();
$globalScripts = isset($assets['scripts']) ? $assets['scripts'] : array();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $view->e($title) ?></title>
<meta name="description" content="<?= $view->e($description) ?>">
<?php if (!empty($page['author'])): ?>
<meta name="author" content="<?= $view->e($page['author']) ?>">
<?php endif; ?>
<link rel="canonical" href="<?= $view->e($canonical) ?>">
<meta property="og:type" content="<?= $view->e(isset($page['og_type']) ? $page['og_type'] : 'website') ?>">
<meta property="og:title" content="<?= $view->e(isset($page['og_title']) ? $page['og_title'] : $title) ?>">
<meta property="og:description" content="<?= $view->e(isset($page['og_description']) ? $page['og_description'] : $description) ?>">
<meta property="og:url" content="<?= $view->e($canonical) ?>">
<meta property="og:site_name" content="<?= $view->e($site['name']) ?>">
<meta property="og:locale" content="<?= $view->e($site['locale']) ?>">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
<?php foreach (array_merge($globalStyles, isset($page['styles']) ? (array) $page['styles'] : array()) as $href): ?>
<link rel="stylesheet" href="<?= $view->e($href) ?>">
<?php endforeach; ?>
<?= $view->partial('jsonld', array('page' => $page, 'jsonld' => isset($jsonld) ? $jsonld : array())) ?>
</head>
<body>

<?= $view->partial('topbar', array('text' => isset($page['topbar']) ? $page['topbar'] : null)) ?>
<?= $view->partial('header', array('current' => isset($page['nav']) ? $page['nav'] : null)) ?>

<?= $content ?>

<?= $view->partial('footer') ?>

<?php foreach (array_merge($globalScripts, isset($page['scripts']) ? (array) $page['scripts'] : array()) as $src): ?>
<script src="<?= $view->e($src) ?>" defer></script>
<?php endforeach; ?>
</body>
</html>