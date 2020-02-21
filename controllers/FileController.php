<?php

class FileController extends Controller
{
    public function index()
    {
        return self::view("file");
    }

    public function upload()
    {
        echo "uploading the file";
    }

    public function delete()
    {
        echo "deleting file";
    }
}

?>