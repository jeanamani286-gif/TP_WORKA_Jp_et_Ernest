v/* Effets partagés (chargé sur toutes les pages, avec `defer`) — repris des scripts inline d'index.html */
(function () {
  'use strict';

  /* compteur animé */
  function animerCompteurs() {
    var nb = document.querySelectorAll('.nb[data-cible]');
    for (var i = 0; i < nb.length; i++) {
      (function (el) {
        var cible = parseInt(el.getAttribute('data-cible'), 10);
        if (isNaN(cible)) { return; }
        var actuel = 0;
        var pas = Math.max(1, Math.round(cible / 40));
        var t = setInterval(function () {
          actuel += pas;
          if (actuel >= cible) { actuel = cible; clearInterval(t); }
          el.textContent = actuel.toLocaleString('fr-FR');
        }, 40);
      })(nb[i]);
    }
  }
  window.animerCompteurs = animerCompteurs;

  /* tapis roulant de bonbons : on double la bande pour la boucle */
  var tapis = document.getElementById('tapis');
  if (tapis) { tapis.innerHTML = tapis.innerHTML + tapis.innerHTML; }

  /* apparition au scroll */
  var els = document.querySelectorAll('.reveal');
  if (els.length) {
    if ('IntersectionObserver' in window) {
      var io = new IntersectionObserver(function (entrees) {
        entrees.forEach(function (e) { if (e.isIntersecting) { e.target.classList.add('vu'); io.unobserve(e.target); } });
      }, { threshold: 0.12 });
      for (var i = 0; i < els.length; i++) { io.observe(els[i]); }
    } else {
      for (var j = 0; j < els.length; j++) { els[j].classList.add('vu'); }
    }
  }

  if (document.readyState === 'complete') {
    animerCompteurs();
  } else {
    window.addEventListener('load', animerCompteurs);
  }
})();