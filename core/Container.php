<?php

//this will be a the place to store keys and dependencies, this can be use a shortcut 
//the database conn can be stored here and be called everywhere.
class Container
{
    //storage array of information
    protected static $keys = [];

    public static function setKey($key, $value)
    {
        //to place the key and value in the array
        static::$keys[$key]=$value;
    }

    public static function getKey($key)
    {
        //check if the key exists, if not throw exception msg
        if (!array_key_exists($key, static::$keys))
        {
            throw new Exception("The {$key} does not exist in the container. ");
        }
        return static::$keys[$key];
    }

}