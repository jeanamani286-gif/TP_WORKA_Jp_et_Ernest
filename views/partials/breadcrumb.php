<?php
/** Fil d'Ariane : `$items` = liste de {label, url?} ; le dernier élément n'est pas un lien. */
$items = isset($items) ? $items : (isset($page['breadcrumb']) ? $page['breadcrumb'] : array());
if (count($items) > 1): ?>
  <p class="fil"><?php foreach ($items as $i => $item): ?><?= $i > 0 ? ' › ' : '' ?><?php if (!empty($item['url'])): ?><a href="<?= $view->e($item['url']) ?>"><?= $view->e($item['label']) ?></a><?php else: ?><?= $view->e($item['label']) ?><?php endif; ?><?php endforeach; ?></p>
<?php endif; ?>