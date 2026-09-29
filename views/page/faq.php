

<div class="topbar"><span class="bande">★ 10 questions, 10 réponses, 0 garantie ★ Si votre question n'est pas ici, elle est probablement illégale ★</span></div>

<header class="site">
  <div class="wrap">
    <p class="logo"><a href="index.html" aria-label="Wonka Chocolate Factory - Accueil"><img src="logo-wonka.png" alt="Wonka Chocolate Factory" width="2000" height="1125"></a></p>
    <input type="checkbox" id="menu-toggle" class="menu-toggle">
    <label for="menu-toggle" class="burger" aria-label="Ouvrir le menu"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M4 6l16 0" />
  <path d="M4 12l16 0" />
  <path d="M4 18l16 0" />
</svg></label>
    <nav class="main">
      <a href="index.html">Accueil</a>
      <a href="produits.html">Produits</a>
      <a href="visite-usine.html">Visiter l'usine</a>
      <a href="histoire.html">Notre histoire</a>
      <a href="faq.html">FAQ</a>
      <a href="contact.html">Contact</a>
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
  <p class="fil"><a href="index.html">Accueil</a> › FAQ</p>

  <div class="bandeau-page">
    <h1>Foire aux questions</h1>
    <p>Dix questions que l'on nous pose chaque semaine, dans cet ordre, depuis 1971.</p>
  </div>

  <section class="panel jaune faq-atelier" aria-labelledby="titre-atelier">
    <figure class="faq-atelier-photo">
      <img src="chapeau-confiserie.png" alt="Un chapeau de confiserie dans l'univers Wonka">
    </figure>
    <div>
      <span class="badge jaune">Dans les coulisses</span>
      <h2 class="titre" id="titre-atelier">Des réponses préparées avec soin</h2>
      <p>Chaque question est testée, goûtée et parfois posée à un Oompa Loompa avant d'arriver ici. Voici ce que vous pouvez attendre de notre équipe :</p>
      <div class="faq-points">
        <div class="faq-point">
          <span class="faq-icone" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span>
          <span>Réponse sous<br><strong>3 à 5 jours</strong></span>
        </div>
        <div class="faq-point">
          <span class="faq-icone" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h16"/><path d="M12 4v16"/><circle cx="12" cy="12" r="9"/></svg></span>
          <span>Réponses<br><strong>sans jargon</strong></span>
        </div>
        <div class="faq-point">
          <span class="faq-icone" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3l2.8 5.7L21 9.6l-4.5 4.4 1.1 6.2-5.6-2.9-5.6 2.9 1.1-6.2L3 9.6l6.2-.9L12 3z"/></svg></span>
          <span>Une pointe de<br><strong>magie Wonka</strong></span>
        </div>
      </div>
      <a href="contact.html" class="btn btn-rose">Contacter le service client</a>
    </div>
  </section>

  <div class="panel vert faq-contact">
    <h2 class="titre">Votre question n'est pas là ?</h2>
    <p>Écrivez-nous. Nous répondons sous 3 à 5 jours ouvrés, sauf si une expérience tourne mal.</p>
    <a href="contact.html" class="btn btn-bleu">Nous écrire</a>
  </div>

  <hr class="bonbon">

  <div class="boite-recherche">
    <label for="q" style="font-weight:bold">Filtrer les questions : </label>
    <input type="text" id="q" onkeyup="filtrerFaq()" placeholder="ex. noix, ticket, plafond…">
    <p id="compte" style="font-size:12px;margin:8px 0 0">10 questions affichées</p>
  </div>

  <div class="panel faq" id="liste-faq">

    <details class="item">
      <summary>1. Peut-on visiter l'usine sans Golden Ticket ?</summary>
      <p class="rep">Non. Absolument non. L'usine est verrouillée, et le gardien est très poli mais très ferme. Les rares exceptions sont décrites sur la page <a href="visite-usine.html">Visiter l'usine</a>.</p>
    </details>

    <details class="item">
      <summary>2. Les Gobstoppers sont-ils vraiment éternels ?</summary>
      <p class="rep">Ils ne fondent pas. L'<a href="everlasting-gobstopper.html">Everlasting Gobstopper</a> change de couleur chaque jour de la semaine et ne diminue jamais de taille. Nous n'avons pas encore testé au-delà de quarante ans, donc disons : probablement.</p>
    </details>

    <details class="item">
      <summary>3. Les boissons Fizzy Lifting sont-elles dangereuses ?</summary>
      <p class="rep">Elles font flotter. Le danger vient des plafonds, des ventilateurs et des fenêtres ouvertes, pas de la boisson elle-même. Lisez la fiche de la <a href="fizzy-lifting-drink.html">Fizzy Lifting Drink</a> avant toute consommation, surtout si vous mesurez plus d'1,40 m.</p>
    </details>

    <details class="item">
      <summary>4. Les produits contiennent-ils des noix ?</summary>
      <p class="rep">Certains oui. La <a href="scrumdiddlyumptious-bar.html">Scrumdiddlyumptious Bar</a> contient des noix de pécan caramélisées, et le <a href="golden-egg.html">Golden Egg</a> peut en contenir des traces. En cas de doute, ne goûtez pas les murs.</p>
    </details>

    <details class="item">
      <summary>5. Peut-on commander depuis l'étranger ?</summary>
      <p class="rep">Oui, sauf pour la <a href="fizzy-lifting-drink.html">Fizzy Lifting Drink</a> : les boissons gazeuses qui font flotter sont interdites dans les avions, les trains et la plupart des immeubles. Le <a href="lickable-wallpaper.html">papier peint à lécher</a> voyage bien, lui.</p>
    </details>

    <details class="item">
      <summary>6. Peut-on visiter l'usine avec des enfants ?</summary>
      <p class="rep">C'est même l'objectif : cinq enfants, pas un de plus. Chaque enfant doit être accompagné d'un adulte responsable de son calme. Les adultes trop enthousiastes sont invités à rester dans le hall.</p>
    </details>

    <details class="item">
      <summary>7. Où trouver un Golden Ticket ?</summary>
      <p class="rep">Dans une <a href="wonka-bar.html">Wonka Bar</a> ou dans un <a href="golden-egg.html">Golden Egg</a>. Cinq tickets par an, jamais six.</p>
    </details>

    <details class="item">
      <summary>8. Les produits expérimentaux sont-ils garantis ?</summary>
      <p class="rep">Non. Ils sont observés, documentés, parfois chantés, mais jamais garantis. Si vous devenez violet, le service après-vente vous proposera un jus de citron et une visite guidée. Voir <a href="confiseries-experimentales.html">Confiseries expérimentales</a>.</p>
    </details>

    <details class="item">
      <summary>9. Que faire si un bonbon change de couleur ?</summary>
      <p class="rep">Rien de grave. L'<a href="everlasting-gobstopper.html">Everlasting Gobstopper</a> change de couleur chaque jour de la semaine, c'est sa fonction. Posez-le et attendez le lendemain. Si c'est <em>vous</em> qui changez de couleur, contactez le <a href="contact.html">service client</a> immédiatement.</p>
    </details>

    <details class="item">
      <summary>10. Peut-on travailler à l'usine ?</summary>
      <p class="rep">Oui. Nous recrutons des goûteurs, des polisseurs de bonbons et des chanteurs de couloir. Le paiement en fèves de cacao est réservé aux Oompa Loompas. Toutes les offres sont sur la page <a href="recrutement.html">Travailler à l'usine</a>.</p>
    </details>

  </div>
</div>
