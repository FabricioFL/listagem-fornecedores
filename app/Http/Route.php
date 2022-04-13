<?php

namespace App\Http;

use Closure;

class Route
{
    public static function get(string $url, Closure $action)
    {
        if($_SERVER['REQUEST_URI'] == $url && $_SERVER['REQUEST_METHOD'] == 'GET')
        {
            echo $action();
            die();
        }
    }

    public static function render(string $view)
    {
        header('location: ../../resources/view/' .$view.'.php');
        die();
    }

    public static function redirect(string $url)
    {
        header('location: '.$url);
        die();
    }
}

