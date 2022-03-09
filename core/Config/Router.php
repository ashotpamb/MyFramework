<?php

namespace MF\Config;

class Router
{


    private static $url = [];
    private static $mainPage = [];

    public static function get($route, $func)
    {
        self::$url[] = $route;
        if (!is_array($func)) {
            $func();
            exit();
        }
        self::run($func);
    }

    private static function getRegex($pattern) //home/{id}/test -> regEx
    {
        $routeTerms = explode('/', $pattern);
        $charsAndDigitsRegEx = "([a-zA-Z0-9]+)";
        $matchedRegex = false;
        $route = $pattern;
        foreach ($routeTerms as $term) {
            if (substr($term, 0, 1) == '{') {
                $matchedRegex = true;
                $pattern = str_replace($term, $charsAndDigitsRegEx, $pattern);
            }
        }

        if (!$matchedRegex) {
            $pattern = $route;
        }

        return "#{$pattern}$#i";
    }

    private static function getUri()
    {
        $requestUrl = $_SERVER['REQUEST_URI'];
        $getUrl = str_replace(HOME_PATH, '', $requestUrl);
        $getUrl = explode("/", $getUrl);
        $path = '/';
        foreach ($getUrl as $route) {
            $pattern = self::getRegex($route);
            $matchedRoutes = preg_match("$pattern", $requestUrl);
            if ($matchedRoutes) {
                $path = $route;
                return $path;
            }
        }
        return $path;
    }

    private static function run($func)
    {
        $path = self::getUri();
        if (in_array($path, self::$url)) {
            $controller = new $func[0];
            $controller->{$func[1]}();

        } else {
            //include(ROOT . '/view/404.php');
        }
    }

}