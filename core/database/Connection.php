<?php



class Connection {
    public static function make($config)
    {  
        try{
           //return new PDO('mysql:host=localhost;dbname=php1_final', 'root', '');
           return new PDO (
               'mysql:host='.$config['host'].';dbname='.$config['dbname'],
               $config['username'],
               $config['password'],

               [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
           );
        } 
        catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}