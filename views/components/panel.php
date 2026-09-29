<?php
/** Panneau : `$title`, `$body` (HTML), `$variant` (vert|jaune|bleu|violet|null), `$class` supplémentaire. */
$classes = trim('panel ' . (isset($variant) && $variant ? $variant : '') . ' ' . (isset($class) ? $class : ''));
?>
<div class="<?= $view->e($classes) ?>">
<?php if (!empty($title)): ?>
  <h2 class="titre"><?= $view->e($title) ?></h2>
<?php endif; ?>
<?= isset($body) ? $body : '' ?>
</div>