<?php


class Request
{
    public static function uri()
    {
        //refernce: https://www.php.net/manual/en/function.parse-url.php

        $url =  trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'
        );
        
        if(!$uri=explode('/', $url, 3))
        {
            $uri = [];
        }
        return $uri;
        /*
        return trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'
        );
        */
    }
    
    public static function method()
    {
        //to give us what kind of request, post or get
        return $_SERVER['REQUEST_METHOD'];
    }

}