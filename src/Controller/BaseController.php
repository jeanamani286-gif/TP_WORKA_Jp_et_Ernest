<?php

namespace Wonka\Controller;

use Wonka\Core\Config;
use Wonka\Core\Request;
use Wonka\Core\Response;
use Wonka\Core\View;

abstract class BaseController
{
    protected $view;
    protected $config;

    public function __construct(View $view, Config $config)
    {
        $this->view = $view;
        $this->config = $config;
    }

    /**
     * Rend un gabarit dans le layout et ajoute les en-têtes de cache.
     * Renvoie 304 sans corps si l'ETag envoyé par le navigateur correspond.
     */
    protected function render(Request $request, $template, array $data, array $page, $status = 200)
    {
        $data['page'] = $page;
        $data['currentPath'] = $request->getPath();
        $body = $this->view->render($template, $data);

        $headers = array('Content-Type' => 'text/html; charset=UTF-8');
        if ($status === 200) {
            $etag = '"' . hash('sha256', $body) . '"';
            $headers['ETag'] = $etag;
            $headers['Cache-Control'] = isset($page['cache_control']) ? $page['cache_control'] : 'public, max-age=300';
            if ($this->etagMatches($request->getHeader('If-None-Match'), $etag)) {
                return new Response('', 304, $headers);
            }
        }
        return new Response($body, $status, $headers);
    }

    public function notFound(Request $request)
    {
        if (!$this->view->exists('page/not-found')) {
            return Response::html('<!doctype html><html lang="fr"><meta charset="utf-8"><title>404</title><h1>Page introuvable</h1></html>', 404);
        }
        $page = $this->config->hasPage('not-found') ? $this->config->page('not-found') : array();
        $page += array('title' => 'Page introuvable - Wonka Chocolate Factory', 'description' => 'Cette page n’existe pas.');
        return $this->render($request, 'page/not-found', array(), $page, 404);
    }

    private function etagMatches($header, $etag)
    {
        if (!is_string($header) || trim($header) === '') {
            return false;
        }
        foreach (explode(',', $header) as $candidate) {
            $candidate = trim($candidate);
            if ($candidate === '*' || $candidate === $etag || $candidate === 'W/' . $etag) {
                return true;
            }
        }
        return false;
    }
}