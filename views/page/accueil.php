
<body>

<div class="topbar"><span class="bande">★ Bienvenue à la Wonka Chocolate Factory ★ Il reste 5 Golden Tickets cachés cette année ★ Livraison par pigeons entraînés ★ Ni repris, ni échangé, ni remboursé en bonbons ★ Le service expédition chante pendant le travail ★</span></div>

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

  <div class="accroche">
    <div>
      <span class="sur-titre">Usine ouverte depuis 1971</span>
      <h1>La chocolaterie<br>la plus <em>étrange</em><br>du monde.</h1>
      <p class="lead">Du chocolat qui fond dans le bon sens, des bonbons qui ne fondent jamais, des boissons qui vous font toucher le plafond. Tout est fabriqué à la main par des personnes très petites et très motivées.</p>
      <p>
        <a href="produits.html" class="btn btn-vert">Voir les chocolats</a>
      </p>
    </div>
    <div>
      <div class="usine-visuels">
        <img class="usine-fond" src="interieur-usine.jpg" alt="Intérieur de la chocolaterie Wonka" width="3000" height="2000">
        <figure class="usine-photo">
          <img src="exterieur-usine.png" alt="Façade extérieure de la Wonka Chocolate Factory" width="565" height="353">
          <figcaption>La façade officielle</figcaption>
        </figure>
      </div>
    </div>
  </div>

  <div class="tapis" aria-hidden="true"><div class="bande-c" id="tapis"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M7.05 11.293l4.243 -4.243a2 2 0 0 1 2.828 0l2.829 2.83a2 2 0 0 1 0 2.828l-4.243 4.243a2 2 0 0 1 -2.828 0l-2.829 -2.831a2 2 0 0 1 0 -2.828z" />
  <path d="M16.243 9.172l3.086 -.772a1.5 1.5 0 0 0 .697 -2.516l-2.216 -2.217a1.5 1.5 0 0 0 -2.44 .47l-1.248 2.913" />
  <path d="M9.172 16.243l-.772 3.086a1.5 1.5 0 0 1 -2.516 .697l-2.217 -2.216a1.5 1.5 0 0 1 .47 -2.44l2.913 -1.248" />
</svg> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M14 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
  <path d="M21 10a3.5 3.5 0 0 0 -7 0" />
  <path d="M14 10a3.5 3.5 0 0 1 -7 0" />
  <path d="M14 17a3.5 3.5 0 0 0 0 -7" />
  <path d="M14 3a3.5 3.5 0 0 0 0 7" />
  <path d="M3 21l6 -6" />
</svg> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M14 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
  <path d="M21 10a3.5 3.5 0 0 0 -7 0" />
  <path d="M14 10a3.5 3.5 0 0 1 -7 0" />
  <path d="M14 17a3.5 3.5 0 0 0 0 -7" />
  <path d="M14 3a3.5 3.5 0 0 0 0 7" />
  <path d="M3 21l6 -6" />
</svg> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M3 20h18v-8a3 3 0 0 0 -3 -3h-12a3 3 0 0 0 -3 3v8z" />
  <path d="M3 14.803c.312 .135 .654 .204 1 .197a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1c.35 .007 .692 -.062 1 -.197" />
  <path d="M12 4l1.465 1.638a2 2 0 1 1 -3.015 .099l1.55 -1.737z" />
</svg> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path stroke="none" d="M0 0h24v24H0z" />
  <path d="M8 13v.01" />
  <path d="M12 17v.01" />
  <path d="M12 12v.01" />
  <path d="M16 14v.01" />
  <path d="M11 8v.01" />
  <path d="M13.148 3.476l2.667 1.104a4 4 0 0 0 4.656 6.14l.053 .132a3 3 0 0 1 0 2.296q -.745 1.18 -1.024 1.852q -.283 .684 -.66 2.216a3 3 0 0 1 -1.624 1.623q -1.572 .394 -2.216 .661q -.712 .295 -1.852 1.024a3 3 0 0 1 -2.296 0q -1.203 -.754 -1.852 -1.024q -.707 -.292 -2.216 -.66a3 3 0 0 1 -1.623 -1.624q -.397 -1.577 -.661 -2.216q -.298 -.718 -1.024 -1.852a3 3 0 0 1 0 -2.296q .719 -1.116 1.024 -1.852q .257 -.62 .66 -2.216a3 3 0 0 1 1.624 -1.623q 1.547 -.384 2.216 -.661q .687 -.285 1.852 -1.024a3 3 0 0 1 2.296 0" />
