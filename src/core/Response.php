<?php

namespace Wonka\Core;

final class Response
{
    private $status;
    private $headers;
    private $body;

    public function __construct($body = '', $status = 200, array $headers = array())
    {
        $this->body = (string) $body;
        $this->status = (int) $status;
        $this->headers = $headers;
    }

    public static function html($body, $status = 200, array $headers = array())
    {
        return new self($body, $status, array_merge(array('Content-Type' => 'text/html; charset=UTF-8'), $headers));
    }

    public static function redirect($location, $status = 301)
    {
        return new self('', $status, array('Location' => $location));
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function getHeader($name)
    {
        foreach ($this->headers as $key => $value) {
            if (strcasecmp($key, $name) === 0) {
                return $value;
            }
        }
        return null;
    }

    public function getHeaders()
    {
        return $this->headers;
    }

    public function withHeader($name, $value)
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }

    public function send($requestMethod = 'GET')
    {
        if (!headers_sent()) {
            http_response_code($this->status);
            foreach ($this->headers as $name => $value) {
                header($name . ': ' . $value, true);
            }
        }

        if (strtoupper((string) $requestMethod) !== 'HEAD' && $this->status !== 304 && $this->status !== 204) {
            echo $this->body;
        }
    }
}