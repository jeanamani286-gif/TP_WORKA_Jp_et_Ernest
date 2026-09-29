/* SCRIPT PRODUIT — actions des fiches et du catalogue (chargé avec defer sur /, /produits et /produits/*) */

/* Bouton « Acheter » des fiches et des cartes */
function acheterProduit(nom) {
  alert("Félicitations, vous avez peut-être trouvé un Golden Ticket !\n(Produit ajouté au panier imaginaire : " + nom + ")");
}

/* Filtres du catalogue (data-cat des cartes de #grille) */
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

/* Parfums de la fiche Lickable Wallpaper */
function choisirParfum(p) {
  var el = document.getElementById('choix');
  if (!el) {
    return;
  }
  if (p === 'mercredi') {
    el.innerHTML = "Parfum « mercredi » : nous préférons ne pas en parler.";
  } else {
    el.innerHTML = "Vous avez choisi le parfum " + p + ". Excellent choix, dit la direction.";
  }
}