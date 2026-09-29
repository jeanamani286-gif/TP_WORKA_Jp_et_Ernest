/* Formulaire de contact (page /contact) — adapté du script inline de contact.html :
   le formulaire est désormais envoyé en POST, la fonction ne bloque plus la soumission. */
function envoyerMessage(e) {
  var form = e && e.target ? e.target : document.querySelector('.formulaire');
  if (form && typeof form.checkValidity === 'function' && !form.checkValidity()) {
    return true;
  }
  var sujet = document.getElementById('sujet');
  if (sujet && sujet.value === "J'ai trouvé un Golden Ticket") {
    alert("Félicitations, vous avez peut-être trouvé un Golden Ticket !");
  }
  return true;
}