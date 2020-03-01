<!DOCTYPE html>

<html lang ="en">

<head>
    <meta charset="UTF-8">
    <title> SISA's FIle Management</title>
</head>



<body>

<?php
ini_set('display_errors', '1');
//for setting up the project
require 'core/bootstrap.php';
//require 'user.php';

require 'core/router/routes.php';

$router = new Router($routes);

$router ->direct(Request::uri(), Request::method());

return;

?>
