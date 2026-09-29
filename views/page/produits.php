<script type="application/ld+json" >
{
  "@context": "https://schema.org",
  "@type": "ItemList",
  "name": "Catalogue Wonka Chocolate Factory",
  "numberOfItems": 8,
  "itemListElement": [
    { "@type": "ListItem", "position": 1, "url": "https://www.wonka-chocolate-factory.example/wonka-bar.html" },
    { "@type": "ListItem", "position": 2, "url": "https://www.wonka-chocolate-factory.example/everlasting-gobstopper.html" },
    { "@type": "ListItem", "position": 3, "url": "https://www.wonka-chocolate-factory.example/fizzy-lifting-drink.html" },
    { "@type": "ListItem", "position": 4, "url": "https://www.wonka-chocolate-factory.example/three-course-dinner-gum.html" },
    { "@type": "ListItem", "position": 5, "url": "https://www.wonka-chocolate-factory.example/lickable-wallpaper.html" },
    { "@type": "ListItem", "position": 6, "url": "https://www.wonka-chocolate-factory.example/golden-egg.html" },
    { "@type": "ListItem", "position": 7, "url": "https://www.wonka-chocolate-factory.example/scrumdiddlyumptious-bar.html" },
    { "@type": "ListItem", "position": 8, "url": "https://www.wonka-chocolate-factory.example/invisible-chocolate.html" }
  ]
}
</script>



<div class="topbar"><span class="bande">★ Catalogue 2026 : 8 références ★ 2 en rupture expérimentale ★ Les prix sont en euros et en confiance ★</span></div>

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
  <p class="fil"><a href="?page=accueil">Accueil</a> › Produits</p>

  <div class="bandeau-page">
    <h1>Produits</h1>
    <p>Huit produits. Aucun n'est tout à fait normal. Tous sont délicieux, sauf peut-être le papier peint.</p>
  </div>

  <div class="filtres">
    <button class="btn btn-petit btn-vert" onclick="filtrer('tous')">Tout afficher</button>
    <button class="btn btn-petit" onclick="filtrer('barre')">Barres</button>
    <button class="btn btn-petit btn-rose" onclick="filtrer('experimentale')">Expérimental</button>
    <button class="btn btn-petit btn-bleu" onclick="filtrer('boisson')">Boissons</button>
    <button class="btn btn-petit btn-vert" onclick="filtrer('collection')">Collection</button>
  </div>

  <div class="grille" id="grille">

    <div class="carte" data-cat="barre">
      <div class="visuel" style="background:#f7d9a3"><span class="badge clignote">Nouveau</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M7.05 11.293l4.243 -4.243a2 2 0 0 1 2.828 0l2.829 2.83a2 2 0 0 1 0 2.828l-4.243 4.243a2 2 0 0 1 -2.828 0l-2.829 -2.831a2 2 0 0 1 0 -2.828z" />
  <path d="M16.243 9.172l3.086 -.772a1.5 1.5 0 0 0 .697 -2.516l-2.216 -2.217a1.5 1.5 0 0 0 -2.44 .47l-1.248 2.913" />
  <path d="M9.172 16.243l-.772 3.086a1.5 1.5 0 0 1 -2.516 .697l-2.217 -2.216a1.5 1.5 0 0 1 .47 -2.44l2.913 -1.248" />
</svg></div>
      <h3>Wonka Bar</h3>
      <p style="font-size:13px;margin:0 0 8px">La barre qui a rendu cinq enfants célèbres. Chocolat au lait, caramel mou et surprise possible.</p>
      <p class="prix">3,50 €</p>
      <a class="btn btn-petit" href="?page=wonka-bar">Voir la fiche</a>
    </div>

    <div class="carte" data-cat="experimentale">
      <div class="visuel" style="background:#f4b8d6"><span class="badge jaune">Très rare</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M14 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
  <path d="M21 10a3.5 3.5 0 0 0 -7 0" />
  <path d="M14 10a3.5 3.5 0 0 1 -7 0" />
  <path d="M14 17a3.5 3.5 0 0 0 0 -7" />
  <path d="M14 3a3.5 3.5 0 0 0 0 7" />
  <path d="M3 21l6 -6" />
