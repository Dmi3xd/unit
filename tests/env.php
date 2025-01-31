<?php

namespace tests;

Class env
{
    public static function load($file, $override = false)
    {
        if(!is_file($file)){
            throw new \InvalidArgumentException('Not have .env');
        }

        $content = preg_replace('/^\s*#/m',';',file_get_contents($file));
        $parsed = parse_ini_string($content, true, INI_SCANNER_NORMAL);

        foreach ($parsed as $key => $value) {
            if(!isset($_ENV[$key]) && $override) $_ENV[$key] = $value;
            elseif(!isset($_ENV[$key])) $_ENV[$key] = $value;
        }

    }
}