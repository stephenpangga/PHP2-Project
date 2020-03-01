<?php

class Notes
{
    private $id;
    private $userId;
    private $title;
    private $text;

    public function __construct($noteObj)
    {
        $this->id=$noteObj["id"];
        $this->userId=$noteObj["userId"];
        $this->title=$noteObj["title"];
        $this->text=$noteObj["text"];
    }

    //getters
    public function getId()
    {
        return $this->id;
    }

    public function getuserId()
    {
        return $this->userId;
    }
    
    public function getTitle()
    {
        return $this->title;
    }

    public function getText()
    {
        return $this->text;
    }

    //setters
}

?>