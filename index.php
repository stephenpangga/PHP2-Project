<?php

//for setting up the project
require 'core/bootstrap.php';

//require 'user.php';


require 'routes.php';
//this works
//require $router->direct('about');

/*
//this works
$uri = (trim($_SERVER['REQUEST_URI'], '/'));
require $router->direct($uri);
*/

//$uri = (trim($_SERVER['REQUEST_URI'], '/'));

//$router = Router::load($routes);

//$router = Router::define($routes);
$router = new Router($routes);

$router ->direct(Request::uri(), Request::method());

return;











//the trial and error to see if my routing scheme works, it was solved by a .htacces file.

//var_dump($_SERVER);
//var_dump(explode('/', $_SERVER['REQUEST_URI']));
//var_dump($_SERVER["REQUEST_URI"]);


//$uri = explode('/', $_SERVER['REQUEST_URI']);
//var_dump(trim($_SERVER['REQUEST_URI'], '/'));

//$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
//require $router->direct('contact');
////
//$users = $query->selectAll('users');


//require 'index.view.php';

//$uri = trim($_SERVER['REQUEST_URI'], "/");

//require $router->direct($uri);


//$router = Router::load('routes.php');

//require $router->direct($uri);\

/*
$router = new Router();

$router = Router::load('routes.php');

$router->direct(Request::uri());
*/