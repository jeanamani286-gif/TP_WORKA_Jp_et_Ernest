<div class="topbar"><span class="bande">★ Everlasting Gobstopper ★ Il ne fond jamais ★ Il change de couleur le mercredi ★ Série limitée à 300 pièces par mois ★</span></div>

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
  <p class="fil"><a href="?page=accueil">Accueil</a> › <a href="?page=produits">Produits</a> › Everlasting Gobstopper</p>

  <section class="fiche-intro">
    <div class="fiche">
      <div>
        <div class="gros-visuel"><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M14 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
  <path d="M21 10a3.5 3.5 0 0 0 -7 0" />
  <path d="M14 10a3.5 3.5 0 0 1 -7 0" />
  <path d="M14 17a3.5 3.5 0 0 0 0 -7" />
  <path d="M14 3a3.5 3.5 0 0 0 0 7" />
  <path d="M3 21l6 -6" />
</svg></span></div>
        <p style="text-align:center;margin-top:12px"><span class="badge">Rupture expérimentale</span></p>
        <div class="couleurs" style="justify-content:center">
          <span class="pastille" style="background:#ff5d8f"></span>
          <span class="pastille" style="background:#ffd166"></span>
          <span class="pastille" style="background:#41e0a3"></span>
          <span class="pastille" style="background:#8ad7f2"></span>
          <span class="pastille" style="background:#b07bd8"></span>
        </div>
      </div>
      <div>
        <span class="badge jaune">Très rare</span>
        <h1 class="titre" style="margin-top:8px">Everlasting Gobstopper</h1>
        <p class="sous-titre" style="font-size:18px;font-style:italic">« Ça ne fond jamais. Jamais. »</p>
        <p class="prix">12,00 €</p>
        <p>Conçu à l'origine pour les enfants à très petit budget : on le met dans la bouche un lundi, on le retrouve intact le dimanche suivant. Sept couches de sucre dur, un cœur qui refuse de céder, et un cycle de couleurs parfaitement imprévisible.</p>
        <p>La production actuelle est suspendue : le bain de sucre de la cuve n°4 a cessé de refroidir en 1998 et personne n'a réussi à l'éteindre.</p>
        <p>
          <button class="btn btn-rose" onclick="acheterProduit('Everlasting Gobstopper')">Être prévenu du retour</button>
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
        <tr><th>Nom du produit</th><td>Everlasting Gobstopper</td></tr>
        <tr><th>Catégorie</th><td>Confiseries expérimentales</td></tr>
        <tr><th>Prix</th><td>12,00 € la pièce</td></tr>
        <tr><th>Disponibilité</th><td><span class="badge">Rupture expérimentale</span> depuis 1998</td></tr>
        <tr><th>Niveau de rareté</th><td><span class="badge jaune">Très rare</span></td></tr>
        <tr><th>Poids net</th><td>34 g (inchangé depuis 1984)</td></tr>
        <tr><th>Durée de vie</th><td>Indéterminée. Le plus ancien exemplaire connu a 42 ans.</td></tr>
        <tr><th>Référence</th><td>EG-1984-007</td></tr>
      </table>
    </div>

    <div class="panel vert">
      <h2 class="titre">Composition</h2>
      <ul>
        <li>Sucre dur compressé, 7 couches successives</li>
        <li>Colorants rotatifs (rose, jaune, vert, bleu, violet) — ordre non communiqué</li>
        <li>Agent de permanence : formule classée, même en interne</li>
        <li>Arômes : cerise, citron, menthe, « mercredi »</li>
        <li>Ne contient ni lait, ni gluten, ni fin</li>
      </ul>
      <div class="avertissement"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M12 9v4" />
  <path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z" />
  <path d="M12 16h.01" />
</svg> Avertissement : ne pas croquer. Ne pas avaler. Ne pas laisser dans une poche de pantalon pendant une lessive : la machine devient rose pendant trois ans.</div>
    </div>

    <div class="panel jaune faq">
      <h2 class="titre">Questions sur le Gobstopper</h2>
      <details open>
        <summary>Les Gobstoppers sont-ils vraiment éternels ?</summary>
        <p>Ils ne fondent pas et ne diminuent jamais de taille. Nous n'avons pas encore testé au-delà de quarante ans, donc disons : probablement.</p>
      </details>
      <details>
        <summary>Que faire si un bonbon change de couleur ?</summary>
        <p>Rien de grave. C'est sa fonction : une couleur par jour de la semaine. Posez-le et attendez le lendemain. Si c'est <em>vous</em> qui changez de couleur, contactez le <a href="?page=contact">service client</a>.</p>
      </details>
      <details>
        <summary>Peut-on le croquer ?</summary>
        <p>Physiquement oui. C'est une très mauvaise idée, pour vos dents comme pour le concept. Voir aussi la <a href="?page=faq">FAQ générale</a>.</p>
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
        <div class="visuel" style="background:#d5f2c9"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M7.5 16.5m-3.5 0a3.5 3.5 0 1 0 7 0a3.5 3.5 0 1 0 -7 0" />
  <path d="M17 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
  <path d="M9 13c.366 -2 1.866 -3.873 4.5 -5.6" />
  <path d="M17 15c-1.333 -2.333 -2.333 -5.333 -1 -9" />
  <path d="M5 6c3.667 -2.667 7.333 -2.667 11 0c-3.667 2.667 -7.333 2.667 -11 0" />
</svg></div>
        <h3>Three-Course Dinner Gum</h3>
        <p style="font-size:13px;margin:0 0 6px">Un repas complet en une gomme.</p>
        <p class="prix" style="font-size:22px">9,00 €</p>
        <a class="btn btn-petit" href="?page=three-course-dinner-gum">Voir la fiche</a>
      </div>
      <div class="carte">
        <div class="visuel" style="background:#eceff3"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M5 11a7 7 0 0 1 14 0v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-7" />
  <path d="M10 10l.01 0" />
  <path d="M14 10l.01 0" />
  <path d="M10 14a3.5 3.5 0 0 0 4 0" />
</svg></div>
        <h3>Invisible Chocolate</h3>
        <p style="font-size:13px;margin:0 0 6px">Vous ne le verrez pas. Vous le sentirez.</p>
        <p class="prix" style="font-size:22px">15,00 €</p>
        <a class="btn btn-petit" href="?page=invisible-chocolate">Voir la fiche</a>
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
