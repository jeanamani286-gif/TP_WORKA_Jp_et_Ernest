<div class="topbar"><span class="bande">★ 5 Golden Tickets par an ★ 2 déjà trouvés cette année ★ 3 encore cachés ★ Ni repris, ni échangé, ni remboursé en bonbons ★</span></div>

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
  <p class="fil"><a href="?page=accueil">Accueil</a> › Golden Ticket</p>

  <div class="hero-ticket">
    <div>
      <span class="badge clignote">Série 2026</span>
      <h1>Le Golden<br>Ticket.</h1>
      <p>Cinq tickets dorés, cinq visites, cinq lots à vie. Aucun autre moyen d'entrer dans l'usine. Aucun.</p>
      <p>
        <a href="?page=visite-usine" class="btn btn-bleu">Que donne le ticket ?</a>
      </p>
    </div>
    <div>
      <div class="ticket">
        <h3><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
</svg> GOLDEN TICKET <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
</svg></h3>
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
        <div class="m"><h3 style="margin:0 0 6px;font-size:19px">1. Dans une barre</h3><p style="font-size:13px;margin:0 0 10px">Le ticket est glissé sous l'emballage d'une <a href="?page=wonka-bar">Wonka Bar</a>. Personne à l'usine ne sait dans laquelle.</p><a class="btn btn-petit" href="?page=wonka-bar">Voir la barre</a></div>
        <div class="m"><h3 style="margin:0 0 6px;font-size:19px">2. Dans un œuf</h3><p style="font-size:13px;margin:0 0 10px">Un <a href="?page=golden-egg">Golden Egg</a> sur 300 contient un ticket. Les autres contiennent un bonbon rare et un rêve.</p><a class="btn btn-petit" href="?page=golden-egg">Voir l'œuf</a></div>
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
      <div class="avertissement"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M12 9v4" />
  <path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z" />
  <path d="M12 16h.01" />
</svg> Règlement : tout ticket déchiré, photocopié, dessiné ou obtenu par ruse sera refusé poliment mais définitivement.</div>
    </div>

    <div class="panel jaune faq">
      <h2 class="titre">Questions fréquentes sur les tickets</h2>
      <details open>
        <summary>Où trouver un Golden Ticket ?</summary>
        <p>Dans une <a href="?page=wonka-bar">Wonka Bar</a> ou dans un <a href="?page=golden-egg">Golden Egg</a>. Cinq tickets par an, jamais six.</p>
      </details>
      <details>
        <summary>Peut-on visiter l'usine sans Golden Ticket ?</summary>
        <p>Non. Absolument non. L'usine est verrouillée, et le gardien est très poli mais très ferme. Voir <a href="?page=visite-usine">Visiter l'usine</a>.</p>
      </details>
      <details>
        <summary>Peut-on visiter l'usine avec des enfants ?</summary>
        <p>C'est même l'objectif : cinq enfants, pas un de plus, chacun accompagné d'un adulte responsable de son calme.</p>
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