</svg></div>
      <h3>Everlasting Gobstopper</h3>
      <p style="font-size:13px;margin:0 0 8px">Ça ne fond jamais. Jamais. Change de couleur le mercredi.</p>
      <p class="prix">12,00 €</p>
      <a class="btn btn-petit" href="?page=everlasting-gobstopper">Voir la fiche</a>
    </div>

    <div class="carte" data-cat="boisson">
      <div class="visuel" style="background:#c7ecf7"><span class="badge bleu">Édition limitée</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M10 5h4v-2a1 1 0 0 0 -1 -1h-2a1 1 0 0 0 -1 1v2z" />
  <path d="M14 3.5c0 1.626 .507 3.212 1.45 4.537l.05 .07a8.093 8.093 0 0 1 1.5 4.694v6.199a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2v-6.2c0 -1.682 .524 -3.322 1.5 -4.693l.05 -.07a7.823 7.823 0 0 0 1.45 -4.537" />
  <path d="M7 14.803a2.4 2.4 0 0 0 1 -.803a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 1 -.805" />
</svg></div>
      <h3>Fizzy Lifting Drink</h3>
      <p style="font-size:13px;margin:0 0 8px">Buvez, flottez, touchez le plafond. Rot obligatoire avant d'atterrir.</p>
      <p class="prix">6,50 €</p>
      <a class="btn btn-petit" href="?page=fizzy-lifting-drink">Voir la fiche</a>
    </div>

    <div class="carte" data-cat="experimentale">
      <div class="visuel" style="background:#d5f2c9"><span class="badge">Interdit aux Oompa Loompas</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M7.5 16.5m-3.5 0a3.5 3.5 0 1 0 7 0a3.5 3.5 0 1 0 -7 0" />
  <path d="M17 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
  <path d="M9 13c.366 -2 1.866 -3.873 4.5 -5.6" />
  <path d="M17 15c-1.333 -2.333 -2.333 -5.333 -1 -9" />
  <path d="M5 6c3.667 -2.667 7.333 -2.667 11 0c-3.667 2.667 -7.333 2.667 -11 0" />
</svg></div>
      <h3>Three-Course Dinner Gum</h3>
      <p style="font-size:13px;margin:0 0 8px">Tomate, bœuf, tarte aux myrtilles. En une seule gomme.</p>
      <p class="prix">9,00 €</p>
      <a class="btn btn-petit" href="?page=three-course-dinner-gum">Voir la fiche</a>
    </div>

    <div class="carte" data-cat="collection">
      <div class="visuel" style="background:#fde3b7"><span class="badge vert">Décoration</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M8 6h10a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-12" />
  <path d="M6 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
  <path d="M8 18v-12a2 2 0 1 0 -4 0v12" />
</svg></div>
      <h3>Lickable Wallpaper</h3>
      <p style="font-size:13px;margin:0 0 8px">Papier peint à lécher, motifs fruits. Rouleau de 5 mètres.</p>
      <p class="prix">24,00 €</p>
      <a class="btn btn-petit" href="?page=lickable-wallpaper">Voir la fiche</a>
    </div>

    <div class="carte" data-cat="collection">
      <div class="visuel" style="background:#ffe9a8"><span class="badge jaune">Très rare</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M19 14.083c0 4.154 -2.966 6.74 -7 6.917c-4.2 0 -7 -2.763 -7 -6.917c0 -5.538 3.5 -11.09 7 -11.083c3.5 .007 7 5.545 7 11.083z" />
