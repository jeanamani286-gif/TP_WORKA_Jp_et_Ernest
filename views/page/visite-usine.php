<?php
$tapis = array('candy', 'lollipop', 'cake', 'cookie', 'ice-cream', 'candy', 'lollipop', 'cake', 'cookie', 'ice-cream');
$infos = array(
    array('icon' => 'map-pin', 'label' => 'Adresse', 'value' => '14 boulevard du Cacao Fou, 1971 Chocolatville-sur-Rivière'),
    array('icon' => 'building-factory', 'label' => 'Point de rendez-vous', 'value' => 'Devant l\'usine, au pied de la 3<sup>e</sup> cheminée en partant de la gauche'),
    array('icon' => 'hourglass', 'label' => 'Durée de la visite', 'value' => 'Environ 3 heures, plus si le groupe s\'attarde près de la rivière'),
    array('icon' => 'users-group', 'label' => 'Nombre de visiteurs', 'value' => '5 enfants maximum, 1 accompagnateur chacun'),
    array('icon' => 'ticket', 'label' => 'Tarif', 'value' => 'Gratuit (le Golden Ticket vaut entrée + lot à vie)'),
    array('icon' => 'wheelchair', 'label' => 'Accessibilité', 'value' => 'Ascenseur en verre, mais il va dans toutes les directions'),
    array('icon' => 'hanger', 'label' => 'Vestiaire', 'value' => 'Obligatoire pour les chapeaux, parapluies et idées préconçues'),
);
$horaires = array(
    array('icon' => 'clock', 'label' => 'Lundi – Vendredi', 'value' => '9h – 18h'),
    array('icon' => 'sun', 'label' => 'Samedi', 'value' => '10h – 16h'),
    array('icon' => 'moon-stars', 'label' => 'Dimanche', 'value' => 'Fermé (répétitions)'),
    array('icon' => 'calendar-star', 'label' => 'Jours fériés', 'value' => 'Surprise'),
);
$etapes = array(
    array('icon' => 'door-enter', 'title' => 'Hall d\'entrée', 'text' => 'Distribution des contrats et des bonbons de bienvenue.'),
    array('icon' => 'candy', 'title' => 'Salle du chocolat', 'text' => 'La fameuse prairie. Interdiction formelle de toucher l\'herbe.'),
    array('icon' => 'ripple', 'title' => 'Rivière de chocolat', 'text' => 'Mélange par cascade. Ne pas se pencher. Ne pas goûter. Ne pas y faire tomber un enfant.'),
    array('icon' => 'bulb', 'title' => 'Salle des inventions', 'text' => 'Voir la page <a href="/produits">Confiseries expérimentales</a>.'),
    array('icon' => 'nut', 'title' => 'Salle des noix', 'text' => 'Écureuilles trieuses. Zone à risque pour les enfants capricieux.'),
    array('icon' => 'wallpaper', 'title' => 'Salle du papier peint', 'text' => 'Dégustation libre et encadrée de la <a href="/produits/lickable-wallpaper">Lickable Wallpaper</a>.'),
    array('icon' => 'elevator', 'title' => 'Sortie par l\'ascenseur', 'text' => 'Direction : partout.'),
    array('icon' => 'shopping-bag', 'title' => 'Boutique et vestiaire', 'text' => 'Parapluies rendus, chocolats à emporter et carnets de réclamation.'),
);
$regles = array(
    array('icon' => 'candy-off', 'text' => 'Ne rien goûter sans autorisation écrite.'),
    array('icon' => 'wind', 'text' => 'Ne pas boire la <a href="/produits/fizzy-lifting-drink">Fizzy Lifting Drink</a> debout, ni près d\'un ventilateur.'),
    array('icon' => 'egg', 'text' => 'Ne pas ramasser de <a href="/produits/golden-egg">Golden Egg</a> sans demander.'),
    array('icon' => 'music', 'text' => 'Les chansons des employés ne doivent pas être reprises en chœur avant le troisième couplet.'),
    array('icon' => 'lemon', 'text' => 'Tout visiteur devenu violet sera pris en charge, sans frais, par le service jus de citron.'),
);
?>
<div class="wrap">
  <?= $view->partial('breadcrumb') ?>

  <div class="bandeau-page">
    <?= $view->component('badge', array('label' => 'Ouverture exceptionnelle — 5 visiteurs par an', 'variant' => 'jaune')) ?>
    <h1>Visiter l'usine</h1>
    <p>Cinq visiteurs par an. Un par ticket. Pas d'exception, sauf pour les chiens très polis.</p>
    <p>
      <a href="/golden-ticket" class="btn btn-ticket">Trouver un Golden Ticket</a>
      <a href="#reglement" class="btn btn-rose">Voir le règlement</a>
    </p>
  </div>

  <div class="vitrine">
    <figure class="vitrine-photo">
      <img src="/assets/images/exterieur-usine.png" alt="Façade extérieure de la Wonka Chocolate Factory" width="565" height="353">
      <figcaption>La façade officielle</figcaption>
    </figure>
    <figure class="vitrine-photo">
      <img src="/assets/images/interieur-usine.jpg" alt="Intérieur de la chocolaterie Wonka" width="3000" height="2000">
      <figcaption>L'atelier principal</figcaption>
    </figure>
    <figure class="vitrine-photo">
      <img src="/assets/images/bateau-rose.png" alt="Le bateau rose qui navigue sur la rivière de chocolat" width="1448" height="1086">
      <figcaption>Le bateau rose</figcaption>
    </figure>
  </div>

  <hr class="bonbon">

  <div class="panel rose reveal">
    <h2 class="titre">Informations pratiques</h2>
    <table class="carac">
