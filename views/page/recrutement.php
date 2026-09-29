<div class="topbar"><span class="bande">★ 4 postes ouverts ★ Le chant n'est pas optionnel ★ Les humains sont payés en euros ★</span></div>

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
  <p class="fil"><a href="?page=accueil">Accueil</a> › Travailler à l'usine</p>

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

    <div class="poste">
      <span class="badge">CDI</span> <span class="badge jaune">3<sup>e</sup> étage</span>
      <h3>Goûteur en chef adjoint</h3>
      <p>Vous goûtez les productions du jour avant expédition, vous rédigez une note de trois lignes maximum, et vous dites « scrumdiddlyumptious » uniquement quand c'est mérité.</p>
      <ul>
        <li>Expérience : 2 ans en pâtisserie, confiserie ou gourmandise assumée</li>
        <li>Qualités : palais sûr, vocabulaire riche, estomac solide</li>
        <li>Rémunération : selon profil + dotation mensuelle en chocolat</li>
      </ul>
      <button class="btn btn-petit btn-vert" onclick="postuler('Goûteur en chef adjoint')">Postuler</button>
    </div>

    <div class="poste">
      <span class="badge">CDI</span> <span class="badge rose">Atelier bonbons durs</span>
      <h3>Polisseur de bonbons</h3>
      <p>Vous polissez les <a href="?page=everlasting-gobstopper">Everlasting Gobstoppers</a> un par un, à la main, onze minutes par pièce. Le poste est méditatif. Très méditatif.</p>
      <ul>
        <li>Expérience : aucune, mais une grande patience</li>
        <li>Qualités : minutie, silence, résistance à la répétition</li>
        <li>Particularité : le port de gants est obligatoire, le bâillement autorisé</li>
      </ul>
      <button class="btn btn-petit btn-vert" onclick="postuler('Polisseur de bonbons')">Postuler</button>
    </div>

    <div class="poste">
      <span class="badge">Temps partiel</span> <span class="badge jaune">Couloirs</span>
      <h3>Chanteur / chanteuse de couloir</h3>
      <p>Vous improvisez des couplets moraux lorsqu'un visiteur devient violet, ou lorsqu'un produit expérimental rate. Trois couplets minimum, rimes obligatoires.</p>
      <ul>
        <li>Expérience : chorale, opéra, ou salle de bains</li>
        <li>Qualités : justesse, rapidité, absence totale de gêne</li>
        <li>Particularité : répétition le dimanche, jour de fermeture au public</li>
      </ul>
      <button class="btn btn-petit btn-vert" onclick="postuler('Chanteur de couloir')">Postuler</button>
    </div>

    <div class="poste">
      <span class="badge">CDD 1 an</span> <span class="badge rose">Entrée</span>
      <h3>Gardien de l'entrée</h3>
      <p>Vous gardez l'entrée. Vous ne parlez pas. Vous hochez la tête, poliment mais fermement. Poste vacant depuis que le titulaire a refusé d'être photographié de face.</p>
      <ul>
        <li>Expérience : portier, vigie, bibliothécaire</li>
        <li>Qualités : discrétion absolue, politesse inflexible</li>
        <li>Particularité : un seul Golden Ticket accepté par an, jamais deux</li>
      </ul>
      <button class="btn btn-petit btn-vert" onclick="postuler('Gardien de l\'entrée')">Postuler</button>
    </div>
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
          <option>Goûteur en chef adjoint</option>
          <option>Polisseur de bonbons</option>
          <option>Chanteur / chanteuse de couloir</option>
          <option>Gardien de l'entrée</option>
          <option>Candidature spontanée</option>
        </select>
        <label for="motif">Pourquoi vous ?</label>
        <textarea id="motif" placeholder="Je chante faux mais fort…" required></textarea>
        <p style="margin-top:16px"><button type="submit" class="btn btn-rose">Envoyer ma candidature</button></p>
      </form>
      <div id="merci">✔ Candidature déposée dans le tube pneumatique. Réponse sous 3 à 9 jours ouvrés.</div>
    </div>

    <div class="panel jaune faq">
      <h2 class="titre">Questions sur le recrutement</h2>
      <details open>
        <summary>Peut-on travailler à l'usine ?</summary>
        <p>Oui. Nous recrutons des goûteurs, des polisseurs de bonbons et des chanteurs de couloir. Le paiement en fèves de cacao est réservé aux Oompa Loompas.</p>
      </details>
      <details>
        <summary>Peut-on visiter l'usine sans Golden Ticket ?</summary>
        <p>Non, sauf si vous êtes embauché : les salariés entrent par la porte de service, qui est orange. Voir <a href="?page=visite-usine">Visiter l'usine</a>.</p>
      </details>
      <details>
        <summary>Les produits expérimentaux sont-ils garantis ?</summary>
        <p>Non. Et les goûteurs signent une décharge. Voir <a href="?page=produits">Confiseries expérimentales</a> et la <a href="?page=faq">FAQ générale</a>.</p>
      </details>
    </div>
  </section>
</div>

<footer class="site">
  <div class="colonnes">
    <div>
      <h4>L'usine</h4>
      <p>Wonka Chocolate Factory<br>14 boulevard du Cacao Fou<br>1971 Chocolatville-sur-Rivière</p>
    </div>
    <div>
      <h4>Horaires</h4>
      <p>Lundi – Vendredi : 9h – 18h<br>Samedi : 10h – 16h<br>Dimanche : fermé</p>
    </div>
    <div>
      <h4>Besoin d'aide ?</h4>
      <p><a href="?page=faq"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M9 6l6 6l-6 6" />
</svg> Foire aux questions</a><br><a href="?page=contact"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M9 6l6 6l-6 6" />
</svg> Nous contacter</a><br><a href="?page=mentions-legales"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M9 6l6 6l-6 6" />
</svg> Mentions légales</a><br><a href="?page=recrutement"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M9 6l6 6l-6 6" />
</svg> Travailler à l'usine</a><br><a href="?page=golden-ticket"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M9 6l6 6l-6 6" />
</svg> Trouver un Golden Ticket</a></p>
    </div>
  </div>
  <p class="absurde">© 1971-2026 Wonka Chocolate Factory — Tous droits réservés, y compris ceux qui n'existent pas encore. Aucun Oompa Loompa n'a été consulté pour la rédaction de ce site. Les chansons du service expédition sont comprises dans le prix.</p>
</footer>

<script>
/* SCRIPT WONKA — recopié depuis index.html */
function postuler(poste) {
  alert("Merci ! Le poste « " + poste + " » vous attend peut-être.\nDescendez plus bas pour remplir le formulaire.");
  var sel = document.getElementById('poste');
  for (var i = 0; i < sel.options.length; i++) {
    if (sel.options[i].text.indexOf(poste) !== -1) { sel.selectedIndex = i; }
  }
  window.scrollTo({ top: document.body.scrollHeight * 0.62, behavior: 'smooth' });
}

function envoyerCandidature(e) {
  e.preventDefault();
  document.getElementById('merci').style.display = 'block';
  return false;
}

</script>
