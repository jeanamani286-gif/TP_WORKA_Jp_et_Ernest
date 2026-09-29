<?php
$questions = array(
    array('question' => "1. Peut-on visiter l'usine sans Golden Ticket ?", 'answer' => 'Non. Absolument non. L\'usine est verrouillée, et le gardien est très poli mais très ferme. Les rares exceptions sont décrites sur la page <a href="/visite-usine">Visiter l\'usine</a>.'),
    array('question' => '2. Les Gobstoppers sont-ils vraiment éternels ?', 'answer' => 'Ils ne fondent pas. L\'<a href="/produits/everlasting-gobstopper">Everlasting Gobstopper</a> change de couleur chaque jour de la semaine et ne diminue jamais de taille. Nous n\'avons pas encore testé au-delà de quarante ans, donc disons : probablement.'),
    array('question' => '3. Les boissons Fizzy Lifting sont-elles dangereuses ?', 'answer' => 'Elles font flotter. Le danger vient des plafonds, des ventilateurs et des fenêtres ouvertes, pas de la boisson elle-même. Lisez la fiche de la <a href="/produits/fizzy-lifting-drink">Fizzy Lifting Drink</a> avant toute consommation, surtout si vous mesurez plus d\'1,40 m.'),
    array('question' => '4. Les produits contiennent-ils des noix ?', 'answer' => 'Certains oui. La <a href="/produits/scrumdiddlyumptious-bar">Scrumdiddlyumptious Bar</a> contient des noix de pécan caramélisées, et le <a href="/produits/golden-egg">Golden Egg</a> peut en contenir des traces. En cas de doute, ne goûtez pas les murs.'),
    array('question' => "5. Peut-on commander depuis l'étranger ?", 'answer' => 'Oui, sauf pour la <a href="/produits/fizzy-lifting-drink">Fizzy Lifting Drink</a> : les boissons gazeuses qui font flotter sont interdites dans les avions, les trains et la plupart des immeubles. Le <a href="/produits/lickable-wallpaper">papier peint à lécher</a> voyage bien, lui.'),
    array('question' => "6. Peut-on visiter l'usine avec des enfants ?", 'answer' => 'C\'est même l\'objectif : cinq enfants, pas un de plus. Chaque enfant doit être accompagné d\'un adulte responsable de son calme. Les adultes trop enthousiastes sont invités à rester dans le hall.'),
    array('question' => '7. Où trouver un Golden Ticket ?', 'answer' => 'Dans une <a href="/produits/wonka-bar">Wonka Bar</a> ou dans un <a href="/produits/golden-egg">Golden Egg</a>. Cinq tickets par an, jamais six.'),
    array('question' => '8. Les produits expérimentaux sont-ils garantis ?', 'answer' => 'Non. Ils sont observés, documentés, parfois chantés, mais jamais garantis. Si vous devenez violet, le service après-vente vous proposera un jus de citron et une visite guidée. Voir <a href="/produits">Confiseries expérimentales</a>.'),
    array('question' => '9. Que faire si un bonbon change de couleur ?', 'answer' => 'Rien de grave. L\'<a href="/produits/everlasting-gobstopper">Everlasting Gobstopper</a> change de couleur chaque jour de la semaine, c\'est sa fonction. Posez-le et attendez le lendemain. Si c\'est <em>vous</em> qui changez de couleur, contactez le <a href="/contact">service client</a> immédiatement.'),
    array('question' => "10. Peut-on travailler à l'usine ?", 'answer' => 'Oui. Nous recrutons des goûteurs, des polisseurs de bonbons et des chanteurs de couloir. Le paiement en fèves de cacao est réservé aux Oompa Loompas. Toutes les offres sont sur la page <a href="/recrutement">Travailler à l\'usine</a>.'),
);
?>
<div class="wrap">
  <?= $view->partial('breadcrumb') ?>

  <div class="bandeau-page">
    <h1>Foire aux questions</h1>
    <p>Dix questions que l'on nous pose chaque semaine, dans cet ordre, depuis 1971.</p>
  </div>

  <section class="panel jaune faq-atelier" aria-labelledby="titre-atelier">
    <figure class="faq-atelier-photo">
      <img src="/assets/images/chapeau-confiserie.png" alt="Un chapeau de confiserie dans l'univers Wonka">
    </figure>
    <div>
      <?= $view->component('badge', array('label' => 'Dans les coulisses', 'variant' => 'jaune')) ?>
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
      <a href="/contact" class="btn btn-rose">Contacter le service client</a>
    </div>
  </section>

  <div class="panel vert faq-contact">
    <h2 class="titre">Votre question n'est pas là ?</h2>
    <p>Écrivez-nous. Nous répondons sous 3 à 5 jours ouvrés, sauf si une expérience tourne mal.</p>
    <a href="/contact" class="btn btn-bleu">Nous écrire</a>
  </div>

  <hr class="bonbon">

  <div class="boite-recherche">
    <label for="q" style="font-weight:bold">Filtrer les questions : </label>
    <input type="text" id="q" onkeyup="filtrerFaq()" placeholder="ex. noix, ticket, plafond…">
    <p id="compte" style="font-size:12px;margin:8px 0 0"><?= count($questions) ?> questions affichées</p>
  </div>

  <div class="panel faq" id="liste-faq">
<?php foreach ($questions as $item): ?>

    <details class="item">
      <summary><?= $view->e($item['question']) ?></summary>
      <p class="rep"><?= $item['answer'] ?></p>
    </details>
<?php endforeach; ?>

  </div>
</div>