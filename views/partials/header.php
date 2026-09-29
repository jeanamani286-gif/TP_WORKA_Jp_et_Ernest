<header class="site">
  <div class="wrap">
    <p class="logo"><a href="/" aria-label="<?= $view->e($site['name']) ?> - Accueil"><img src="<?= $view->e($site['logo']) ?>" alt="<?= $view->e($site['name']) ?>" width="2000" height="1125"></a></p>
    <input type="checkbox" id="menu-toggle" class="menu-toggle">
    <label for="menu-toggle" class="burger" aria-label="Ouvrir le menu"><?= $view->icon('menu-2') ?></label>
    <?= $view->partial('nav', array('current' => isset($current) ? $current : null)) ?>
  </div>
</header>