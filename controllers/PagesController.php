<?php
//this class is for the static pages such as, contacts, about and logout button.
class PagesController extends Controller
{
    //recieves the request
    //delegate
    //return the view
    public function index()
    {
        //$users = Container::getKey('db')->selectAll('trials');

        $objects = UserService::getAll();

        $users = ["users" => $objects];
        return self::view('index', $users);
        //require 'views/index.view.php';
    }

    public function about()
    {
        //require 'views/about.view.php';
    }

    public function contact()
    {
        //return self::view('index');
        //require 'views/contact.view.php';
        echo "call me";
    }

}