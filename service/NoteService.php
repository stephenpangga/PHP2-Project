<?php


class NoteService
{
    public function getAll()
    {
        //get all notes
        $sql = "SELECT * FROM notes";

        $params = [];
        
        $data = Container::getKey('db')->query($sql);

        $notesObj = [];

        foreach($data as $row)
        {
            $NoteInfo = new Notes($row);

            array_push($notesObj, $NoteInfo);
        }

        return $notesObj;
    }

    public function getNote($userId)
    {
        $sql = "SELECT * FROM notes WHERE `userId` = '$userId'";

        $params = [];
        
        $data = Container::getKey('db')->query($sql);

        $notesObj = [];

        foreach($data as $row)
        {
            $NoteInfo = new Notes($row);

            array_push($notesObj, $NoteInfo);
        }
        return $notesObj;
    }

    public function storeNote($title, $text)
    {
        $user = Session::get('user')->getId();
        $sql = "INSERT INTO notes (`userId`, `title`, `text`) VALUES
        (:user, :title, :txt)";

        $params = [":user"=>$user,
        ":title"=>$title,
        ":txt"=>$text];

        Container::getKey('db')->Insert($sql, $params);
    }
    //need to make one for editing

    //need to make one for deleting
}