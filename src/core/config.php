<?php

namespace Wonka\Core;

use RuntimeException;

final class Config
{
    private $root;
    private $cache = array();

    public function __construct($root)
    {
        $this->root = rtrim($root, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . 'config';
    }

    public static function load($path)
    {
        return YamlParser::parseFile($path);
    }

    public function app()
    {
        return $this->file('app');
    }

    public function redirects()
    {
        return $this->file('redirects');
    }

    public function page($name)
    {
        if (!preg_match('/^[a-z0-9-]+$/', $name)) {
            throw new RuntimeException('Nom de page invalide : ' . $name);
        }
        return $this->file('pages/' . $name);
    }

    public function hasPage($name)
    {
        return preg_match('/^[a-z0-9-]+$/', $name)
            && is_file($this->root . DIRECTORY_SEPARATOR . 'pages' . DIRECTORY_SEPARATOR . $name . '.yaml');
    }

    public function pages()
    {
        $pages = array();
        foreach (glob($this->root . DIRECTORY_SEPARATOR . 'pages' . DIRECTORY_SEPARATOR . '*.yaml') as $file) {
            $name = basename($file, '.yaml');
            $pages[$name] = $this->page($name);
        }
        return $pages;
    }

    private function file($relative)
    {
        if (!isset($this->cache[$relative])) {
            $path = $this->root . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $relative) . '.yaml';
            $data = self::load($path);
            $this->cache[$relative] = is_array($data) ? $data : array();
        }
        return $this->cache[$relative];
    }
}