/* Page /recrutement — repris du script inline de recrutement.html (formulaire de démonstration) */
function postuler(poste) {
  alert("Merci ! Le poste « " + poste + " » vous attend peut-être.\nDescendez plus bas pour remplir le formulaire.");
  var sel = document.getElementById('poste');
  if (sel) {
    for (var i = 0; i < sel.options.length; i++) {
      if (sel.options[i].text.indexOf(poste) !== -1) { sel.selectedIndex = i; }
    }
  }
  window.scrollTo({ top: document.body.scrollHeight * 0.62, behavior: 'smooth' });
}

function envoyerCandidature(e) {
  if (e && e.preventDefault) { e.preventDefault(); }
  var merci = document.getElementById('merci');
  if (merci) { merci.style.display = 'block'; }
  return false
}  