</svg> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M12 21.5v-4.5" />
  <path d="M8 17h8v-10a4 4 0 1 0 -8 0v10z" />
  <path d="M8 10.5l8 -3.5" />
  <path d="M8 14.5l8 -3.5" />
</svg> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M7.05 11.293l4.243 -4.243a2 2 0 0 1 2.828 0l2.829 2.83a2 2 0 0 1 0 2.828l-4.243 4.243a2 2 0 0 1 -2.828 0l-2.829 -2.831a2 2 0 0 1 0 -2.828z" />
  <path d="M16.243 9.172l3.086 -.772a1.5 1.5 0 0 0 .697 -2.516l-2.216 -2.217a1.5 1.5 0 0 0 -2.44 .47l-1.248 2.913" />
  <path d="M9.172 16.243l-.772 3.086a1.5 1.5 0 0 1 -2.516 .697l-2.217 -2.216a1.5 1.5 0 0 1 .47 -2.44l2.913 -1.248" />
</svg> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M14 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
  <path d="M21 10a3.5 3.5 0 0 0 -7 0" />
  <path d="M14 10a3.5 3.5 0 0 1 -7 0" />
  <path d="M14 17a3.5 3.5 0 0 0 0 -7" />
  <path d="M14 3a3.5 3.5 0 0 0 0 7" />
  <path d="M3 21l6 -6" />
</svg> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M14 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
  <path d="M21 10a3.5 3.5 0 0 0 -7 0" />
  <path d="M14 10a3.5 3.5 0 0 1 -7 0" />
  <path d="M14 17a3.5 3.5 0 0 0 0 -7" />
  <path d="M14 3a3.5 3.5 0 0 0 0 7" />
  <path d="M3 21l6 -6" />
</svg> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M3 20h18v-8a3 3 0 0 0 -3 -3h-12a3 3 0 0 0 -3 3v8z" />
  <path d="M3 14.803c.312 .135 .654 .204 1 .197a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1c.35 .007 .692 -.062 1 -.197" />
  <path d="M12 4l1.465 1.638a2 2 0 1 1 -3.015 .099l1.55 -1.737z" />
</svg> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path stroke="none" d="M0 0h24v24H0z" />
  <path d="M8 13v.01" />
  <path d="M12 17v.01" />
  <path d="M12 12v.01" />
  <path d="M16 14v.01" />
  <path d="M11 8v.01" />
  <path d="M13.148 3.476l2.667 1.104a4 4 0 0 0 4.656 6.14l.053 .132a3 3 0 0 1 0 2.296q -.745 1.18 -1.024 1.852q -.283 .684 -.66 2.216a3 3 0 0 1 -1.624 1.623q -1.572 .394 -2.216 .661q -.712 .295 -1.852 1.024a3 3 0 0 1 -2.296 0q -1.203 -.754 -1.852 -1.024q -.707 -.292 -2.216 -.66a3 3 0 0 1 -1.623 -1.624q -.397 -1.577 -.661 -2.216q -.298 -.718 -1.024 -1.852a3 3 0 0 1 0 -2.296q .719 -1.116 1.024 -1.852q .257 -.62 .66 -2.216a3 3 0 0 1 1.624 -1.623q 1.547 -.384 2.216 -.661q .687 -.285 1.852 -1.024a3 3 0 0 1 2.296 0" />
</svg> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M12 21.5v-4.5" />
  <path d="M8 17h8v-10a4 4 0 1 0 -8 0v10z" />
  <path d="M8 10.5l8 -3.5" />
  <path d="M8 14.5l8 -3.5" />
</svg> </div></div>
</div>

<section>
  <div class="wrap">
    <div class="panel violet reveal">
      <div class="chiffres-entete">
        <div>
          <h2 class="titre" style="margin-bottom:2px">L'usine en quelques chiffres</h2>
          <p class="sous-titre" style="margin:0">Chiffres vérifiés une fois, en 1974. Recomptage 2026 en cours.</p>
        </div>
        <span class="badge vert">Rapport annuel</span>
      </div>
<div class="chiffres">
        <div class="chiffre">
          <span class="pastille" style="background:#ddf3fd"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
