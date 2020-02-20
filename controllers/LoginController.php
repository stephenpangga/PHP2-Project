<?php

//self::view("login");
class LoginController extends Controller
{
    public function index()
    {
        return self::view('login');
    }

    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        //tocheck input
        //echo $email;

        //check for user input
        if(empty($email) || empty($password))
        {
            header("Location: /login?error=empty");
        }
        else
        {
            $objects = UserService::login($email);
            //check if username exist in the database
            if(count($objects) <= 0 )
            {
               // echo "no user found, please re try to sign in.";
                //return self::redirect("../logout");
                header("Location: /login?error=nouser");
            }
            else
            {
                //this works, to show the data of the user at the content view.
                if($objects[0]->getEmail() == $email || $objects[0]->getName() == $email)
                {
                    //$hashpass = password_hash($password, PASSWORD_DEFAULT);
                    //echo $hashpass;
                    if(password_verify($password, $objects[0]->getPassword()))
                    {
                        //echo "eyy you are logged in";
                        //header("Location: notes");
                        Session::set('loggedIn', true);
                        Session::set('user', $objects[0]);
                        //$_SESSION["firstname"] = "Peter";
                        //Session::set('userid', $objects[0]->getId());
                        //check if the login if user or admin.
                        return self::view("index");
                    }
                    else
                    {
                        echo 'WRONG PASS WTF';
                       // header("Location: /login?error=wrongpass");
                    }
                    /*
                    //also need to check the password and send error
                    Session::set('loggedIn', true);
                    Session::set('user', $objects[0]);
                    Session::set('userid', $objects[0]->getId());
                    /*
                    $user = [
                        $objects[0]->getId(),
                        $objects[0]->getName(),
                        $objects[0]->getEmail(),
                        $objects[0]->getPassword()
                    ];
                    //echo "the user exist";
                    //var_dump($_SESSION);
                    //header("Location: /index?login=success");
                    return self::view('index');
                    */                
                }
            }
        }
        
    }
}

?>