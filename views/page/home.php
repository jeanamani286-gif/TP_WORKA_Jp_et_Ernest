<?php
/** Accueil : `$products` = produits mis en avant (config/pages/home.yaml → featured). */
$products = isset($products) ? $products : array();
$tapis = array('candy', 'lollipop', 'lollipop', 'cake', 'cookie', 'ice-cream', 'candy', 'lollipop', 'lollipop', 'cake', 'cookie', 'ice-cream');
$chiffres = array(
    array('icon' => 'users', 'background' => '#ddf3fd', 'cible' => 5, 'label' => 'visiteurs par an'),
    array('icon' => 'users-group', 'background' => '#ffe1ee', 'cible' => 167, 'label' => 'Oompa Loompas'),
    array('icon' => 'paw', 'background' => '#fff3c9', 'cible' => 40, 'label' => 'écureuils dressés'),
    array('icon' => 'category-2', 'background' => '#defaf0', 'cible' => 12, 'label' => 'catégories de produits'),
);
?>
<div class="wrap">
  <?= $view->partial('breadcrumb') ?>

  <div class="accroche">
    <div>
      <span class="sur-titre">Usine ouverte depuis 1971</span>
      <h1>La chocolaterie<br>la plus <em>étrange</em><br>du monde.</h1>
      <p class="lead">Du chocolat qui fond dans le bon sens, des bonbons qui ne fondent jamais, des boissons qui vous font toucher le plafond. Tout est fabriqué à la main par des personnes très petites et très motivées.</p>
      <p>
        <a href="/produits" class="btn btn-vert">Voir les chocolats</a>
      </p>
    </div>
    <div>
      <div class="usine-visuels">
        <img class="usine-fond" src="/assets/images/interieur-usine.jpg" alt="Intérieur de la chocolaterie Wonka" width="3000" height="2000">
        <figure class="usine-photo">
          <img src="/assets/images/exterieur-usine.png" alt="Façade extérieure de la Wonka Chocolate Factory" width="565" height="353">
          <figcaption>La façade officielle</figcaption>
        </figure>
      </div>
    </div>
  </div>

  <div class="tapis" aria-hidden="true"><div class="bande-c" id="tapis"><?php foreach ($tapis as $icone): ?><?= $view->icon($icone) ?> <?php endforeach; ?></div></div>
</div>

<section>
  <div class="wrap">
    <div class="panel violet reveal">
      <div class="chiffres-entete">
        <div>
          <h2 class="titre" style="margin-bottom:2px">L'usine en quelques chiffres</h2>
          <p class="sous-titre" style="margin:0">Chiffres vérifiés une fois, en 1974. Recomptage 2026 en cours.</p>
        </div>
        <?= $view->component('badge', array('label' => 'Rapport annuel', 'variant' => 'vert')) ?>
      </div>
      <div class="chiffres">
<?php foreach ($chiffres as $chiffre): ?>
        <div class="chiffre">
          <span class="pastille" style="background:<?= $view->e($chiffre['background']) ?>"><?= $view->icon($chiffre['icon'], 'aria-hidden="true"') ?></span>
          <span class="nb" data-cible="<?= (int) $chiffre['cible'] ?>">0</span>
          <small><?= $view->e($chiffre['label']) ?></small>
        </div>
<?php endforeach; ?>
      </div>
      <p class="note-chiffres"><?= $view->icon('check', 'aria-hidden="true"') ?>Données auditées par un comité indépendant d'Oompa Loompas — méthodologie non communiquée.</p>
    </div>
  </div>
</section>

<section style="padding:0 0 44px">
  <div class="wrap">
    <div class="hero-riviere reveal">
      <h2>La rivière de chocolat vous attend</h2>
      <p>Un fleuve entièrement comestible, mélangé à la cascade, que vous aurez l'interdiction formelle de goûter. C'est tout l'intérêt de venir le voir en vrai.</p>
      <a href="/visite-usine" class="btn btn-ticket">Réserver ma visite</a>
    </div>
  </div>
</section>

<section style="padding-top:0">
  <div class="wrap">
    <h2 class="titre">Nos best-sellers</h2>
    <p class="sous-titre">Les quatre produits que l'on nous réclame le plus (et que l'on refuse parfois de vendre).</p>
    <div class="grille">
<?php foreach ($products as $product):
    $badge = (string) $product->get('card_badge', '');
    $badgeVariant = trim(preg_replace('/\bbadge\b/', '', (string) $product->get('card_badge_class', '')));
    $cardText = (string) $product->get('card_text', '');