</svg></div>
      <h3>Golden Egg</h3>
      <p style="font-size:13px;margin:0 0 8px">Pondu par une poule très motivée. Contient un bonbon et un rêve.</p>
      <p class="prix">89,00 €</p>
      <a class="btn btn-petit" href="?page=golden-egg">Voir la fiche</a>
    </div>

    <div class="carte" data-cat="barre">
      <div class="visuel" style="background:#e2c9f5"><span class="badge vert">Signature</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M7.05 11.293l4.243 -4.243a2 2 0 0 1 2.828 0l2.829 2.83a2 2 0 0 1 0 2.828l-4.243 4.243a2 2 0 0 1 -2.828 0l-2.829 -2.831a2 2 0 0 1 0 -2.828z" />
  <path d="M16.243 9.172l3.086 -.772a1.5 1.5 0 0 0 .697 -2.516l-2.216 -2.217a1.5 1.5 0 0 0 -2.44 .47l-1.248 2.913" />
  <path d="M9.172 16.243l-.772 3.086a1.5 1.5 0 0 1 -2.516 .697l-2.217 -2.216a1.5 1.5 0 0 1 .47 -2.44l2.913 -1.248" />
</svg></div>
      <h3>Scrumdiddlyumptious Bar</h3>
      <p style="font-size:13px;margin:0 0 8px">Le mot n'existe pas dans le dictionnaire. Le chocolat, si.</p>
      <p class="prix">5,50 €</p>
      <a class="btn btn-petit" href="?page=scrumdiddlyumptious-bar">Voir la fiche</a>
    </div>

    <div class="carte" data-cat="experimentale">
      <div class="visuel" style="background:#eceff3"><span class="badge">Mythique</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M5 11a7 7 0 0 1 14 0v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-7" />
  <path d="M10 10l.01 0" />
  <path d="M14 10l.01 0" />
  <path d="M10 14a3.5 3.5 0 0 0 4 0" />
</svg></div>
      <h3>Invisible Chocolate</h3>
      <p style="font-size:13px;margin:0 0 8px">Vous ne le verrez pas. Vous le sentirez. C'est tout le concept.</p>
      <p class="prix">15,00 €</p>
      <a class="btn btn-petit" href="?page=invisible-chocolate">Voir la fiche</a>
    </div>

  </div>

  <div class="panel jaune" style="text-align:center;margin-top:56px">
    <h2 class="titre">Une référence vous manque ?</h2>
    <p>Écrivez-nous, nous l'inventerons peut-être d'ici jeudi.</p>
    <a href="?page=contact" class="btn btn-rose">Contacter l'atelier</a>
    <a href="?page=produits" class="btn btn-bleu">Voir le laboratoire</a>
  </div>

  <div class="avertissement"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M12 9v4" />
  <path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z" />
  <path d="M12 16h.01" />
</svg> Avertissement du laboratoire : certains produits de cette page peuvent modifier la couleur, la taille, la flottabilité ou la visibilité du consommateur. La direction décline toute responsabilité pour les transformations supérieures à 4 heures.</div>

  <hr class="bonbon" style="margin-top:64px">

  <div class="hero-riviere">
    <h2>La rivière de chocolat vous attend</h2>
    <p>Ce que vous voyez ici n'est qu'une photo. En vrai, ça coule, ça sent le caramel et c'est interdit de s'en approcher à moins d'un mètre. La visite vaut le détour.</p>
    <a href="?page=visite-usine" class="btn btn-ticket">Réserver ma visite</a>
  </div>

  <div class="livraison">
    <h2 class="titre">La livraison en 4 étapes</h2>
    <p class="sous-titre">Les cas particuliers (étranger, plafonds, pigeons) sont traités dans la <a href="?page=faq">FAQ</a>.</p>
    <div class="livraison-bloc">
      <div class="etapes">
        <div class="etape">
          <div class="etape-entete"><span class="n">1</span><span class="ico"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
  <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
  <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
  <path d="M17 17h-11v-14h-2" />
  <path d="M6 5l14 1l-1 7h-13" />
