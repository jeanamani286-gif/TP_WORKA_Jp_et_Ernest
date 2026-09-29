<footer class="site">
  <div class="colonnes">
    <div>
      <h4>L'usine</h4>
      <p><?= $view->e($site['name']) ?><br><?= $view->e($site['address']['street']) ?><br><?= $view->e($site['address']['postal_code']) ?> <?= $view->e($site['address']['city']) ?></p>
    </div>
    <div>
      <h4>Horaires</h4>
      <p><?= implode('<br>', array_map(array($view, 'e'), $site['hours'])) ?></p>
    </div>
    <div>
      <h4><?= $view->e($footer['help_title']) ?></h4>
      <p><?php foreach ($footer['links'] as $i => $link): ?><?= $i > 0 ? '<br>' : '' ?><a href="<?= $view->e($link['url']) ?>"><?= $view->icon('chevron-right') ?> <?= $view->e($link['label']) ?></a><?php endforeach; ?></p>
    </div>
  </div>
  <p class="absurde"><?= $view->e($footer['legal']) ?></p>
</footer>