<path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
  <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
  <path d="M16 3.13a4 4 0 0 1 0 7.75" />
  <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
          </svg></span>
          <span class="nb" data-cible="5">0</span>
          <small>visiteurs par an</small>
        </div>
        <div class="chiffre">
          <span class="pastille" style="background:#ffe1ee"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
<path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
  <path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1" />
  <path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
  <path d="M17 10h2a2 2 0 0 1 2 2v1" />
  <path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
  <path d="M3 13v-1a2 2 0 0 1 2 -2h2" />
          </svg></span>
          <span class="nb" data-cible="167">0</span>
          <small>Oompa Loompas</small>
        </div>
        <div class="chiffre">
          <span class="pastille" style="background:#fff3c9"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
<path d="M14.7 13.5c-1.1 -2 -1.441 -2.5 -2.7 -2.5c-1.259 0 -1.736 .755 -2.836 2.747c-.942 1.703 -2.846 1.845 -3.321 3.291c-.097 .265 -.145 .677 -.143 .962c0 1.176 .787 2 1.8 2c1.259 0 3 -1 4.5 -1s3.241 1 4.5 1c1.013 0 1.8 -.823 1.8 -2c0 -.285 -.049 -.697 -.146 -.962c-.475 -1.451 -2.512 -1.835 -3.454 -3.538z" />
  <path d="M20.188 8.082a1.039 1.039 0 0 0 -.406 -.082h-.015c-.735 .012 -1.56 .75 -1.993 1.866c-.519 1.335 -.28 2.7 .538 3.052c.129 .055 .267 .082 .406 .082c.739 0 1.575 -.742 2.011 -1.866c.516 -1.335 .273 -2.7 -.54 -3.052z" />
  <path d="M9.474 9c.055 0 .109 0 .163 -.011c.944 -.128 1.533 -1.346 1.32 -2.722c-.203 -1.297 -1.047 -2.267 -1.932 -2.267c-.055 0 -.109 0 -.163 .011c-.944 .128 -1.533 1.346 -1.32 2.722c.204 1.293 1.048 2.267 1.933 2.267z" />
  <path d="M16.456 6.733c.214 -1.376 -.375 -2.594 -1.32 -2.722a1.164 1.164 0 0 0 -.162 -.011c-.885 0 -1.728 .97 -1.93 2.267c-.214 1.376 .375 2.594 1.32 2.722c.054 .007 .108 .011 .162 .011c.885 0 1.73 -.974 1.93 -2.267z" />
  <path d="M5.69 12.918c.816 -.352 1.054 -1.719 .536 -3.052c-.436 -1.124 -1.271 -1.866 -2.009 -1.866c-.14 0 -.277 .027 -.407 .082c-.816 .352 -1.054 1.719 -.536 3.052c.436 1.124 1.271 1.866 2.009 1.866c.14 0 .277 -.027 .407 -.082z" />
          </svg></span>
          <span class="nb" data-cible="40">0</span>
          <small>écureuils dressés</small>
        </div>
        <div class="chiffre">
          <span class="pastille" style="background:#defaf0"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
<path d="M14 4h6v6h-6z" />
  <path d="M4 14h6v6h-6z" />
  <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
  <path d="M7 7m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
              </svg></span>
                  <span class="nb" data-cible="12">0</span>
                  <small>catégories de produits</small>
        </div>
      </div>
      <p class="note-chiffres"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
  <path d="M5 12l5 5l10 -10" />
</svg>Données auditées par un comité indépendant d'Oompa Loompas — méthodologie non communiquée.</p>
    </div>
  </div>
</section>

<section style="padding:0 0 44px">
  <div class="wrap">
    <div class="hero-riviere reveal">
      <h2>La rivière de chocolat vous attend</h2>
      <p>Un fleuve entièrement comestible, mélangé à la cascade, que vous aurez l'interdiction formelle de goûter. C'est tout l'intérêt de venir le voir en vrai.</p>
      <a href="visite-usine.html" class="btn btn-ticket">Réserver ma visite</a>
    </div>
  </div>
</section>

