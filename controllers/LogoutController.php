<?php

class LogoutController extends Controller
{
    public function index()
    {
        //Destroy session
        Session::destroy();
        //return self::view('logout');
        //redirect("logout?logout=successful");
        header("Location: ../index");
    }
}

?>