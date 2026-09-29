<div class="topbar"><span class="bande">★ Réponse sous 3 à 5 jours ouvrés ★ Sauf si une expérience tourne mal : comptez 9 jours ★</span></div>

<header class="site">
  <div class="wrap">
    <p class="logo"><a href="?page=accueil" aria-label="Wonka Chocolate Factory - Accueil"><img src="assets/images/logo-wonka.png" alt="Wonka Chocolate Factory" width="2000" height="1125"></a></p>
    <input type="checkbox" id="menu-toggle" class="menu-toggle">
    <label for="menu-toggle" class="burger" aria-label="Ouvrir le menu"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M4 6l16 0" />
  <path d="M4 12l16 0" />
  <path d="M4 18l16 0" />
</svg></label>
    <nav class="main">
      <a href="?page=accueil">Accueil</a>
      <a href="?page=produits">Produits</a>
      <a href="?page=visite-usine">Visiter l'usine</a>
      <a href="?page=histoire">Notre histoire</a>
      <a href="?page=faq">FAQ</a>
      <a href="?page=contact">Contact</a>
    </nav>
  </div>
</header>
<script>
(function(){
  var page = location.pathname.split('/').pop() || 'index.html';
  var parents = { 'wonka-bar.html':'produits.html', 'everlasting-gobstopper.html':'produits.html', 'fizzy-lifting-drink.html':'produits.html', 'three-course-dinner-gum.html':'produits.html', 'lickable-wallpaper.html':'produits.html', 'golden-egg.html':'produits.html', 'scrumdiddlyumptious-bar.html':'produits.html', 'invisible-chocolate.html':'produits.html' };
  var cible = parents[page] || page;
  var liens = document.querySelectorAll('nav.main a');
  for (var i = 0; i < liens.length; i++) {
    if (liens[i].getAttribute('href') === cible) {
      liens[i].setAttribute('aria-current', 'page');
    }
  }
})();
</script>

<div class="wrap">
  <p class="fil"><a href="?page=accueil">Accueil</a> › Contact</p>

  <div class="bandeau-page">
    <h1>Nous écrire</h1>
    <p>Le bureau des lettres est au 2<sup>e</sup> étage, derrière la machine à caramel.</p>
  </div>

  <div class="contact-grid">
  <div class="panel canaux-panel">
    <span class="badge">Choisissez votre façon préférée</span>
    <h2 class="titre">Nos canaux</h2>
    <p class="sous-titre">Une question, une urgence chocolatée ou simplement envie de dire bonjour ? Nous avons prévu quatre chemins.</p>
    <div class="canaux">
      <div class="canal"><h3><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
</svg> Téléphone</h3><p><strong>01 02 03 04 05</strong><br><span class="horaires">Lundi – vendredi<br>9h – 18h</span><br><span class="badge">Attente musicale</span></p></div>
      <div class="canal"><h3><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
  <path d="M3 7l9 6l9 -6" />
</svg> Courriel</h3><p><a href="mailto:bonjour@wonka-chocolate-factory.example">bonjour@wonka-chocolate-factory.example</a></p></div>
      <div class="canal"><h3><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M4 20l10 -10m0 -5v5h5m-9 -1v5h5m-9 -1v5h5m-5 -5l4 -4l4 -4" />
  <path d="M19 10c.638 -.636 1 -1.515 1 -2.486a3.515 3.515 0 0 0 -3.517 -3.514c-.97 0 -1.847 .367 -2.483 1m-3 13l4 -4l4 -4" />
</svg> Pigeon</h3><p>Déposez votre lettre sur le rebord de la 2<sup>e</sup> cheminée.<br>Nourriture fournie.</p></div>
      <div class="canal"><h3><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M3 21h18" />
  <path d="M5 21v-12l5 4v-4l5 4h4" />
  <path d="M19 21v-8l-1.436 -9.574a.5 .5 0 0 0 -.495 -.426h-1.145a.5 .5 0 0 0 -.494 .418l-1.43 8.582" />
  <path d="M9 17h1" />
  <path d="M14 17h1" />
