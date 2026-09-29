<?php

namespace Wonka\Core;

final class Autoloader
{
    private static $directories = array(
        'Core' => 'core',
        'Controller' => 'Controller',
        'Models' => 'Models',
        'Repository' => 'Repository',
    );

    public static function register($root)
    {
        $base = rtrim($root, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR;

        spl_autoload_register(function ($class) use ($base) {
            $prefix = 'Wonka\\';
            if (strncmp($class, $prefix, strlen($prefix)) !== 0) {
                return;
            }

            $parts = explode('\\', substr($class, strlen($prefix)));
            $namespace = array_shift($parts);
            if (!$parts || !isset(self::$directories[$namespace])) {
                return;
            }

            $name = array_pop($parts);
            $directory = $base . self::$directories[$namespace] . DIRECTORY_SEPARATOR
                . ($parts ? implode(DIRECTORY_SEPARATOR, $parts) . DIRECTORY_SEPARATOR : '');

            foreach (array($name, lcfirst($name)) as $candidate) {
                $file = $directory . $candidate . '.php';
                if (is_file($file)) {
                    require_once $file;
                    return;
                }
            }
        });
    }
}