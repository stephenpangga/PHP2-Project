<?php

//example.com/about

/*
$router->define( [
    '' => 'controllers/index.php',

    'about' => 'controllers/about.php',

    'contact' => 'controllers/contact.php',

    'about/culture' => 'controllers/about-culture.php',

    'login' => 'controllers/login.php',

    'names' => 'controllers/add-user.php'//only for post types
]);
*/

//get
/*
$router->get('', 'controllers/index.php');
$router->get('about', 'controllers/about.php');
$router->get( 'contact', 'controllers/contact.php');
$router->get( 'about/culture', 'controllers/about-culture.php');
$router->get('login', 'controllers/login.php');
*/
/*
//since episode 23
$router->get('', 'PagesController@home');
$router->get('about', 'controllers/PagesController@about');
$router->get('contact', 'PagesController@contact');


$router->get('login', 'LoginController@index');
*/

$routes = [ 
    "GET" => [
    "" => "PagesController",

    "login" => "LoginController",

    "contact" => "ContactController",

    "about" => "AboutController",

    "signup" => "SignupController",
    
    "notes" => "NotesController",
    
    "logout" => "LogoutController",
    
    "forget" => "ForgetPassController",

    //php 2
    "pay" => "PaymentController",

    "file" => "FileController",

    "pdf"=> "PdfController"

   // 'about' => 'controllers/about.php',

    //'contact' => 'controllers/contact.php',

    //'about/culture' => 'controllers/about-culture.php',

    //'login' => 'controllers/login.php',

    //'names' => 'controllers/add-user.php'//only for post types
    ],

    "POST" => [
        "signup"=> "SignupController",

        "login" => "LoginController",

        "forget" => "ForgetPassController",

        "notes" => "NotesController",

        "pay" => "PaymentController",

        "file"=>"FileController",

        "pdf"=> "PdfController"
        ]
];
