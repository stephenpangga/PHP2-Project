<?php


class UserService
{
    public static function getAll()
    {
        $sql = "SELECT * FROM users";
        
        $data = Container::getKey('db')->query($sql);

        $userObj =[];

        foreach($data as $row)
        {
            $userInfo = new User($row);

            array_push($userObj, $userInfo);
        }

        return $userObj;
    }

    //this is to check, if a user exist.
    public static function checkUser($email)
    {
        $sql = "SELECT * FROM users WHERE `email` LIKE '$email'";
        
        $params = [
            ":email" => $email
        ];
        
        $data = Container::getKey('db')->insert($sql,$params);

        $userObj =[];

        foreach($data as $row)
        {
            $userInfo = new User($row);

            array_push($userObj, $userInfo);
        }

        return $userObj;
    }
   
    //not working
    public static function login($email)
    {
        $sql = "SELECT * FROM users WHERE `email` LIKE '$email' OR `name` LIKE '$email'";

        //$params = [ ":email" => $email,
        //":password" => $password
        //];

        $data = Container::getKey("db")->query($sql);

        $items = [];
        
        foreach($data as $row)
        {
            $users = new User($row);
            array_push($items, $users);
        }
        
        return $items;

        /*
        if(!empty($tems[0]))
        {
            throw new Exception("there is something here");
        }
        throw new Exception("no it doesnt work");
        */
    }
    
    //register the information of the new user.
    public static function register($name, $email, $password)
    {
        $hashpass = password_hash($password, PASSWORD_DEFAULT);
        //echo $hashpass;
        
        $sql = "INSERT INTO users (`name`, `email`,`password`) VALUES
        (:username, :email, :pass)";

        $params = [":username" => $name,
        ":email" => $email,
        ":pass" => $hashpass];

        Container::getKey('db')->Insert($sql, $params);
        
    }

    //need to make update user pass word query here.
    public static function changePassword($email, $password)
    {
        $hashpass = password_hash($password, PASSWORD_DEFAULT);

        $sql = "UPDATE `users` SET `password` = :pass WHERE `email` LIKE :email";

        $params = [
            "pass" =>$hashpass,
            "email" => $email];

        Container::getKey('db')->Insert($sql, $params);
    }
}