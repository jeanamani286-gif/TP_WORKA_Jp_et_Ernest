<?php
/**
 * Fiche produit : `$product` (Wonka\Models\Product) et `$related` (suggestions « Vous aimerez peut-être aussi »).
 * Le balisage est commun aux 8 fiches ; tout le contenu vient de data/products/{slug}.yaml.
 * Sections optionnelles : colors (pastilles), services, flavors, testimonials, visual_caption.
 */
$colors = (array) $product->get('colors', array());
$services = (array) $product->get('services', array());
$flavors = (array) $product->get('flavors', array());
$testimonials = (array) $product->get('testimonials', array());
$faq = (array) $product->get('faq', array());
$characteristicsClass = trim('panel ' . $product->get('characteristics_class', ''));
$compositionClass = trim('panel ' . $product->get('composition_class', 'vert'));
$iconStyle = 'aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em';
?>
<div class="wrap">
  <?= $view->partial('breadcrumb', array('items' => isset($page['breadcrumb']) ? $page['breadcrumb'] : array())) ?>

  <section class="fiche-intro">
    <div class="fiche">
      <div>
        <div class="gros-visuel"><span><?= $view->icon($product->get('icon')) ?></span><?= $product->get('visual_caption') ? '<span class="etiq">' . $view->e($product->get('visual_caption')) . '</span>' : '' ?></div>
        <p style="text-align:center;margin-top:12px"><?= $view->component('badge', array('label' => $product->getStatus(), 'variant' => $product->getStatusClass())) ?></p>
<?php if ($colors): ?>
        <div class="couleurs" style="justify-content:center">
<?php foreach ($colors as $color): ?>
          <span class="pastille" style="background:<?= $view->e($color) ?>"></span>
<?php endforeach; ?>
        </div>
<?php endif; ?>
      </div>
      <div>
<?php if ($product->get('label')): ?>
        <?= $view->component('badge', array('label' => $product->get('label'), 'variant' => $product->get('label_class'))) . "\n" ?>
<?php endif; ?>
        <h1 class="titre" style="margin-top:8px"><?= $view->e($product->getName()) ?></h1>
        <p class="sous-titre" style="font-size:18px;font-style:italic"><?= $view->e($product->get('tagline')) ?></p>
        <p class="prix"><?= $view->e($product->getPrice()) ?></p>
<?php foreach ((array) $product->get('intro', array()) as $paragraph): ?>
        <p><?= $paragraph ?></p>
<?php endforeach; ?>
        <p>
          <button class="btn <?= $view->e($product->get('buy_class', 'btn-ticket')) ?>" onclick="acheterProduit('<?= $view->e($product->getName()) ?>')"><?= $view->e($product->get('buy_label', 'Acheter — ' . $product->getPrice())) ?></button>
          <a class="btn <?= $view->e($product->get('back_class', 'btn-bleu')) ?>" href="<?= $view->e($product->get('back_url', '/produits')) ?>"><?= $view->e($product->get('back_label', 'Retour au catalogue')) ?></a>
        </p>
      </div>
    </div>
  </section>

  <hr class="bonbon">

  <section style="padding-top:0">
<?php if ($services): ?>
    <div class="panel">
      <h2 class="titre"><?= $view->e($product->get('services_title')) ?></h2>
      <div class="services">
<?php foreach ($services as $service): ?>
        <div class="service"><span class="em"><?= $view->icon($service['icon']) ?></span><strong><?= $view->e($service['title']) ?></strong><br><?= $view->e($service['text']) ?></div>
<?php endforeach; ?>
      </div>
    </div>

<?php endif; ?>
<?php if ($flavors): ?>
    <div class="panel">
      <h2 class="titre"><?= $view->e($product->get('flavors_title')) ?></h2>
      <p class="sous-titre"><?= $view->e($product->get('flavors_subtitle')) ?></p>
      <div class="parfums">
<?php foreach ($flavors as $flavor): ?>
        <span class="parfum" onclick="choisirParfum('<?= $view->e($flavor['id']) ?>')"><?= $view->icon($flavor['icon'], $iconStyle . (!empty($flavor['color']) ? ';color:' . $view->e($flavor['color']) : '') . '"') ?> <?= $view->e($flavor['label']) ?></span>
<?php endforeach; ?>
      </div>
      <p id="choix" style="font-weight:bold;min-height:24px;margin-top:14px"></p>
    </div>

<?php endif; ?>
    <div class="<?= $view->e($characteristicsClass) ?>">
      <h2 class="titre">Caractéristiques</h2>
      <table class="carac">
<?php foreach ((array) $product->get('characteristics', array()) as $row): ?>
        <tr><th><?= $view->e($row['label']) ?></th><td><?= $row['value'] ?></td></tr>
<?php endforeach; ?>
      </table>
    </div>

    <div class="<?= $view->e($compositionClass) ?>">
      <h2 class="titre">Composition</h2>
      <ul>
<?php foreach ((array) $product->get('composition', array()) as $item): ?>
        <li><?= $item ?></li>
<?php endforeach; ?>
      </ul>
<?php if ($product->get('warning')): ?>
      <div class="avertissement"><?= $view->icon('alert-triangle') ?> <?= $product->get('warning') ?></div>
<?php endif; ?>
    </div>
<?php if ($testimonials): ?>

    <div class="panel rose">
      <h2 class="titre"><?= $view->e($product->get('testimonials_title')) ?></h2>