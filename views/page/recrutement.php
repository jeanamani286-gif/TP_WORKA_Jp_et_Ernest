<?php
$postes = array(
    array(
        'badges' => '<span class="badge">CDI</span> <span class="badge jaune">3<sup>e</sup> étage</span>',
        'title' => 'Goûteur en chef adjoint',
        'text' => 'Vous goûtez les productions du jour avant expédition, vous rédigez une note de trois lignes maximum, et vous dites « scrumdiddlyumptious » uniquement quand c\'est mérité.',
        'items' => array('Expérience : 2 ans en pâtisserie, confiserie ou gourmandise assumée', 'Qualités : palais sûr, vocabulaire riche, estomac solide', 'Rémunération : selon profil + dotation mensuelle en chocolat'),
        'onclick' => "postuler('Goûteur en chef adjoint')",
    ),
    array(
        'badges' => '<span class="badge">CDI</span> <span class="badge rose">Atelier bonbons durs</span>',
        'title' => 'Polisseur de bonbons',
        'text' => 'Vous polissez les <a href="/produits/everlasting-gobstopper">Everlasting Gobstoppers</a> un par un, à la main, onze minutes par pièce. Le poste est méditatif. Très méditatif.',
        'items' => array('Expérience : aucune, mais une grande patience', 'Qualités : minutie, silence, résistance à la répétition', 'Particularité : le port de gants est obligatoire, le bâillement autorisé'),
        'onclick' => "postuler('Polisseur de bonbons')",
    ),
    array(
        'badges' => '<span class="badge">Temps partiel</span> <span class="badge jaune">Couloirs</span>',
        'title' => 'Chanteur / chanteuse de couloir',
        'text' => 'Vous improvisez des couplets moraux lorsqu\'un visiteur devient violet, ou lorsqu\'un produit expérimental rate. Trois couplets minimum, rimes obligatoires.',
        'items' => array('Expérience : chorale, opéra, ou salle de bains', 'Qualités : justesse, rapidité, absence totale de gêne', 'Particularité : répétition le dimanche, jour de fermeture au public'),
        'onclick' => "postuler('Chanteur de couloir')",
    ),
    array(
        'badges' => '<span class="badge">CDD 1 an</span> <span class="badge rose">Entrée</span>',
        'title' => 'Gardien de l\'entrée',
        'text' => 'Vous gardez l\'entrée. Vous ne parlez pas. Vous hochez la tête, poliment mais fermement. Poste vacant depuis que le titulaire a refusé d\'être photographié de face.',
        'items' => array('Expérience : portier, vigie, bibliothécaire', 'Qualités : discrétion absolue, politesse inflexible', 'Particularité : un seul Golden Ticket accepté par an, jamais deux'),
        'onclick' => "postuler('Gardien de l\\'entrée')",
    ),
);
$choix = array('Goûteur en chef adjoint', 'Polisseur de bonbons', 'Chanteur / chanteuse de couloir', 'Gardien de l\'entrée', 'Candidature spontanée');
?>
<div class="wrap">
  <?= $view->partial('breadcrumb') ?>

  <div class="bandeau-page">
    <h1>Travailler à l'usine</h1>
    <p>Quatre postes, un seul étage chauffé, et beaucoup de chansons.</p>
  </div>

  <div class="panel">
    <h2 class="titre">Pourquoi venir chez nous</h2>
    <p>L'usine emploie actuellement une trentaine de personnes et un nombre indéterminé d'Oompa Loompas. Les horaires sont fixes, la cantine sert exclusivement du chocolat, et le service expédition chante pendant le travail — ce qui ralentit les livraisons mais les rend mémorables.</p>
    <p>Le paiement en fèves de cacao est réservé aux Oompa Loompas. Les salariés humains sont payés en euros, tous les mois, sauf en juillet où le comptable est en dégustation.</p>
  </div>

  <section style="padding-top:0">
    <h2 class="titre">Postes ouverts</h2>
    <p class="sous-titre">Candidature spontanée acceptée, surtout si vous savez chanter.</p>
<?php foreach ($postes as $poste): ?>

    <div class="poste">
      <?= $poste['badges'] ?>
      <h3><?= $view->e($poste['title']) ?></h3>
      <p><?= $poste['text'] ?></p>
      <ul>
<?php foreach ($poste['items'] as $item): ?>
        <li><?= $view->e($item) ?></li>
<?php endforeach; ?>
      </ul>
      <button class="btn btn-petit btn-vert" onclick="<?= $poste['onclick'] ?>">Postuler</button>
    </div>
<?php endforeach; ?>
  </section>

  <section style="padding-top:0">
    <div class="panel rose">
      <h2 class="titre">Candidature</h2>
      <p class="sous-titre">Formulaire de démonstration : rien n'est envoyé nulle part.</p>
      <form class="formulaire" onsubmit="return envoyerCandidature(event)">
        <label for="nom">Nom et prénom</label>
        <input type="text" id="nom" placeholder="Charlie Bucket" required>
        <label for="poste">Poste visé</label>
        <select id="poste">
<?php foreach ($choix as $option): ?>
          <option><?= $view->e($option) ?></option>
<?php endforeach; ?>
        </select>
        <label for="motif">Pourquoi vous ?</label>
        <textarea id="motif" placeholder="Je chante faux mais fort…" required></textarea>
        <p style="margin-top:16px"><button type="submit" class="btn btn-rose">Envoyer ma candidature</button></p>
      </form>
      <div id="merci">✔ Candidature déposée dans le tube pneumatique. Réponse sous 3 à 9 jours ouvrés.</div>
    </div>

    <div class="panel jaune faq">
      <h2 class="titre">Questions sur le recrutement</h2>
<?= $view->component('faq', array('items' => array(
    array('question' => "Peut-on travailler à l'usine ?", 'answer' => 'Oui. Nous recrutons des goûteurs, des polisseurs de bonbons et des chanteurs de couloir. Le paiement en fèves de cacao est réservé aux Oompa Loompas.'),
    array('question' => "Peut-on visiter l'usine sans Golden Ticket ?", 'answer' => 'Non, sauf si vous êtes embauché : les salariés entrent par la porte de service, qui est orange. Voir <a href="/visite-usine">Visiter l\'usine</a>.'),
    array('question' => 'Les produits expérimentaux sont-ils garantis ?', 'answer' => 'Non. Et les goûteurs signent une décharge. Voir <a href="/produits">Confiseries expérimentales</a> et la <a href="/faq">FAQ générale</a>.'),
))) ?>
    </div>
  </section>
</div>