?>
      <div class="carte reveal">
        <div class="visuel" style="background:<?= $view->e($product->get('visual_background', '#fff6e5')) ?>"><?php if ($badge !== ''): ?><?= $view->component('badge', array('label' => $badge, 'variant' => $badgeVariant)) ?><?php endif; ?><?= $view->icon($product->get('icon', 'candy')) ?></div>
        <h3><?= $view->e($product->getName()) ?></h3>
<?php if ($cardText !== ''): ?>
        <p style="font-size:13px;margin:0 0 8px"><?= $view->e($cardText) ?></p>
<?php endif; ?>
        <p class="prix"><?= $view->e($product->getPrice()) ?></p>
        <a class="btn btn-petit" href="<?= $view->e($product->getUrl()) ?>">Voir la fiche</a>
      </div>
<?php endforeach; ?>
    </div>
    <p style="text-align:center;margin-top:26px"><a href="/produits" class="btn btn-rose">Voir les 8 produits du catalogue</a></p>
    <hr class="bonbon" style="margin-top:64px">
  </div>
</section>

<section style="padding:0 0 80px">
  <div class="wrap">
    <h2 class="titre reveal">Visiter l'usine en 4 étapes</h2>
    <p class="sous-titre reveal">Détail complet sur la page <a href="/visite-usine">Visiter l'usine</a>.</p>
    <div class="visite-bloc reveal">
      <div class="etapes">
        <div class="etape">
          <div class="etape-entete"><span class="n">1</span><span class="ico"><?= $view->icon('ticket', 'aria-hidden="true"') ?></span></div>
          <h3 style="margin:0 0 6px;font-size:19px">Trouver un ticket</h3>
          <p style="font-size:13px;margin:0">Dans une <a href="/produits/wonka-bar">Wonka Bar</a> ou dans un <a href="/produits/golden-egg">Golden Egg</a>. Jamais ailleurs, et surtout pas sur internet.</p>
        </div>
        <div class="etape">
          <div class="etape-entete"><span class="n">2</span><span class="ico"><?= $view->icon('writing', 'aria-hidden="true"') ?></span></div>
          <h3 style="margin:0 0 6px;font-size:19px">Signer le contrat</h3>
          <p style="font-size:13px;margin:0">47 pages. La page 12 contient une clause sur les plafonds.</p>
        </div>
        <div class="etape">
          <div class="etape-entete"><span class="n">3</span><span class="ico"><?= $view->icon('hand-stop', 'aria-hidden="true"') ?></span></div>
          <h3 style="margin:0 0 6px;font-size:19px">Ne rien toucher</h3>
          <p style="font-size:13px;margin:0">Surtout dans la salle des confiseries expérimentales.</p>
        </div>
        <div class="etape">
          <div class="etape-entete"><span class="n">4</span><span class="ico"><?= $view->icon('elevator', 'aria-hidden="true"') ?></span></div>
          <h3 style="margin:0 0 6px;font-size:19px">Sortir par l'ascenseur</h3>
          <p style="font-size:13px;margin:0">Direction : partout. Le retour n'est pas garanti du premier coup.</p>
        </div>
      </div>
      <figure class="visite-photo">
        <img src="/assets/images/labo-chocolat.png" alt="Le laboratoire de chocolat de l'usine Wonka" width="1122" height="1402">
        <figcaption>Le laboratoire chocolat</figcaption>
      </figure>
    </div>

    <div class="panel vert reveal faq">
      <h2 class="titre">Questions fréquentes</h2>
      <p class="sous-titre">Extrait. La liste complète (10 questions) est sur la page <a href="/faq">FAQ</a>.</p>
<?= $view->component('faq', array('items' => array(
    array('question' => "Peut-on visiter l'usine sans Golden Ticket ?", 'answer' => 'Non. Absolument non. L\'usine est verrouillée, et le gardien est très poli mais très ferme. Voir la page <a href="/visite-usine">Visiter l\'usine</a> pour les rares exceptions.'),
    array('question' => 'Les produits contiennent-ils des noix ?', 'answer' => 'Certains oui. La <a href="/produits/scrumdiddlyumptious-bar">Scrumdiddlyumptious Bar</a> contient des noix de pécan caramélisées. En cas de doute, ne goûtez pas les murs.'),
    array('question' => "Peut-on commander depuis l'étranger ?", 'answer' => 'Oui, sauf pour la <a href="/produits/fizzy-lifting-drink">Fizzy Lifting Drink</a> : les boissons gazeuses qui font flotter sont interdites dans les avions, les trains et la plupart des immeubles.'),
))) ?>
    </div>
  </div>
</section>