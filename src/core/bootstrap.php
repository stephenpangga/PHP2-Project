<?php
//require "./src/views/addnotes.view.php";

spl_autoload_register(function ($class_name)
{
    //database folder
    if(is_file('src/core/database/' .$class_name. '.php'))
    {
        include_once 'src/core/database/' .$class_name. '.php';
    }
    //core folder
    else if(is_file('src/core/'. $class_name .'.php'))
    {
        include_once 'src/core/'. $class_name .'.php';
    }
    //router folder
    else if(is_file('src///////core/router/'. $class_name .'.php'))
    {
        include_once 'src/core/router/'. $class_name .'.php';
    }
    //controller folder
    else if(is_file('src/controllers/'. $class_name .'.php'))
    {
        include_once 'src/controllers/'. $class_name .'.php';
    }
    else if(is_file('./src/models/'. $class_name .'.php'))
    {
        include_once './src/models/'. $class_name .'.php';
    }
    else if(is_file('src/service/'. $class_name .'.php'))
    {
        include_once 'src/service/'. $class_name .'.php';
    }
    else
    {
        throw new Exception("ERROR FROM THE AUTOLOAD BOOTSTRAP FILE");
    }
});


//require 'Container.php';
//require 'database/QueryBuilder.php';
//require 'database/Connection.php';
//require 'Router.php';
//require 'Request.php';


Container::setKey('config', require 'src/config/config.php');

Container::setKey('db', new QueryBuilder(
    Connection::make(Container::getKey('config')['database'])
));

Session::init();

?>



    