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

    //need to make one for editing

    //need to make one for deleting
}