<section style="padding-top:0">
  <div class="wrap">
    <h2 class="titre">Nos best-sellers</h2>
    <p class="sous-titre">Les quatre produits que l'on nous réclame le plus (et que l'on refuse parfois de vendre).</p>
    <div class="grille">
      <div class="carte reveal">
        <div class="visuel" style="background:#f7d9a3"><span class="badge clignote">Nouveau</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M7.05 11.293l4.243 -4.243a2 2 0 0 1 2.828 0l2.829 2.83a2 2 0 0 1 0 2.828l-4.243 4.243a2 2 0 0 1 -2.828 0l-2.829 -2.831a2 2 0 0 1 0 -2.828z" />
  <path d="M16.243 9.172l3.086 -.772a1.5 1.5 0 0 0 .697 -2.516l-2.216 -2.217a1.5 1.5 0 0 0 -2.44 .47l-1.248 2.913" />
  <path d="M9.172 16.243l-.772 3.086a1.5 1.5 0 0 1 -2.516 .697l-2.217 -2.216a1.5 1.5 0 0 1 .47 -2.44l2.913 -1.248" />
</svg></div>
        <h3>Wonka Bar</h3>
        <p style="font-size:13px;margin:0 0 8px">La barre qui a rendu cinq enfants célèbres.</p>
        <p class="prix">3,50 €</p>
        <a class="btn btn-petit" href="wonka-bar.html">Voir la fiche</a>
      </div>
      <div class="carte reveal">
        <div class="visuel" style="background:#f4b8d6"><span class="badge jaune">Très rare</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M14 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
  <path d="M21 10a3.5 3.5 0 0 0 -7 0" />
  <path d="M14 10a3.5 3.5 0 0 1 -7 0" />
  <path d="M14 17a3.5 3.5 0 0 0 0 -7" />
  <path d="M14 3a3.5 3.5 0 0 0 0 7" />
  <path d="M3 21l6 -6" />
</svg></div>
        <h3>Everlasting Gobstopper</h3>
        <p style="font-size:13px;margin:0 0 8px">Ça ne fond jamais. Jamais.</p>
        <p class="prix">12,00 €</p>
        <a class="btn btn-petit" href="everlasting-gobstopper.html">Voir la fiche</a>
      </div>
      <div class="carte reveal">
        <div class="visuel" style="background:#c7ecf7"><span class="badge bleu">Édition limitée</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M10 5h4v-2a1 1 0 0 0 -1 -1h-2a1 1 0 0 0 -1 1v2z" />
  <path d="M14 3.5c0 1.626 .507 3.212 1.45 4.537l.05 .07a8.093 8.093 0 0 1 1.5 4.694v6.199a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2v-6.2c0 -1.682 .524 -3.322 1.5 -4.693l.05 -.07a7.823 7.823 0 0 0 1.45 -4.537" />
  <path d="M7 14.803a2.4 2.4 0 0 0 1 -.803a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 1 -.805" />
</svg></div>
        <h3>Fizzy Lifting Drink</h3>
        <p style="font-size:13px;margin:0 0 8px">Buvez, flottez, touchez le plafond.</p>
        <p class="prix">6,50 €</p>
        <a class="btn btn-petit" href="fizzy-lifting-drink.html">Voir la fiche</a>
      </div>
      <div class="carte reveal">
        <div class="visuel" style="background:#e2c9f5"><span class="badge vert">Signature</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em">
  <path d="M14 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
  <path d="M21 10a3.5 3.5 0 0 0 -7 0" />
  <path d="M14 10a3.5 3.5 0 0 1 -7 0" />
  <path d="M14 17a3.5 3.5 0 0 0 0 -7" />
  <path d="M14 3a3.5 3.5 0 0 0 0 7" />
  <path d="M3 21l6 -6" />
</svg></div>
        <h3>Scrumdiddlyumptious Bar</h3>
        <p style="font-size:13px;margin:0 0 8px">Le mot n'existe pas. Le chocolat si.</p>
        <p class="prix">5,50 €</p>
        <a class="btn btn-petit" href="scrumdiddlyumptious-bar.html">Voir la fiche</a>
      </div>
    </div>
    <p style="text-align:center;margin-top:26px"><a href="produits.html" class="btn btn-rose">Voir les 8 produits du catalogue</a></p>
    <hr class="bonbon" style="margin-top:64px">
  </div>
</section>

<section style="padding:0 0 80px">
  <div class="wrap">
    <h2 class="titre reveal">Visiter l'usine en 4 étapes</h2>
    <p class="sous-titre reveal">Détail complet sur la page <a href="visite-usine.html">Visiter l'usine</a>.</p>
    <div class="visite-bloc reveal">
      <div class="etapes">
        <div class="etape">
          <div class="etape-entete"><span class="n">1</span><span class="ico"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
  <path d="M15 5l0 2" />
  <path d="M15 11l0 2" />
  <path d="M15 17l0 2" />
  <path d="M5 5h14a2 2 0 0 1 2 2v3a2 2 0 0 0 0 4v3a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-3a2 2 0 0 0 0 -4v-3a2 2 0 0 1 2 -2" />
