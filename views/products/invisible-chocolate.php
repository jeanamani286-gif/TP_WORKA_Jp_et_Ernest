<div class="topbar"><span class="bande">★ Invisible Chocolate ★ Vous ne le verrez pas ★ Vous le sentirez ★ Interdit aux Oompa Loompas ★</span></div>

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
  <p class="fil"><a href="?page=accueil">Accueil</a> › <a href="?page=produits">Produits</a> › Invisible Chocolate</p>

  <section class="fiche-intro">
    <div class="fiche">
      <div>
        <div class="gros-visuel"><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M7.05 11.293l4.243 -4.243a2 2 0 0 1 2.828 0l2.829 2.83a2 2 0 0 1 0 2.828l-4.243 4.243a2 2 0 0 1 -2.828 0l-2.829 -2.831a2 2 0 0 1 0 -2.828z" />
  <path d="M16.243 9.172l3.086 -.772a1.5 1.5 0 0 0 .697 -2.516l-2.216 -2.217a1.5 1.5 0 0 0 -2.44 .47l-1.248 2.913" />
  <path d="M9.172 16.243l-.772 3.086a1.5 1.5 0 0 1 -2.516 .697l-2.217 -2.216a1.5 1.5 0 0 1 .47 -2.44l2.913 -1.248" />
</svg></span><span class="etiq">illustration non contractuelle (et non visible)</span></div>
        <p style="text-align:center;margin-top:12px"><span class="badge">Interdit aux Oompa Loompas</span></p>
      </div>
      <div>
        <span class="badge bleu">Mythique</span>
        <h1 class="titre" style="margin-top:8px">Invisible Chocolate</h1>
        <p class="sous-titre" style="font-size:18px;font-style:italic">« Vous ne le verrez pas. Vous le sentirez. »</p>
        <p class="prix">15,00 €</p>
        <p>Un chocolat au lait d'une intensité remarquable, dont nous avons réussi à supprimer toute trace visuelle. Le goût est intact. La preuve de son existence, non.</p>
        <p>Livré dans une boîte vide, scellée, pesant exactement 40 grammes de plus qu'elle ne devrait. Aucun remboursement possible : il faudrait d'abord retrouver le produit.</p>
        <p>
          <button class="btn btn-ticket" onclick="acheterProduit('Invisible Chocolate')">Acheter — 15,00 €</button>
          <a class="btn btn-vert" href="?page=produits">Retour au catalogue</a>
        </p>
      </div>
    </div>
  </section>

  <hr class="bonbon">

  <section style="padding-top:0">
    <div class="panel">
      <h2 class="titre">Caractéristiques</h2>
      <table class="carac">
        <tr><th>Nom du produit</th><td>Invisible Chocolate</td></tr>
        <tr><th>Catégorie</th><td>Confiseries expérimentales</td></tr>
        <tr><th>Prix</th><td>15,00 € la boîte (40 g invisibles)</td></tr>
        <tr><th>Disponibilité</th><td><span class="badge">Interdit aux Oompa Loompas</span> — vente humaine, sur demande</td></tr>
        <tr><th>Niveau de rareté</th><td><span class="badge bleu">Mythique</span></td></tr>
        <tr><th>Couleur</th><td>Aucune</td></tr>
        <tr><th>Effet secondaire connu</th><td>Transparence partielle du consommateur au-delà de 3 portions</td></tr>
        <tr><th>Référence</th><td>IC-2011-009</td></tr>
      </table>
    </div>

    <div class="panel vert">
      <h2 class="titre">Composition</h2>
      <ul>
        <li>Chocolat au lait, pigments soustraits (procédé classé)</li>
        <li>Beurre de cacao, sucre, lait entier en poudre</li>
        <li>Agent d'invisibilité : formule connue d'une seule personne, actuellement en vacances</li>
        <li>Traces possibles de vanille, de lait et de doute</li>
        <li>Ne contient ni colorant, ni apparence</li>
      </ul>
      <div class="avertissement"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M12 9v4" />
  <path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z" />
  <path d="M12 16h.01" />
</svg> Avertissement : peut rendre partiellement transparent en cas de consommation supérieure à trois portions. Ne pas conduire. Ne pas traverser une vitre. Ne pas manger devant un photographe.</div>
    </div>

    <div class="panel rose">
      <h2 class="titre">Témoignages</h2>
      <p>« Je ne sais pas si j'ai mangé quelque chose, mais je me sens délicieusement vide. » — client anonyme, 2023<br>
      « La boîte pesait lourd. C'est déjà beaucoup. » — cliente anonyme, 2024<br>
      « Je ne retrouve plus ma main gauche depuis mardi. » — client anonyme, 2025</p>
    </div>

    <div class="panel jaune faq">
      <h2 class="titre">Questions sur l'Invisible Chocolate</h2>
      <details open>
        <summary>La boîte est-elle vraiment vide ?</summary>
        <p>Elle contient 40 grammes de chocolat invisible. Nous ne pouvons pas vous le prouver, et vous ne pouvez pas le vérifier.</p>
      </details>
      <details>
        <summary>Les produits expérimentaux sont-ils garantis ?</summary>
        <p>Non. Pour ce produit précis, la garantie est elle aussi invisible. Voir <a href="?page=produits">Confiseries expérimentales</a>.</p>
      </details>
      <details>
        <summary>Que faire si un bonbon change de couleur ?</summary>
        <p>Un <a href="?page=everlasting-gobstopper">Everlasting Gobstopper</a> change de couleur normalement. Celui-ci n'en a aucune : c'est plus grave, mais c'est voulu.</p>
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
      <div class="carte">
        <div class="visuel" style="background:#c7ecf7"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M10 5h4v-2a1 1 0 0 0 -1 -1h-2a1 1 0 0 0 -1 1v2z" />
  <path d="M14 3.5c0 1.626 .507 3.212 1.45 4.537l.05 .07a8.093 8.093 0 0 1 1.5 4.694v6.199a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2v-6.2c0 -1.682 .524 -3.322 1.5 -4.693l.05 -.07a7.823 7.823 0 0 0 1.45 -4.537" />
  <path d="M7 14.803a2.4 2.4 0 0 0 1 -.803a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 1 -.805" />
</svg></div>
        <h3>Fizzy Lifting Drink</h3>
        <p style="font-size:13px;margin:0 0 6px">Buvez, flottez, touchez le plafond.</p>
        <p class="prix" style="font-size:22px">6,50 €</p>
        <a class="btn btn-petit" href="?page=fizzy-lifting-drink">Voir la fiche</a>
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
