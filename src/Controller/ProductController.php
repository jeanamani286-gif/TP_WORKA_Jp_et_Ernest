<?php

namespace Wonka\Controller;

use Wonka\Core\Config;
use Wonka\Core\Request;
use Wonka\Core\View;
use Wonka\Repository\ProductRepository;

/** Catalogue (/produits) et fiches produit (/produits/{slug}) : un seul gabarit pour les 8 fiches. */
class ProductController extends BaseController
{
    private $products;

    public function __construct(View $view, Config $config, ProductRepository $products)
    {
        parent::__construct($view, $config);
        $this->products = $products;
    }

    public function index(Request $request)
    {
        $page = $this->config->page('product-index');
        return $this->render($request, 'product/index', array('products' => $this->products->findAll()), $page);
    }

    public function show(Request $request, $slug)
    {
        $product = $this->products->findBySlug($slug);
        if ($product === null) {
            return $this->notFound($request);
        }

        $page = $this->config->page('product-show');
        $page['title'] = $product->get('title', $product->getName() . ' | Wonka Chocolate Factory');
        $page['description'] = $product->getDescription();
        $page['og_title'] = $product->get('og_title', $page['title']);
        $page['og_description'] = $product->get('og_description', $page['description']);
        $page['og_type'] = 'product';
        $page['author'] = $product->get('author', isset($page['author']) ? $page['author'] : null);
        $page['topbar'] = $product->get('topbar', isset($page['topbar']) ? $page['topbar'] : null);
        $page['path'] = '/produits/' . $product->getSlug();
        $page['breadcrumb'] = array(
            array('label' => 'Accueil', 'url' => '/'),
            array('label' => 'Produits', 'url' => '/produits'),
            array('label' => $product->getName()),
        );

        $related = array();
        foreach ((array) $product->get('related', array()) as $relatedSlug) {
            $item = $this->products->findBySlug($relatedSlug);
            if ($item !== null) {
                $related[] = $item;
            }
        }

        return $this->render($request, 'product/show', array(
            'product' => $product,
            'related' => $related,
            'jsonld' => $this->jsonld($product),
        ), $page);
    }

    /** Données structurées Product (+ FAQPage) générées depuis la fiche YAML. */
    private function jsonld(\Wonka\Models\Product $product)
    {
        $app = $this->config->app();
        $domain = isset($app['site']['domain']) ? rtrim($app['site']['domain'], '/') : '';
        $blocks = array();

        $schema = array(
            '@context' => 'https://schema.org',
            '@type' => 'Product',
            'name' => $product->getName(),
            'description' => $product->get('schema_description', $product->getDescription()),
        );
        if ($product->get('sku')) {
            $schema['sku'] = $product->get('sku');
        }
        if ($product->getCategory() !== '') {
            $schema['category'] = $product->getCategory();
        }
        $schema['brand'] = array('@type' => 'Brand', 'name' => isset($app['site']['name']) ? $app['site']['name'] : 'Wonka');
        $schema['offers'] = array(
            '@type' => 'Offer',
            'url' => $domain . $product->getUrl(),
            'priceCurrency' => 'EUR',
            'price' => (string) $product->get('price_value', preg_replace('/[^0-9,.]/', '', str_replace(',', '.', $product->getPrice()))),
            'availability' => 'https://schema.org/' . $product->get('availability', 'InStock'),
        );
        $blocks[] = $schema;

        $faq = (array) $product->get('faq', array());
        if ($faq) {
            $entities = array();
            foreach ($faq as $item) {
                if (!isset($item['question'], $item['answer'])) {
                    continue;
                }
                $entities[] = array(