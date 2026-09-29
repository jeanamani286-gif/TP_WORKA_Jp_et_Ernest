<?php

namespace Wonka\Models;

use InvalidArgumentException;

/** Une confiserie : les champs obligatoires sont validés, le reste de la fiche YAML reste accessible via get(). */
final class Product
{
    private $data;

    public function __construct(array $attributes)
    {
        foreach (array('slug', 'name', 'description', 'price', 'position') as $key) {
            if (!isset($attributes[$key]) || !is_scalar($attributes[$key]) || $attributes[$key] === '') {
                throw new InvalidArgumentException('Données produit invalides : ' . $key);
            }
        }
        if (!preg_match('/^[a-z0-9]+(?:-[a-z0-9]+)*$/', (string) $attributes['slug'])) {
            throw new InvalidArgumentException('Slug produit invalide.');
        }
        if (!is_numeric($attributes['position']) || (int) $attributes['position'] < 1) {
            throw new InvalidArgumentException('Position de catalogue invalide.');
        }
        $this->data = $attributes;
    }

    public function get($key, $default = null)
    {
        return array_key_exists($key, $this->data) && $this->data[$key] !== null ? $this->data[$key] : $default;
    }

    public function toArray()
    {
        return $this->data;
    }

    public function getSlug()
    {
        return (string) $this->data['slug'];
    }

    public function getName()
    {
        return (string) $this->data['name'];
    }

    public function getDescription()
    {
        return (string) $this->data['description'];
    }

    public function getPrice()
    {
        return (string) $this->data['price'];
    }

    public function getPosition()
    {
        return (int) $this->data['position'];
    }

    public function getCategory()
    {
        return (string) $this->get('category', '');
    }

    public function getStatus()
    {
        return (string) $this->get('status', '');
    }

    public function getStatusClass()
    {
        return preg_replace('/[^a-z0-9 -]/', '', (string) $this->get('status_class', ''));
    }

    public function getUrl()
    {
        return '/produits/' . $this->getSlug();
    }
}