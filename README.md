# TP_WORKA_Jp_et_Ernest
# Wonka Chocolate Factory — framework PHP

Le parcours des fiches produit est servi par le contrôleur frontal `public/index.php`.
Les ressources statiques restent dans `public/assets/`; le répertoire `public` doit être
la racine web du serveur et `mod_rewrite` doit être activé pour Apache.

- Catalogue : `/produits`
- Fiche : `/produits/{slug}`
- Données produit : `data/products/{slug}.yaml` ; chaque fichier porte sa position dans le catalogue, alignée sur l’ordre de `produits.html`.
- Anciennes URL `.html` des fiches produit : redirection 301 configurée dans `config/redirects.yaml`
- Les autres pages HTML sont temporairement servies en mode compatibilité par `PageController`.

Lancer les tests avec `php tests/run.php` depuis la racine du projet. Pour le serveur PHP intégré, utiliser `php -S 127.0.0.1:8080 -t public public/router.php`.