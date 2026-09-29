<div class="wrap">
  <?= $view->partial('breadcrumb') ?>

  <div class="hero-ticket">
    <div>
      <?= $view->component('badge', array('label' => 'Série 2026', 'variant' => 'clignote')) ?>
      <h1>Le Golden<br>Ticket.</h1>
      <p>Cinq tickets dorés, cinq visites, cinq lots à vie. Aucun autre moyen d'entrer dans l'usine. Aucun.</p>
      <p>
        <a href="/visite-usine" class="btn btn-bleu">Que donne le ticket ?</a>
      </p>
    </div>
    <div>
      <div class="ticket">
        <h3><?= $view->icon('star') ?> GOLDEN TICKET <?= $view->icon('star') ?></h3>
        <p class="perfo"></p>
        <p style="margin:0 0 6px"><strong>Porteur :</strong> <span id="porteur">un enfant très chanceux</span></p>
        <p style="margin:0 0 6px"><strong>Droit :</strong> une visite complète + un lot à vie</p>
        <p class="num">N° <span id="numTicket">000000</span> — série CACAO</p>
        <p class="perfo"></p>
      </div>
    </div>
  </div>

  <hr class="bonbon">

  <section style="padding-top:0">
    <div class="panel">
      <h2 class="titre">Les deux façons d'obtenir un ticket</h2>
      <div class="methode">
        <div class="m"><h3 style="margin:0 0 6px;font-size:19px">1. Dans une barre</h3><p style="font-size:13px;margin:0 0 10px">Le ticket est glissé sous l'emballage d'une <a href="/produits/wonka-bar">Wonka Bar</a>. Personne à l'usine ne sait dans laquelle.</p><a class="btn btn-petit" href="/produits/wonka-bar">Voir la barre</a></div>
        <div class="m"><h3 style="margin:0 0 6px;font-size:19px">2. Dans un œuf</h3><p style="font-size:13px;margin:0 0 10px">Un <a href="/produits/golden-egg">Golden Egg</a> sur 300 contient un ticket. Les autres contiennent un bonbon rare et un rêve.</p><a class="btn btn-petit" href="/produits/golden-egg">Voir l'œuf</a></div>
      </div>
    </div>

    <div class="panel vert">
      <h2 class="titre">Ce que donne le ticket</h2>
      <table class="carac">
        <tr><th>Entrée</th><td>Une visite complète de l'usine, le jour dit</td></tr>
        <tr><th>Accompagnement</th><td>Un adulte par enfant, responsable de son calme</td></tr>
        <tr><th>Lot</th><td>Un approvisionnement en chocolat à vie (définition de « vie » à débattre)</td></tr>
        <tr><th>Durée de validité</th><td>Une seule date, non reportable, non négociable</td></tr>
        <tr><th>Cession</th><td>Interdite. Le ticket est nominatif dès qu'il est touché.</td></tr>
      </table>
      <div class="avertissement"><?= $view->icon('alert-triangle') ?> Règlement : tout ticket déchiré, photocopié, dessiné ou obtenu par ruse sera refusé poliment mais définitivement.</div>
    </div>

    <div class="panel jaune faq">
      <h2 class="titre">Questions fréquentes sur les tickets</h2>
<?= $view->component('faq', array('items' => array(
    array('question' => 'Où trouver un Golden Ticket ?', 'answer' => 'Dans une <a href="/produits/wonka-bar">Wonka Bar</a> ou dans un <a href="/produits/golden-egg">Golden Egg</a>. Cinq tickets par an, jamais six.'),
    array('question' => "Peut-on visiter l'usine sans Golden Ticket ?", 'answer' => 'Non. Absolument non. L\'usine est verrouillée, et le gardien est très poli mais très ferme. Voir <a href="/visite-usine">Visiter l\'usine</a>.'),
    array('question' => "Peut-on visiter l'usine avec des enfants ?", 'answer' => 'C\'est même l\'objectif : cinq enfants, pas un de plus, chacun accompagné d\'un adulte responsable de son calme.'),
))) ?>
    </div>
  </section>
</div>