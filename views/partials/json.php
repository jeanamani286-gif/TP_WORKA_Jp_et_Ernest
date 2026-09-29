<?php
/**
 * Données structurées : Organization (accueil), BreadcrumbList (depuis $page['breadcrumb'])
 * et blocs supplémentaires passés par le contrôleur via $jsonld (tableaux PHP).
 */
$domain = rtrim($site['domain'], '/');
$blocks = array();

if (!empty($page['organization_jsonld'])) {
    $blocks[] = array(
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => $site['name'],
        'alternateName' => 'Chocolaterie Wonka',
        'url' => $domain . '/',
        'logo' => $domain . $site['logo'],
        'slogan' => $site['slogan'],
        'foundingDate' => $site['founding_date'],
        'founder' => array('@type' => 'Person', 'name' => $site['founder'], 'jobTitle' => $site['founder_title']),
        'address' => array(
            '@type' => 'PostalAddress',
            'streetAddress' => $site['address']['street'],
            'addressLocality' => $site['address']['city'],
            'postalCode' => $site['address']['postal_code'],
            'addressCountry' => $site['address']['country'],
        ),
        'openingHours' => $site['opening_hours'],
        'contactPoint' => array('@type' => 'ContactPoint', 'telephone' => $site['phone'], 'contactType' => 'customer service', 'availableLanguage' => array('fr', 'Oompa-Loompa')),
    );
}

foreach (isset($jsonld) ? $jsonld : array() as $block) {
    $blocks[] = $block;
}

if (!empty($page['breadcrumb'])) {
    $items = array();
    $position = 1;
    foreach ($page['breadcrumb'] as $crumb) {
        $url = !empty($crumb['url']) ? $crumb['url'] : (isset($page['path']) ? $page['path'] : '/');
        $items[] = array('@type' => 'ListItem', 'position' => $position++, 'name' => $crumb['label'], 'item' => $domain . $url);
    }
    $blocks[] = array('@context' => 'https://schema.org', '@type' => 'BreadcrumbList', 'itemListElement' => $items);
}

foreach ($blocks as $block): ?>
<script type="application/ld+json">
<?= str_replace('</', '<\/', json_encode($block, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT)) ?>

</script>
<?php endforeach; ?>