<?php

use Wonka\Core\Autoloader;
use Wonka\Core\Request;

$root = dirname(__DIR__);
require $root . '/src/core/Autoloader.php';
Autoloader::register($root);

$request = Request::fromGlobals();
$response->send($request->getMethod());