<?php

namespace Wonka\Core;

final class Request
{
    private $method;
    private $path;
    private $headers;
    private $post;

    public function __construct($method, $uri, array $headers = array(), array $post = array())
    {
        $path = parse_url((string) $uri, PHP_URL_PATH);
        $path = is_string($path) && $path !== '' ? rawurldecode($path) : '/';
        if ($path !== '/' && substr($path, -1) === '/') {
            $path = rtrim($path, '/');
        }
        $this->method = strtoupper((string) $method);
        $this->path = $path;
        $this->headers = $headers;
        $this->post = $post;
    }

    public static function fromGlobals()
    {
        $headers = array();
        foreach ($_SERVER as $key => $value) {
            if (strncmp($key, 'HTTP_', 5) === 0) {
                $name = str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($key, 5)))));
                $headers[$name] = $value;
            }
        }

        return new self(
            isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET',
            isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/',
            $headers,
            $_POST
        );
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function getPath()
    {
        return $this->path;
    }

    public function getHeader($name, $default = null)
    {
        foreach ($this->headers as $key => $value) {
            if (strcasecmp($key, $name) === 0) {
                return $value;
            }
        }
        return $default;
    }

    public function post($name, $default = null)
    {
        return isset($this->post[$name]) ? $this->post[$name] : $default;
    }
}