</svg></span></div>
          <h3>Passez commande</h3>
          <p>Avec le bouton « Acheter » de chaque fiche produit, ou par pigeon voyageur si vous avez un pigeon.</p>
        </div>
        <div class="etape">
          <div class="etape-entete"><span class="n">2</span><span class="ico"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
  <path d="M3 8m0 1a1 1 0 0 1 1 -1h16a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-16a1 1 0 0 1 -1 -1z" />
  <path d="M12 8l0 13" />
  <path d="M19 12v7a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-7" />
  <path d="M7.5 8a2.5 2.5 0 0 1 0 -5a4.8 8 0 0 1 4.5 5a4.8 8 0 0 1 4.5 -5a2.5 2.5 0 0 1 0 5" />
</svg></span></div>
          <h3>On emballe</h3>
          <p>Un Oompa Loompa prépare votre colis en chantant. Le chant est compris dans les frais de port.</p>
        </div>
        <div class="etape">
          <div class="etape-entete"><span class="n">3</span><span class="ico"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
  <path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
  <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
  <path d="M5 17h-2v-4m-1 -8h11v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" />
  <path d="M3 9l4 0" />
</svg></span></div>
          <h3>Le camion part</h3>
          <p>Départ quotidien de la 3<sup>e</sup> cheminée à 9h pile. Le chocolat voyage au frais, le caramel dehors.</p>
        </div>
        <div class="etape">
          <div class="etape-entete"><span class="n">4</span><span class="ico"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
  <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
  <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
  <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
</svg></span></div>
          <h3>Vous goûtez</h3>
          <p>Dès la réception. Signez après avoir goûté, c'est plus poli et ça évite les disputes.</p>
        </div>
      </div>
      <div class="livraison-photos">
        <img class="deco-boutique" src="assets/images/boutique-tablette.jpg" alt="" aria-hidden="true" width="1200" height="900">
        <figure class="livraison-photo">
          <img src="assets/images/livraison-camion.jpg" alt="Le camion de livraison de la chocolaterie Wonka" width="1200" height="903">
          <figcaption>Le camion de livraison</figcaption>
        </figure>
      </div>
    </div>
  </div>

  <div class="panel vert faq">
    <h2 class="titre">On nous demande souvent…</h2>
    <p class="sous-titre">Extrait de la <a href="?page=faq">FAQ générale</a>, recopié ici pour votre confort.</p>
    <details open>
      <summary>Les produits contiennent-ils des noix ?</summary>
      <p>Certains oui. La <a href="?page=scrumdiddlyumptious-bar">Scrumdiddlyumptious Bar</a> contient des noix de pécan caramélisées. En cas de doute, ne goûtez pas les murs.</p>
    </details>
    <details>
      <summary>Peut-on commander depuis l'étranger ?</summary>
      <p>Oui, sauf pour la <a href="?page=fizzy-lifting-drink">Fizzy Lifting Drink</a> : les boissons gazeuses qui font flotter sont interdites dans les avions, les trains et la plupart des immeubles.</p>
    </details>
    <details>
      <summary>Que faire si un bonbon change de couleur ?</summary>
      <p>Rien de grave. L'<a href="?page=everlasting-gobstopper">Everlasting Gobstopper</a> change de couleur chaque jour de la semaine, c'est sa fonction. Posez-le et attendez le lendemain.</p>
    </details>
    <details>
      <summary>Les produits expérimentaux sont-ils garantis ?</summary>
      <p>Non. Ils sont observés, documentés, parfois chantés, mais jamais garantis. Si vous devenez violet, le service après-vente vous proposera un jus de citron et une visite guidée. Voir les <a href="?page=produits">Confiseries expérimentales</a>.</p>
    </details>
  </div>
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

function filtrer(cat) {
  var cartes = document.querySelectorAll('#grille .carte');
  for (var i = 0; i < cartes.length; i++) {
    if (cat === 'tous' || cartes[i].getAttribute('data-cat') === cat) {
      cartes[i].style.display = 'block';
    } else {
      cartes[i].style.display = 'none';
    }
  }
  if (cat === 'tous') {
    alert('Affichage des 8 références du catalogue Wonka.');
  }
}
</script>
