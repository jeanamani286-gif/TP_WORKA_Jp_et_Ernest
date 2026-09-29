<?php

namespace Wonka\Core;

use RuntimeException;

final class View
{
    private $directory;
    private $iconsDirectory;
    private $shared = array();
    private $icons = array();

    public function __construct($directory, $iconsDirectory = null)
    {
        $this->directory = rtrim($directory, DIRECTORY_SEPARATOR);
        $this->iconsDirectory = $iconsDirectory ? rtrim($iconsDirectory, DIRECTORY_SEPARATOR) : null;
    }

    /** Variables disponibles dans tous les gabarits (site, menu, etc.). */
    public function share(array $data)
    {
        $this->shared = array_merge($this->shared, $data);
    }

    /** Rend un gabarit puis l'insère dans le layout `layout/base`. */
    public function render($name, array $data = array(), $layout = 'layout/base')
    {
        $content = $this->fragment($name, $data);
        if ($layout === null) {
            return $content;
        }
        return $this->fragment($layout, array_merge($data, array('content' => $content)));
    }

    /** Rend un gabarit seul, sans layout. */
    public function fragment($name, array $data = array())
    {
        $file = $this->resolve($name);
        $view = $this;
        extract(array_merge($this->shared, $data), EXTR_SKIP);

        ob_start();
        try {
            require $file;
            return ob_get_clean();
        } catch (\Throwable $error) {
            ob_end_clean();
            throw $error;
        }
    }

    public function partial($name, array $data = array())
    {
        return $this->fragment('partials/' . $name, $data);
    }

    public function component($name, array $data = array())
    {
        return $this->fragment('components/' . $name, $data);
    }

    public function exists($name)
    {
        return preg_match('#^[a-zA-Z0-9_-]+(?:/[a-zA-Z0-9_-]+)*$#', $name)
            && is_file($this->directory . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $name) . '.php');
    }

    public function e($value)
    {
        return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }

    /** Insère une icône SVG de `public/assets/icons/svg` en ligne, comme dans le site d'origine. */
    public function icon($name, $attributes = 'aria-hidden="true" style="width:1em;height:1em;vertical-align:-0.125em"')
    {
        if (!isset($this->icons[$name])) {
            $file = $this->iconsDirectory !== null && preg_match('/^[a-z0-9-]+$/', $name)
                ? $this->iconsDirectory . DIRECTORY_SEPARATOR . $name . '.svg'
                : null;
            if ($file === null || !is_file($file)) {
                throw new RuntimeException('Icône introuvable : ' . $name);
            }
            $svg = file_get_contents($file);
            $svg = preg_replace('/<!--.*?-->/s', '', $svg);
            $svg = preg_replace('/\s+(width|height)="[^"]*"/', '', $svg);
            $svg = preg_replace('/\s*\n\s*/', ' ', trim($svg));
            $this->icons[$name] = str_replace('<svg ', '<svg %ATTRS% ', preg_replace('/\s*>/', '>', $svg, 1));
        }
        return str_replace('%ATTRS%', $attributes, $this->icons[$name]);
    }

    private function resolve($name)
    {
        if (!$this->exists($name)) {
            throw new RuntimeException('Vue introuvable : ' . $name);
        }
        return $this->directory . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $name) . '.php';
    }
}