<?php foreach ($infos as $info): ?>
      <tr><th><span class="ico-th"><?= $view->icon($info['icon'], 'aria-hidden="true"') ?></span><?= $view->e($info['label']) ?></th><td><?= $info['value'] ?></td></tr>
<?php endforeach; ?>
    </table>
  </div>

  <div class="panel reveal">
    <h2 class="titre">Horaires d'ouverture</h2>
    <p class="sous-titre" style="margin-bottom:16px">Identiques à ceux affichés dans le pied de page de ce site, mais en plus grand.</p>
    <div class="horaires">
<?php foreach ($horaires as $horaire): ?>
      <div class="horaire"><span class="ico"><?= $view->icon($horaire['icon'], 'aria-hidden="true"') ?></span><strong><?= $view->e($horaire['label']) ?></strong><span><?= $view->e($horaire['value']) ?></span></div>
<?php endforeach; ?>
    </div>
  </div>

  <div class="hero-riviere reveal">
    <h2>La rivière de chocolat vous attend</h2>
    <p>Un fleuve entièrement comestible, mélangé à la cascade, que vous aurez l'interdiction formelle de goûter. C'est tout l'intérêt de venir le voir en vrai.</p>
    <a href="/golden-ticket" class="btn btn-ticket">Réserver ma visite</a>
  </div>

  <div class="reveal">
    <h2 class="titre">Le parcours de visite</h2>
    <p class="sous-titre">Huit salles, trois interdits majeurs et une sortie avec boutique.</p>
    <div class="visite-bloc">
      <div class="etapes">
<?php foreach ($etapes as $i => $etape): ?>
        <div class="etape">
          <div class="etape-entete"><span class="n"><?= $i + 1 ?></span><span class="ico"><?= $view->icon($etape['icon'], 'aria-hidden="true"') ?></span></div>
          <h3 style="margin:0 0 6px;font-size:19px"><?= $view->e($etape['title']) ?></h3>
          <p style="font-size:13px;margin:0"><?= $etape['text'] ?></p>
        </div>
<?php endforeach; ?>
      </div>
      <div class="visite-photos">
        <figure class="visite-photo">
          <img src="/assets/images/salle-noix-ecureuils.jpeg" alt="Les écureuilles trieuses de la salle des noix" width="738" height="415">
          <figcaption>La salle des noix</figcaption>
        </figure>
        <figure class="visite-photo">
          <img src="/assets/images/labo-chocolat.png" alt="Le laboratoire de chocolat de l'usine Wonka" width="1122" height="1402">
          <figcaption>Le laboratoire chocolat</figcaption>
        </figure>
      </div>
    </div>
  </div>

  <hr class="bonbon">

  <div class="panel jaune reveal" id="reglement">
    <h2 class="titre">Règlement intérieur (extraits)</h2>
    <ol class="regles">
<?php foreach ($regles as $i => $regle): ?>
      <li><span class="n"><?= $i + 1 ?></span><span class="ico"><?= $view->icon($regle['icon'], 'aria-hidden="true"') ?></span><p><?= $regle['text'] ?></p></li>
<?php endforeach; ?>
    </ol>
    <div class="avertissement"><?= $view->icon('alert-triangle') ?> La page 12 du contrat de visite contient une clause relative aux plafonds. Lisez-la. Vraiment.</div>
  </div>

  <div class="tapis" aria-hidden="true"><div class="bande-c" id="tapis"><?php foreach ($tapis as $icone): ?><?= $view->icon($icone) ?> <?php endforeach; ?></div></div>

  <div class="panel faq reveal" id="faq">
    <h2 class="titre">FAQ visite</h2>
<?= $view->component('faq', array('items' => array(
    array('question' => "Peut-on visiter l'usine sans Golden Ticket ?", 'answer' => 'Non. Absolument non. L\'usine est verrouillée, et le gardien est très poli mais très ferme.'),
    array('question' => "Peut-on visiter l'usine avec des enfants ?", 'answer' => 'C\'est même l\'objectif : cinq enfants, pas un de plus. Les accompagnateurs doivent rester calmes, ce qui est plus difficile qu\'il n\'y paraît.'),
    array('question' => 'Où trouver un Golden Ticket ?', 'answer' => 'Dans une <a href="/produits/wonka-bar">Wonka Bar</a> ou dans un <a href="/produits/golden-egg">Golden Egg</a>. Cinq tickets par an, jamais six.'),
))) ?>
  </div>
</div>