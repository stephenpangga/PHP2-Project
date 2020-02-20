<?php


class Router
{

    protected $routes = [ 
        'GET' => [ ],
        'POST' => [ ]
    ];

    /*
    public static function load($filename)
    {
        //creating an instance of this method, basically new router instance
        $router = new static;

        require $filename;

        return $router;
    }
    */
    
    public function __construct($routes)
    {
        $this->routes = $routes;
    }
    
    //get request
    public function get(string $uri, string $controller)
    {
        //this means 'uri' => 'controllers/singup.php'
        $this->routes['GET'][$uri] = $controller;
    }

    //post request
    public function post(string $uri, string $controller)
    {
        //this means 'uri' => 'controllers/singup.php'
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct(array $uri, string $requestType)
    {
        /*
        //example.com/about
        //requesttype is to see if its a get or post method
        if (array_key_exists($uri, $this->routes[$requestType]))
        {
            //return $this->routes[$uri];

            return $this->routes[$requestType][$uri];

            //epsiode 23
            
            //return $this->callFunction(
            //    ...explode('@', $this->routes[$requestType][$uri])
            //);
            
            
        }
        throw new Exception("no available route for this URL.");
        */

        if (array_key_exists($uri[0], $this->routes[$requestType])) {
            
            // Default values
            $controller = "PagesController";
            $method = "index";
            $parameter = "";

            // Set Controller based on first part of uri components
            if ($uri[0] != "") {
                $controller = $this->routes[$requestType][$uri[0]];
            }

            // Set method based on second part of uri components
            if (isset($uri[1])) {
                $method = $uri[1];
            }

            // Set parameter based on third part of uri components
            if (isset($uri[2])) {
                $parameter = $uri[2];
            }

            // Call method of Controller, if exists and is public
            if (is_callable(array($controller, $method))) {
                try {
        
                    // Avoid calling the view method of the base Controller class
                    if (strtolower($method) != "view") {
                        $this->callMethod($controller, $method, $parameter);
                        return;
                    }
                // If NotAuthorized exception is thrown in Controller constructor,
                // display not authorized page
                } catch (NotAuthorized $e) {
                    return PagesController::contact();
                }
            }
        }
        // If no matching controller + method were found, show 404 page
        return PagesController::index();

    }
    
    protected function callMethod($controller, $method, $parameter)
    {
        $controller = new $controller;
        return $controller->$method($parameter);
    }
}