</svg> Sur place</h3><p>Au pied de la 3<sup>e</sup> cheminée.<br>Le gardien ne parle pas, mais il hoche la tête.</p></div>
    </div>
  </div>

  <div class="panel vert contact-form-panel">
    <span class="badge vert">Le bureau des lettres</span>
    <h2 class="titre">Formulaire de contact</h2>
    <p class="sous-titre">Ce formulaire ne part nulle part : c'est un site de démonstration. Cliquez quand même, ça fait plaisir.</p>
    <p class="obligatoire">Les champs marqués sont obligatoires. Réponse prévue sous 3 à 5 jours ouvrés.</p>
    <form class="formulaire" onsubmit="return envoyerMessage(event)">
      <label for="nom">Votre nom</label>
      <input type="text" id="nom" name="nom" placeholder="Charlie Bucket" required>

      <label for="mail">Votre courriel</label>
      <input type="email" id="mail" name="mail" placeholder="charlie@exemple.fr" required>

      <label for="sujet">Sujet</label>
      <select id="sujet" name="sujet">
        <option>Question sur un produit</option>
        <option>J'ai trouvé un Golden Ticket</option>
        <option>J'ai changé de couleur</option>
        <option>Je flotte depuis hier</option>
        <option>Candidature spontanée</option>
        <option>Autre (précisez)</option>
      </select>

      <label for="message">Votre message</label>
      <textarea id="message" name="message" placeholder="Bonjour, j'ai acheté une barre et…" required></textarea>

      <p style="margin-top:16px"><button type="submit" class="btn btn-rose">Envoyer le message</button></p>
    </form>
    <div id="merci" role="status" aria-live="polite">✔ Merci ! Votre message a été déposé dans le tube pneumatique. Un Oompa Loompa va le lire.</div>
  </div>

  <div class="panel contact-visit-cta contact-note">
    <h2 class="titre">Plutôt envie de venir ?</h2>
    <p><a href="?page=visite-usine">Toutes les informations de visite</a> — ou la <a href="?page=faq">FAQ complète</a>.</p>
    <a href="?page=visite-usine" class="btn btn-vert">Préparer ma visite</a>
    <a href="?page=faq" class="btn btn-bleu">Lire la FAQ</a>
  </div>

  </div>

  <hr class="bonbon contact-separateur">

  <section class="contact-photo" aria-labelledby="contact-photo-title">
    <figure>
      <img src="assets/images/interieur-usine.jpg" alt="Salle colorée à l'intérieur de la chocolaterie Wonka" width="3000" height="2000">
    </figure>
    <div class="contact-photo-copy">
      <span class="badge bleu">Une lettre bien arrivée</span>
      <h2 class="titre" id="contact-photo-title">Votre message prend le bon chemin</h2>
      <p>Chaque demande traverse le bureau des lettres, la salle des cachets et parfois la rivière de chocolat avant d'arriver à la bonne personne.</p>
      <a href="?page=faq" class="btn btn-bleu">Consulter les réponses</a>
    </div>
  </section>

  <div class="panel jaune faq">
    <h2 class="titre">Avant d'écrire, lisez ceci</h2>
    <details open>
      <summary>Les produits contiennent-ils des noix ?</summary>
      <p>Certains oui. La <a href="?page=scrumdiddlyumptious-bar">Scrumdiddlyumptious Bar</a> contient des noix de pécan caramélisées. En cas de doute, ne goûtez pas les murs.</p>
    </details>
    <details>
      <summary>Que faire si un bonbon change de couleur ?</summary>
      <p>Rien de grave. L'<a href="?page=everlasting-gobstopper">Everlasting Gobstopper</a> change de couleur chaque jour de la semaine, c'est sa fonction. Posez-le et attendez le lendemain.</p>
    </details>
    <details>
      <summary>Peut-on commander depuis l'étranger ?</summary>
      <p>Oui, sauf pour la <a href="?page=fizzy-lifting-drink">Fizzy Lifting Drink</a> : les boissons gazeuses qui font flotter sont interdites dans les avions, les trains et la plupart des immeubles.</p>
    </details>
  </div>
</div>
