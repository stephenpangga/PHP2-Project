<!DOCTYPE html>

<html lang ="en">

<head>
    <meta charset="UTF-8">
    <title>FIle Management</title>
</head>



<body>

<?php
ini_set('display_errors', '1');
//for setting up the project
require 'srcf/core/bootstrap.php';
//require 'user.php';

require 'srcf/core/router/routes.php';
//print_r($_SERVER['REQUEST_URI']);
$router = new Router($routes);

$router ->direct(Request::uri(), Request::method());

return;

?>
