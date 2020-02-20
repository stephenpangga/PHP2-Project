<?php

class FileController extends Controller
{
    public function index()
    {
        return self::view("file");
    }

    public function upload()
    {
        echo "time to upload";
    }
}

?>