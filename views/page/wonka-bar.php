<div class="topbar"><span class="bande">★ Wonka Bar ★ 5 Golden Tickets cachés dans la production annuelle ★ Ouvrez lentement, respirez, regardez ★</span></div>

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
  <p class="fil"><a href="?page=accueil">Accueil</a> › <a href="?page=produits">Produits</a> › Wonka Bar</p>

  <section class="fiche-intro">
    <div class="fiche">
      <div>
        <div class="gros-visuel"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M7.05 11.293l4.243 -4.243a2 2 0 0 1 2.828 0l2.829 2.83a2 2 0 0 1 0 2.828l-4.243 4.243a2 2 0 0 1 -2.828 0l-2.829 -2.831a2 2 0 0 1 0 -2.828z" />
  <path d="M16.243 9.172l3.086 -.772a1.5 1.5 0 0 0 .697 -2.516l-2.216 -2.217a1.5 1.5 0 0 0 -2.44 .47l-1.248 2.913" />
  <path d="M9.172 16.243l-.772 3.086a1.5 1.5 0 0 1 -2.516 .697l-2.217 -2.216a1.5 1.5 0 0 1 .47 -2.44l2.913 -1.248" />
</svg></div>
        <p style="text-align:center;margin-top:12px"><span class="badge vert">Disponible</span></p>
      </div>
      <div>
        <span class="badge clignote">Nouveau</span>
        <h1 class="titre" style="margin-top:8px">Wonka Bar</h1>
        <p class="sous-titre" style="font-size:18px;font-style:italic">« La barre qui a rendu cinq enfants célèbres. »</p>
        <p class="prix">3,50 €</p>
        <p>Chocolat au lait coulé sur un lit de caramel mou, avec une couche de nougatine qui craque juste assez. Emballée à la main, pliée de travers exprès : c'est la signature de l'atelier.</p>
        <p>C'est aussi, accessoirement, le support officiel du <a href="?page=golden-ticket">Golden Ticket</a>. Sur environ 8 millions de barres, cinq contiennent un ticket doré. Les statistiques sont contre vous. Le goût, lui, est pour vous.</p>
        <p>
          <button class="btn btn-ticket" onclick="acheterProduit('Wonka Bar')">Acheter — 3,50 €</button>
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
        <tr><th>Nom du produit</th><td>Wonka Bar</td></tr>
        <tr><th>Catégorie</th><td>Barres classiques</td></tr>
        <tr><th>Prix</th><td>3,50 € l'unité — 32 € le carton de 10</td></tr>
        <tr><th>Disponibilité</th><td><span class="badge vert">Disponible</span> toute l'année</td></tr>
        <tr><th>Niveau de rareté</th><td><span class="badge jaune">Courante</span> (sauf pour les 5 exemplaires à ticket)</td></tr>
        <tr><th>Poids net</th><td>62 g</td></tr>
        <tr><th>Conservation</th><td>18 mois, à l'abri de la chaleur et des enfants pressés</td></tr>
        <tr><th>Référence</th><td>WB-1971-001</td></tr>
      </table>
    </div>

    <div class="panel vert">
      <h2 class="titre">Composition</h2>
      <ul>
        <li>Chocolat au lait 58 % (cacao, sucre, lait entier en poudre, beurre de cacao)</li>
        <li>Caramel mou 22 % (sucre, crème, une pincée de sel, un soupçon d'optimisme)</li>
        <li>Nougatine croustillante 14 %</li>
        <li>Extrait de vanille, émulsifiant, arôme naturel de « dimanche après-midi »</li>
        <li>Peut contenir : traces de fruits à coque, de lait, et d'espoir</li>
      </ul>
      <div class="avertissement"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M12 9v4" />
  <path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z" />
  <path d="M12 16h.01" />
</svg> Avertissement : ouvrir l'emballage doucement. Un Golden Ticket déchiré reste un Golden Ticket, mais il est moins joli à encadrer.</div>
    </div>

    <div class="panel jaune faq">
      <h2 class="titre">Questions sur la Wonka Bar</h2>
      <details open>
        <summary>Combien de Golden Tickets par an ?</summary>
        <p>Cinq. Pas un de plus. Ils sont répartis dans la production annuelle et personne à l'usine ne sait dans quelles barres. Voir la page <a href="?page=golden-ticket">Golden Ticket</a>.</p>
      </details>
      <details>
        <summary>Les produits contiennent-ils des noix ?</summary>
        <p>Certains oui. La <a href="?page=scrumdiddlyumptious-bar">Scrumdiddlyumptious Bar</a> contient des noix de pécan caramélisées. La Wonka Bar peut en contenir des traces issues de la même chaîne.</p>
      </details>
      <details>
        <summary>Peut-on commander depuis l'étranger ?</summary>
        <p>Oui, la Wonka Bar voyage très bien, contrairement à la <a href="?page=fizzy-lifting-drink">Fizzy Lifting Drink</a>, interdite dans les avions et les trains.</p>
      </details>
    </div>

    <h2 class="titre">Vous aimerez peut-être aussi</h2>
    <p class="sous-titre">Suggestions codées à la main, comme tout le reste.</p>
    <div class="grille">
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
        <div class="visuel" style="background:#ffe9a8"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M19 14.083c0 4.154 -2.966 6.74 -7 6.917c-4.2 0 -7 -2.763 -7 -6.917c0 -5.538 3.5 -11.09 7 -11.083c3.5 .007 7 5.545 7 11.083z" />
</svg></div>
        <h3>Golden Egg</h3>
        <p style="font-size:13px;margin:0 0 6px">Pondu par une poule très motivée.</p>
        <p class="prix" style="font-size:22px">89,00 €</p>
        <a class="btn btn-petit" href="?page=golden-egg">Voir la fiche</a>
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
