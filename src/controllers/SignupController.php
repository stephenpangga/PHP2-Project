<?php

class SignupController extends Controller {
    
    public function index()
    {
        return self::view('signup');
    }

    public function register()
    {
        $username = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repassword = $_POST['rpassword'];

        //still need to fix the  query in order to store the information of the user.
        if(empty($username)|| empty($email) || empty($password) || empty($repassword))
        {
            header("Location: ../signup?error=emptyfields");
            exit();
        }
        //to check if the username and email are valid
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username))
        {
            header("Location: ../signup?error=invalidemail&username");
            exit();
        }
        //to check if the email is valid
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){

            header("Location: ../signup?error=invalidemail");
            exit();
        }
        //to check the username with a search pattern on what we allow for the letters
        else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
            header("Location: ../signup?error=invalidusername");
            exit();
        }
        //password checker, if its the same
        else if ($password !== $repassword){
            header("Location: ../signup?error=passwordcheck&username=&email");
            exit();
        }
        //when everything is fine.
        else
        {
            $users = UserService::checkUser($email);
            //to check if the user exist
            if(count($users) > 0)
            {
                header("Location: ../signup?error=emailtaken&email=.$username");
            }
            else
            {
                //when no user exist. add to database.
                UserService::register($username, $email, $password);
            }
        }
    }
}

?>
