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
        require "srcf/views/partials/head.php";
        
        // navigation
        require "srcf/views/partials/navigation.php";

        // Require the requested view depending on the needed page.
        require "srcf/views/{$viewFile}.view.php";


        //footer
        require "srcf/views/partials/footer.php";
    }
}