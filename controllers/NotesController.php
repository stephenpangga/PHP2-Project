<?php

class NotesController extends Controller
{
    public function index()
    {
        Session::set('loggedIn', true);
        
        //echo "welcome to notes";
        $userID = Session::get('userid');

        $trial = Session::get('user')->getId();
        //echo $trial;

        //echo $userID;
        //echo $_SESSION['user'];
        //$userInfo = [];
        //var_dump($_SESSION);
        //echo $_SESSION['firstname'];
        $noteobj = NoteService::getNote($trial);
        //$obj= NoteService::getAll();

        $notes = ["notes"=>$noteobj];

        return self::view("content", $notes);
    }

    public function addnote()
    {
        echo 'going to the add note page';

        return self::view("addnotes");
    }

    public function insert()
    {
        echo "added the new note";
    }
}

?>