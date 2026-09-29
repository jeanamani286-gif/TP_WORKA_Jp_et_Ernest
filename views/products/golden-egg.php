<div class="topbar"><span class="bande">★ Golden Egg ★ 300 exemplaires numérotés par an ★ Un seul contient peut-être un ticket ★ Livré dans une boîte en velours ★</span></div>

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
  <p class="fil"><a href="?page=accueil">Accueil</a> › <a href="?page=produits">Produits</a> › Golden Egg</p>

  <section class="fiche-intro">
    <div class="fiche">
      <div>
        <div class="gros-visuel"><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M19 14.083c0 4.154 -2.966 6.74 -7 6.917c-4.2 0 -7 -2.763 -7 -6.917c0 -5.538 3.5 -11.09 7 -11.083c3.5 .007 7 5.545 7 11.083z" />
</svg></span></div>
        <p style="text-align:center;margin-top:12px"><span class="badge jaune">Édition limitée</span></p>
      </div>
      <div>
        <span class="badge clignote">Collection</span>
        <h1 class="titre" style="margin-top:8px">Golden Egg</h1>
        <p class="sous-titre" style="font-size:18px;font-style:italic">« Pondu par une poule très motivée. »</p>
        <p class="prix">89,00 €</p>
        <p>Coque de chocolat doré, polie à la main pendant onze minutes, numérotée de 001 à 300. À l'intérieur : un bonbon rare tiré au sort, une carte signée par M. Wonka, et un rêve. Le rêve n'est pas materialisé, mais il est bien là.</p>
        <p>Sur chaque série de 300 œufs, un seul contient un <a href="?page=golden-ticket">Golden Ticket</a>. La poule ne sait pas lequel.</p>
        <p>
          <button class="btn btn-ticket" onclick="acheterProduit('Golden Egg')">Acheter — 89,00 €</button>
          <a class="btn btn-bleu" href="?page=produits">Retour au catalogue</a>
        </p>
      </div>
    </div>
  </section>

  <hr class="bonbon">

  <section style="padding-top:0">
    <div class="panel">
      <h2 class="titre">Caractéristiques</h2>
      <table class="carac">
        <tr><th>Nom du produit</th><td>Golden Egg</td></tr>
        <tr><th>Catégorie</th><td>Collection &amp; objets</td></tr>
        <tr><th>Prix</th><td>89,00 € l'unité</td></tr>
        <tr><th>Disponibilité</th><td><span class="badge jaune">Édition limitée</span> — 300 exemplaires par an</td></tr>
        <tr><th>Niveau de rareté</th><td><span class="badge">Très rare</span></td></tr>
        <tr><th>Contenu</th><td>1 bonbon rare, 1 carte signée, 1 rêve</td></tr>
        <tr><th>Probabilité de ticket</th><td>1 sur 300</td></tr>
        <tr><th>Référence</th><td>GE-2019-002</td></tr>
      </table>
    </div>

    <div class="panel vert">
      <h2 class="titre">Composition</h2>
      <ul>
        <li>Coque : chocolat au lait doré (poudre d'or alimentaire E175), 3,2 mm</li>
        <li>Polissage manuel, 11 minutes par œuf</li>
        <li>Bonbon interne : variable (Gobstopper mini, caramel au sel fumé, praliné noisette)</li>
        <li>Peut contenir des traces de fruits à coque et d'ambition</li>
        <li>Boîte en velours bordeaux, ruban doré, aucune valeur pratique</li>
      </ul>
      <div class="avertissement"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M12 9v4" />
  <path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z" />
  <path d="M12 16h.01" />
</svg> Avertissement : ne pas exposer au soleil (la dorure fond), ne pas secouer (le rêve se froisse), ne pas ouvrir devant une personne impatiente.</div>
    </div>

    <div class="panel jaune faq">
      <h2 class="titre">Questions sur le Golden Egg</h2>
      <details open>
        <summary>Un Golden Egg contient-il un Golden Ticket ?</summary>
        <p>Rarement. Sur 300 œufs numérotés, un contient un ticket. Les autres contiennent un bonbon rare et un rêve. Voir la page <a href="?page=golden-ticket">Golden Ticket</a>.</p>
      </details>
      <details>
        <summary>Où trouver un Golden Ticket ?</summary>
        <p>Dans une <a href="?page=wonka-bar">Wonka Bar</a> ou dans un Golden Egg. Cinq tickets par an, jamais six.</p>
      </details>
      <details>
        <summary>Peut-on le revendre ?</summary>
        <p>Légalement oui. Moralement, l'usine désapprouve fortement. Voir la <a href="?page=faq">FAQ générale</a>.</p>
      </details>
    </div>

    <h2 class="titre">Vous aimerez peut-être aussi</h2>
    <p class="sous-titre">Suggestions codées à la main, comme tout le reste.</p>
    <div class="grille">
      <div class="carte">
        <div class="visuel" style="background:#f7d9a3"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M7.05 11.293l4.243 -4.243a2 2 0 0 1 2.828 0l2.829 2.83a2 2 0 0 1 0 2.828l-4.243 4.243a2 2 0 0 1 -2.828 0l-2.829 -2.831a2 2 0 0 1 0 -2.828z" />
  <path d="M16.243 9.172l3.086 -.772a1.5 1.5 0 0 0 .697 -2.516l-2.216 -2.217a1.5 1.5 0 0 0 -2.44 .47l-1.248 2.913" />
  <path d="M9.172 16.243l-.772 3.086a1.5 1.5 0 0 1 -2.516 .697l-2.217 -2.216a1.5 1.5 0 0 1 .47 -2.44l2.913 -1.248" />
</svg></div>
        <h3>Wonka Bar</h3>
        <p style="font-size:13px;margin:0 0 6px">La barre qui a rendu cinq enfants célèbres.</p>
        <p class="prix" style="font-size:22px">3,50 €</p>
        <a class="btn btn-petit" href="?page=wonka-bar">Voir la fiche</a>
      </div>
      <div class="carte">
        <div class="visuel" style="background:#e2c9f5"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M7.05 11.293l4.243 -4.243a2 2 0 0 1 2.828 0l2.829 2.83a2 2 0 0 1 0 2.828l-4.243 4.243a2 2 0 0 1 -2.828 0l-2.829 -2.831a2 2 0 0 1 0 -2.828z" />
  <path d="M16.243 9.172l3.086 -.772a1.5 1.5 0 0 0 .697 -2.516l-2.216 -2.217a1.5 1.5 0 0 0 -2.44 .47l-1.248 2.913" />
  <path d="M9.172 16.243l-.772 3.086a1.5 1.5 0 0 1 -2.516 .697l-2.217 -2.216a1.5 1.5 0 0 1 .47 -2.44l2.913 -1.248" />
</svg></div>
        <h3>Scrumdiddlyumptious Bar</h3>
        <p style="font-size:13px;margin:0 0 6px">Le mot n'existe pas. Le chocolat si.</p>
        <p class="prix" style="font-size:22px">5,50 €</p>
        <a class="btn btn-petit" href="?page=scrumdiddlyumptious-bar">Voir la fiche</a>
      </div>
      <div class="carte">
        <div class="visuel" style="background:#f4b8d6"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M14 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
  <path d="M21 10a3.5 3.5 0 0 0 -7 0" />
  <path d="M14 10a3.5 3.5 0 0 1 -7 0" />
  <path d="M14 17a3.5 3.5 0 0 0 0 -7" />
  <path d="M14 3a3.5 3.5 0 0 0 0 7" />
  <path d="M3 21l6 -6" />
</svg></div>
        <h3>Everlasting Gobstopper</h3>
        <p style="font-size:13px;margin:0 0 6px">Ça ne fond jamais. Jamais.</p>
        <p class="prix" style="font-size:22px">12,00 €</p>
        <a class="btn btn-petit" href="?page=everlasting-gobstopper">Voir la fiche</a>
      </div>
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
/* SCRIPT PRODUIT — recopié à l'identique dans toutes les fiches */
function acheterProduit(nom) {
  alert("Félicitations, vous avez peut-être trouvé un Golden Ticket !\n(Produit ajouté au panier imaginaire : " + nom + ")");
}

</script>
