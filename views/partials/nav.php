<nav class="main">
<?php foreach ($menu as $item): ?>
  <a href="<?= $view->e($item['url']) ?>"<?= isset($current) && $current === $item['url'] ? ' aria-current="page"' : '' ?>><?= $view->e($item['label']) ?></a>
<?php endforeach; ?>
</nav>