<?php
/** Contact : `$sent` (bool), `$errors` (champ => message), `$values` (champ => valeur saisie). */
$sent = !empty($sent);
$errors = isset($errors) ? $errors : array();
$values = array_merge(array('nom' => '', 'email' => '', 'sujet' => '', 'message' => ''), !$sent && isset($values) ? $values : array());
$sujets = array(
    'Question sur un produit',
    "J'ai trouvé un Golden Ticket",
    "J'ai changé de couleur",
    'Je flotte depuis hier',
    'Candidature spontanée',
    'Autre (précisez)',
);
$erreur = function ($champ) use ($view, $errors) {
    return isset($errors[$champ])
        ? '<p class="erreur" id="erreur-' . $champ . '" role="alert" style="color:#c1121f;font-size:13px;margin:4px 0 0">' . $view->e($errors[$champ]) . '</p>'
        : '';
};
$invalide = function ($champ) use ($errors) {
    return isset($errors[$champ]) ? ' aria-invalid="true" aria-describedby="erreur-' . $champ . '"' : '';
};
?>
<div class="wrap">
  <?= $view->partial('breadcrumb') ?>

  <div class="bandeau-page">
    <h1>Nous écrire</h1>
    <p>Le bureau des lettres est au 2<sup>e</sup> étage, derrière la machine à caramel.</p>
  </div>

  <div class="contact-grid">
  <div class="panel canaux-panel">
    <?= $view->component('badge', array('label' => 'Choisissez votre façon préférée')) ?>
    <h2 class="titre">Nos canaux</h2>
    <p class="sous-titre">Une question, une urgence chocolatée ou simplement envie de dire bonjour ? Nous avons prévu quatre chemins.</p>
    <div class="canaux">
      <div class="canal"><h3><?= $view->icon('phone') ?> Téléphone</h3><p><strong>01 02 03 04 05</strong><br><span class="horaires">Lundi – vendredi<br>9h – 18h</span><br><?= $view->component('badge', array('label' => 'Attente musicale')) ?></p></div>
      <div class="canal"><h3><?= $view->icon('mail') ?> Courriel</h3><p><a href="mailto:bonjour@wonka-chocolate-factory.example">bonjour@wonka-chocolate-factory.example</a></p></div>
      <div class="canal"><h3><?= $view->icon('feather') ?> Pigeon</h3><p>Déposez votre lettre sur le rebord de la 2<sup>e</sup> cheminée.<br>Nourriture fournie.</p></div>
      <div class="canal"><h3><?= $view->icon('building-factory-2') ?> Sur place</h3><p>Au pied de la 3<sup>e</sup> cheminée.<br>Le gardien ne parle pas, mais il hoche la tête.</p></div>
    </div>
  </div>

  <div class="panel vert contact-form-panel">
    <?= $view->component('badge', array('label' => 'Le bureau des lettres', 'variant' => 'vert')) ?>
    <h2 class="titre">Formulaire de contact</h2>
    <p class="sous-titre">Ce formulaire ne part nulle part : c'est un site de démonstration. Cliquez quand même, ça fait plaisir.</p>
    <p class="obligatoire">Les champs marqués sont obligatoires. Réponse prévue sous 3 à 5 jours ouvrés.</p>
    <form class="formulaire" method="post" action="/contact" onsubmit="return envoyerMessage(event)">
      <label for="nom">Votre nom</label>
      <input type="text" id="nom" name="nom" placeholder="Charlie Bucket" required value="<?= $view->e($values['nom']) ?>"<?= $invalide('nom') ?>>
      <?= $erreur('nom') ?>

      <label for="email">Votre courriel</label>
      <input type="email" id="email" name="email" placeholder="charlie@exemple.fr" required value="<?= $view->e($values['email']) ?>"<?= $invalide('email') ?>>
      <?= $erreur('email') ?>

      <label for="sujet">Sujet</label>
      <select id="sujet" name="sujet">
<?php foreach ($sujets as $sujet): ?>
        <option<?= $values['sujet'] === $sujet ? ' selected' : '' ?>><?= $view->e($sujet) ?></option>
<?php endforeach; ?>
      </select>

      <label for="message">Votre message</label>
      <textarea id="message" name="message" placeholder="Bonjour, j'ai acheté une barre et…" required<?= $invalide('message') ?>><?= $view->e($values['message']) ?></textarea>
      <?= $erreur('message') ?>

      <p style="margin-top:16px"><button type="submit" class="btn btn-rose">Envoyer le message</button></p>
    </form>
    <div id="merci" role="status" aria-live="polite"<?= $sent ? ' style="display:block"' : '' ?>>✔ Merci ! Votre message a été déposé dans le tube pneumatique. Un Oompa Loompa va le lire.</div>
  </div>

  <div class="panel contact-visit-cta contact-note">
    <h2 class="titre">Plutôt envie de venir ?</h2>
    <p><a href="/visite-usine">Toutes les informations de visite</a> — ou la <a href="/faq">FAQ complète</a>.</p>
    <a href="/visite-usine" class="btn btn-vert">Préparer ma visite</a>
    <a href="/faq" class="btn btn-bleu">Lire la FAQ</a>
  </div>

  </div>

  <hr class="bonbon contact-separateur">

  <section class="contact-photo" aria-labelledby="contact-photo-title">
    <figure>
      <img src="/assets/images/interieur-usine.jpg" alt="Salle colorée à l'intérieur de la chocolaterie Wonka" width="3000" height="2000">
    </figure>
    <div class="contact-photo-copy">
      <?= $view->component('badge', array('label' => 'Une lettre bien arrivée', 'variant' => 'bleu')) ?>
      <h2 class="titre" id="contact-photo-title">Votre message prend le bon chemin</h2>
      <p>Chaque demande traverse le bureau des lettres, la salle des cachets et parfois la rivière de chocolat avant d'arriver à la bonne personne.</p>
      <a href="/faq" class="btn btn-bleu">Consulter les réponses</a>
    </div>
  </section>

  <div class="panel jaune faq">
    <h2 class="titre">Avant d'écrire, lisez ceci</h2>
<?= $view->component('faq', array('items' => array(
    array('question' => 'Les produits contiennent-ils des noix ?', 'answer' => 'Certains oui. La <a href="/produits/scrumdiddlyumptious-bar">Scrumdiddlyumptious Bar</a> contient des noix de pécan caramélisées. En cas de doute, ne goûtez pas les murs.'),
    array('question' => 'Que faire si un bonbon change de couleur ?', 'answer' => 'Rien de grave. L\'<a href="/produits/everlasting-gobstopper">Everlasting Gobstopper</a> change de couleur chaque jour de la semaine, c\'est sa fonction. Posez-le et attendez le lendemain.'),
    array('question' => "Peut-on commander depuis l'étranger ?", 'answer' => 'Oui, sauf pour la <a href="/produits/fizzy-lifting-drink">Fizzy Lifting Drink</a> : les boissons gazeuses qui font flotter sont interdites dans les avions, les trains et la plupart des immeubles.'),
))) ?>
  </div>
</div>