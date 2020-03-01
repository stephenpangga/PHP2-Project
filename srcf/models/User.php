<?php


class User
{
    private $id;
    private $name;
    private $email;
    private $password;

    public function __construct($objects)
    {
        $this->id = $objects["id"];
        $this->name = $objects["name"];
        $this->email = $objects["email"];
        $this->password = $objects["password"];
    }

    //get
    public function getId()
    {
        //this will be use to represent the data entry of the user.
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }
    
    public function getPassword()
    {
        return $this->password;
    }

    //set
}

?>