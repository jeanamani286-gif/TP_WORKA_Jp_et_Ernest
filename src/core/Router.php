<?php

namespace Wonka\Core;

final class Router
{
    private $routes = array();
    private $redirects = array();
    private $notFound;

    public function __construct(array $redirects = array(), $notFound = null)
    {
        $this->redirects = $redirects;
        $this->notFound = $notFound;
    }

    /** Enregistre une route : méthode(s), motif (`/produits/{slug}`) et action. */
    public function add($methods, $pattern, $handler)
    {
        $regex = '#^' . preg_replace('/\\\\\{([a-zA-Z_][a-zA-Z0-9_]*)\\\\\}/', '(?P<$1>[a-z0-9-]+)', preg_quote($pattern, '#')) . '$#';
        $this->routes[] = array(
            'methods' => array_map('strtoupper', (array) $methods),
            'regex' => $regex,
            'handler' => $handler,
        );
        return $this;
    }

    public function get($pattern, $handler)
    {
        return $this->add(array('GET', 'HEAD'), $pattern, $handler);
    }

    public function dispatch(Request $request)
    {
        $method = $request->getMethod();
        $path = $request->getPath();

        if (isset($this->redirects[$path])) {
            return Response::redirect($this->redirects[$path], 301);
        }

        $allowed = array();
        foreach ($this->routes as $route) {
            if (!preg_match($route['regex'], $path, $matches)) {
                continue;
            }
            if (!in_array($method, $route['methods'], true)) {
                $allowed = array_merge($allowed, $route['methods']);
                continue;
            }
            $params = array();
            foreach ($matches as $key => $value) {
                if (is_string($key)) {
                    $params[$key] = $value;
                }
            }
            return call_user_func($route['handler'], $request, $params);
        }

        if ($allowed) {
            return Response::html('<!doctype html><html lang="fr"><meta charset="utf-8"><title>405</title><h1>Méthode non autorisée</h1></html>', 405, array(
                'Allow' => implode(', ', array_unique($allowed)),
            ));
        }

        if ($this->notFound !== null) {
            return call_user_func($this->notFound, $request);
        }
        return Response::html('<!doctype html><html lang="fr"><meta charset="utf-8"><title>404</title><h1>Page introuvable</h1></html>', 404);
    }
}