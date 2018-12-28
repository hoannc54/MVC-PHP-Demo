<?php

namespace Core;

class Config
{
    const SHOW_ERRORS = true;

    // Tam thoi
    public static function get($keys){
        $keys = explode('.', $keys);

        $file = $keys[0];

        $config = include dirname(__DIR__) . '/config/' . $file . '.php';

        return $config[$keys[1]];

    }
}
