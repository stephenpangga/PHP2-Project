<?php


abstract class Controller 
{
    public static function header($path)
    {
        return header("Location: /{$path}");
    }

    //this is a view that formats the output of the page
    public static function view($viewFile, array $data = [])
    {
        extract($data);
        //session_start();
        // The general content of pages is structured below
        //head
        require "views/partials/head.php";
        
        // navigation
        require "views/partials/navigation.php";

        // Require the requested view depending on the needed page.
        require "views/{$viewFile}.view.php";


        //footer
        require "views/partials/footer.php";
    }
}