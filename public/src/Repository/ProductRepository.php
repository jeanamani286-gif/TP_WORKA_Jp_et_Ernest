<?php

namespace Wonka\Repository;

use RuntimeException;
use Wonka\Core\YamlParser;
use Wonka\Models\Product;

/** Lit les fiches produit : un fichier YAML par produit dans data/products. */
final class ProductRepository
{
    private $directory;
    private $cache = array();

    public function __construct($directory)
    {
        $this->directory = rtrim($directory, DIRECTORY_SEPARATOR);
    }

    public function findBySlug($slug)
    {
        if (!is_string($slug) || !preg_match('/^[a-z0-9]+(?:-[a-z0-9]+)*$/', $slug)) {
            return null;
        }
        if (array_key_exists($slug, $this->cache)) {
            return $this->cache[$slug];
        }
        $path = $this->directory . DIRECTORY_SEPARATOR . $slug . '.yaml';
        if (!is_file($path)) {
            return $this->cache[$slug] = null;
        }
        $attributes = YamlParser::parseFile($path);
        $attributes['slug'] = $slug;
        return $this->cache[$slug] = new Product($attributes);
    }

    /** Tous les produits, dans l'ordre du catalogue (champ `position`). */
    public function findAll()
    {
        $files = glob($this->directory . DIRECTORY_SEPARATOR . '*.yaml');
        if ($files === false) {
            throw new RuntimeException('Impossible de lire le catalogue produits.');
        }
        $products = array();
        foreach ($files as $file) {
            $product = $this->findBySlug(basename($file, '.yaml'));
            if ($product !== null) {
                $products[] = $product;
            }
        }
        usort($products, function (Product $a, Product $b) {
            if ($a->getPosition() === $b->getPosition()) {
                return strcmp($a->getSlug(), $b->getSlug());
            }
            return $a->getPosition() < $b->getPosition() ? -1 : 1;
        });
        return $products;
    }
}