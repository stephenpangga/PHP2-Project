<?php


spl_autoload_register(function ($class_name)
{
    //database folder
    if(is_file('core/database/'.$class_name.'.php'))
    {
    include_once 'core/database/'.$class_name.'.php';
    }
    //core folder
    else if(is_file('core/'.$class_name.'.php'))
    {
        include_once 'core/'.$class_name.'.php';
    }
    //router folder
    else if(is_file('core/router/'.$class_name.'.php'))
    {
        include_once 'core/router/'.$class_name.'.php';
    }
    //controller folder
    else if(is_file('controllers/'.$class_name.'.php'))
    {
        include_once 'controllers/'.$class_name.'.php';
    }
    else if(is_file('models/'.$class_name.'.php'))
    {
        include_once 'models/'.$class_name.'.php';
    }
    else if(is_file('service/'.$class_name.'.php'))
    {
        include_once 'service/'.$class_name.'.php';
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


Container::setKey('config', require 'config.php');

Container::setKey('db', new QueryBuilder(
    Connection::make(Container::getKey('config')['database'])
));

Session::init();





    