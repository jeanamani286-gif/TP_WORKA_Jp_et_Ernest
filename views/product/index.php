<?php
/** Catalogue (/produits) : `$products` = les 8 fiches, déjà triées par `position`. */
$faqItems = array(
    array(
        'question' => 'Les produits contiennent-ils des noix ?',
        'answer' => 'Certains oui. La <a href="/produits/scrumdiddlyumptious-bar">Scrumdiddlyumptious Bar</a> contient des noix de pécan caramélisées. En cas de doute, ne goûtez pas les murs.',
    ),
    array(
        'question' => 'Peut-on commander depuis l\'étranger ?',
        'answer' => 'Oui, sauf pour la <a href="/produits/fizzy-lifting-drink">Fizzy Lifting Drink</a> : les boissons gazeuses qui font flotter sont interdites dans les avions, les trains et la plupart des immeubles.',
    ),
    array(
        'question' => 'Que faire si un bonbon change de couleur ?',
        'answer' => 'Rien de grave. L\'<a href="/produits/everlasting-gobstopper">Everlasting Gobstopper</a> change de couleur chaque jour de la semaine, c\'est sa fonction. Posez-le et attendez le lendemain.',
    ),
    array(
        'question' => 'Les produits expérimentaux sont-ils garantis ?',
        'answer' => 'Non. Ils sont observés, documentés, parfois chantés, mais jamais garantis. Si vous devenez violet, le service après-vente vous proposera un jus de citron et une visite guidée. Voir les <a href="/produits">Confiseries expérimentales</a>.',
    ),
);
$steps = array(
    array('icon' => 'shopping-cart', 'title' => 'Passez commande', 'text' => 'Avec le bouton « Acheter » de chaque fiche produit, ou par pigeon voyageur si vous avez un pigeon.'),
    array('icon' => 'gift', 'title' => 'On emballe', 'text' => 'Un Oompa Loompa prépare votre colis en chantant. Le chant est compris dans les frais de port.'),
    array('icon' => 'truck-delivery', 'title' => 'Le camion part', 'text' => 'Départ quotidien de la 3<sup>e</sup> cheminée à 9h pile. Le chocolat voyage au frais, le caramel dehors.'),
    array('icon' => 'home', 'title' => 'Vous goûtez', 'text' => 'Dès la réception. Signez après avoir goûté, c\'est plus poli et ça évite les disputes.'),
);
?>
<div class="wrap">
  <?= $view->partial('breadcrumb', array('items' => isset($page['breadcrumb']) ? $page['breadcrumb'] : array())) ?>

  <div class="bandeau-page">
    <h1>Produits</h1>
    <p>Huit produits. Aucun n'est tout à fait normal. Tous sont délicieux, sauf peut-être le papier peint.</p>
  </div>

  <div class="filtres">
    <button class="btn btn-petit btn-vert" onclick="filtrer('tous')">Tout afficher</button>
    <button class="btn btn-petit" onclick="filtrer('barre')">Barres</button>
    <button class="btn btn-petit btn-rose" onclick="filtrer('experimentale')">Expérimental</button>
    <button class="btn btn-petit btn-bleu" onclick="filtrer('boisson')">Boissons</button>
    <button class="btn btn-petit btn-vert" onclick="filtrer('collection')">Collection</button>
  </div>

  <div class="grille" id="grille">

<?php foreach ($products as $product): ?>
<?= $view->fragment('product/_card', array('product' => $product, 'variant' => 'catalogue')) ?>

<?php endforeach; ?>
  </div>

  <div class="panel jaune" style="text-align:center;margin-top:56px">
    <h2 class="titre">Une référence vous manque ?</h2>
    <p>Écrivez-nous, nous l'inventerons peut-être d'ici jeudi.</p>
    <a href="/contact" class="btn btn-rose">Contacter l'atelier</a>
    <a href="/produits" class="btn btn-bleu">Voir le laboratoire</a>
  </div>

  <div class="avertissement"><?= $view->icon('alert-triangle') ?> Avertissement du laboratoire : certains produits de cette page peuvent modifier la couleur, la taille, la flottabilité ou la visibilité du consommateur. La direction décline toute responsabilité pour les transformations supérieures à 4 heures.</div>

  <hr class="bonbon" style="margin-top:64px">

  <div class="hero-riviere">
    <h2>La rivière de chocolat vous attend</h2>
    <p>Ce que vous voyez ici n'est qu'une photo. En vrai, ça coule, ça sent le caramel et c'est interdit de s'en approcher à moins d'un mètre. La visite vaut le détour.</p>
    <a href="/visite-usine" class="btn btn-ticket">Réserver ma visite</a>
  </div>

  <div class="livraison">
    <h2 class="titre">La livraison en 4 étapes</h2>
    <p class="sous-titre">Les cas particuliers (étranger, plafonds, pigeons) sont traités dans la <a href="/faq">FAQ</a>.</p>
    <div class="livraison-bloc">
      <div class="etapes">
<?php foreach ($steps as $index => $step): ?>
        <div class="etape">
          <div class="etape-entete"><span class="n"><?= $index + 1 ?></span><span class="ico"><?= $view->icon($step['icon'], 'aria-hidden="true"') ?></span></div>
          <h3><?= $step['title'] ?></h3>
          <p><?= $step['text'] ?></p>
        </div>
<?php endforeach; ?>
      </div>
      <div class="livraison-photos">
        <img class="deco-boutique" src="/assets/images/boutique-tablette.jpg" alt="" aria-hidden="true" width="1200" height="900">
        <figure class="livraison-photo">
          <img src="/assets/images/livraison-camion.jpg" alt="Le camion de livraison de la chocolaterie Wonka" width="1200" height="903">
          <figcaption>Le camion de livraison</figcaption>
        </figure>
      </div>
    </div>
  </div>

  <div class="panel vert faq">
    <h2 class="titre">On nous demande souvent…</h2>
    <p class="sous-titre">Extrait de la <a href="/faq">FAQ générale</a>, recopié ici pour votre confort.</p>
<?= $view->component('faq', array('items' => $faqItems)) ?>
  </div>
</div>