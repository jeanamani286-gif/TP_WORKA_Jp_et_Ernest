/* Filtre de la FAQ (page /faq) — repris du script inline de faq.html ; appelé par `onkeyup` sur #q */
function filtrerFaq() {
  var champ = document.getElementById('q');
  var compte = document.getElementById('compte');
  if (!champ) { return; }
  var val = champ.value.toLowerCase();
  var items = document.querySelectorAll('#liste-faq .item');
  var visibles = 0;
  for (var i = 0; i < items.length; i++) {
    var txt = items[i].textContent.toLowerCase();
    if (txt.indexOf(val) !== -1) { items[i].style.display = 'block'; visibles++; }
    else { items[i].style.display = 'none'; }
  }
  if (compte) { compte.textContent = visibles + ' question(s) affichée(s)'; }
}