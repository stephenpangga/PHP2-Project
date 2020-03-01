<?php



class ForgetPassController extends Controller
{
    public function index()
    {
        return self::view("resetpassword");
    }

    //this is for the reset password
    public function reset(/*$email*/)
    {
        $email = $_POST['email'];
        $password = $_POST['newpassword'];
        $repassword = $_POST['renewpassword'];


        //first check if the user exist
        if(empty($email) || empty($password) || empty($repassword))
        {
            header("Location: /forget?error=emptyfields");
        }
        else
        {
            $user = UserService::login($email);
            //if email does not exist
            if(count($user)== null)
            {
                header("Location: /forget?error=nouser");
                echo "no user exist";
            }
            else
            {
                if($user[0]->getEmail() == $email)
                {
                    //check if password == repassword
                    if($password == $repassword)
                    {
                        //echo "password is the same as repassword";
                        //update user in database
                        UserService::changePassword($email, $password);
                        echo "password have been change.";
                    }
                }
            }
        }
    }
}