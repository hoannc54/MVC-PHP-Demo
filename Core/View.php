<?php

namespace Core;

/**
 * View
 *
 * PHP version 7.0
 */
class View
{
    public static function render($view, $args = [])
    {
        extract($args, EXTR_SKIP);

        $file = dirname(__DIR__) . "/resources/views/$view";
        $file = $file . '.php';

        if (is_readable($file)) {
            require $file;
        } else {
            throw new \Exception("$file not found");
        }
    }
}