</svg></span></div>
          <h3 style="margin:0 0 6px;font-size:19px">Trouver un ticket</h3>
          <p style="font-size:13px;margin:0">Dans une <a href="wonka-bar.html">Wonka Bar</a> ou dans un <a href="golden-egg.html">Golden Egg</a>. Jamais ailleurs, et surtout pas sur internet.</p>
        </div>
        <div class="etape">
          <div class="etape-entete"><span class="n">2</span><span class="ico"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
  <path d="M20 17v-12c0 -1.121 -.879 -2 -2 -2s-2 .879 -2 2v12l2 2l2 -2z" />
  <path d="M16 7h4" />
  <path d="M18 19h-13a2 2 0 1 1 0 -4h4a2 2 0 1 0 0 -4h-3" />
</svg></span></div>
          <h3 style="margin:0 0 6px;font-size:19px">Signer le contrat</h3>
          <p style="font-size:13px;margin:0">47 pages. La page 12 contient une clause sur les plafonds.</p>
        </div>
        <div class="etape">
          <div class="etape-entete"><span class="n">3</span><span class="ico"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
  <path d="M8 13v-7.5a1.5 1.5 0 0 1 3 0v6.5" />
  <path d="M11 5.5v-2a1.5 1.5 0 1 1 3 0v8.5" />
  <path d="M14 5.5a1.5 1.5 0 0 1 3 0v6.5" />
  <path d="M17 7.5a1.5 1.5 0 0 1 3 0v8.5a6 6 0 0 1 -6 6h-2h.208a6 6 0 0 1 -5.012 -2.7a69.74 69.74 0 0 1 -.196 -.3c-.312 -.479 -1.407 -2.388 -3.286 -5.728a1.5 1.5 0 0 1 .536 -2.022a1.867 1.867 0 0 1 2.28 .28l1.47 1.47" />
</svg></span></div>
          <h3 style="margin:0 0 6px;font-size:19px">Ne rien toucher</h3>
          <p style="font-size:13px;margin:0">Surtout dans la salle des confiseries expérimentales.</p>
        </div>
        <div class="etape">
          <div class="etape-entete"><span class="n">4</span><span class="ico"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
  <path d="M5 4m0 1a1 1 0 0 1 1 -1h12a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-12a1 1 0 0 1 -1 -1z" />
  <path d="M10 10l2 -2l2 2" />
  <path d="M10 14l2 2l2 -2" />
</svg></span></div>
          <h3 style="margin:0 0 6px;font-size:19px">Sortir par l'ascenseur</h3>
          <p style="font-size:13px;margin:0">Direction : partout. Le retour n'est pas garanti du premier coup.</p>
        </div>
      </div>
      <figure class="visite-photo">
        <img src="labo-chocolat.png" alt="Le laboratoire de chocolat de l'usine Wonka" width="1122" height="1402">
        <figcaption>Le laboratoire chocolat</figcaption>
      </figure>
    </div>

    <div class="panel vert reveal faq">
      <h2 class="titre">Questions fréquentes</h2>
      <p class="sous-titre">Extrait. La liste complète (10 questions) est sur la page <a href="faq.html">FAQ</a>.</p>
      <details open>
        <summary>Peut-on visiter l'usine sans Golden Ticket ?</summary>
        <p>Non. Absolument non. L'usine est verrouillée, et le gardien est très poli mais très ferme. Voir la page <a href="visite-usine.html">Visiter l'usine</a> pour les rares exceptions.</p>
      </details>
      <details>
        <summary>Les produits contiennent-ils des noix ?</summary>
        <p>Certains oui. La <a href="scrumdiddlyumptious-bar.html">Scrumdiddlyumptious Bar</a> contient des noix de pécan caramélisées. En cas de doute, ne goûtez pas les murs.</p>
      </details>
      <details>
        <summary>Peut-on commander depuis l'étranger ?</summary>
        <p>Oui, sauf pour la <a href="fizzy-lifting-drink.html">Fizzy Lifting Drink</a> : les boissons gazeuses qui font flotter sont interdites dans les avions, les trains et la plupart des immeubles.</p>
      </details>
    </div>
  </div>
</section>
      </body>
