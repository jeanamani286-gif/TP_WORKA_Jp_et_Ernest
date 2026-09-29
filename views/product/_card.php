<?php
/**
 * Carte produit : `$product` (Wonka\Models\Product), `$variant` = catalogue (défaut) | related | featured.
 * - catalogue : carte de produits.html (data-cat pour le filtre, badge sur le visuel, texte long)
 * - related   : suggestions des fiches (texte court, prix réduit, sans badge)
 * - featured  : best-sellers de l'accueil (classe reveal, badge, texte court)
 */
$variant = isset($variant) ? $variant : 'catalogue';
$isRelated = $variant === 'related';
$text = $variant === 'catalogue' ? $product->get('catalog_text', $product->get('card_text')) : $product->get('card_text');
$badge = !$isRelated ? $product->get('card_badge') : null;
$category = $variant === 'catalogue' ? $product->get('card_category') : null;
?>
      <div class="carte<?= $variant === 'featured' ? ' reveal' : '' ?>"<?= $category ? ' data-cat="' . $view->e($category) . '"' : '' ?>>
        <div class="visuel" style="background:<?= $view->e($product->get('visual_background', '#fff')) ?>"><?= $badge ? $view->component('badge', array('label' => $badge, 'variant' => $product->get('card_badge_class'))) : '' ?><?= $view->icon($product->get('card_icon', $product->get('icon'))) ?></div>
        <h3><?= $view->e($product->getName()) ?></h3>
        <p style="font-size:13px;margin:0 0 <?= $isRelated ? '6' : '8' ?>px"><?= $view->e($text) ?></p>
        <p class="prix"<?= $isRelated ? ' style="font-size:22px"' : '' ?>><?= $view->e($product->getPrice()) ?></p>
        <a class="btn btn-petit" href="<?= $view->e($product->getUrl()) ?>">Voir la fiche</a>
      </div>