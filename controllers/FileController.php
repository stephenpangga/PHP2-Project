<?php

class FileController extends Controller
{
    public function index()
    {
        $user= Session::get('user')->getName();
        $userId=Session::get('user')->getId();
        
        if(is_dir("filemanager/.$userId.id.$user.-folder") == false)
        {
        //create the folder for the specific user.
        //folder name will be userid.id.name.-folder
            mkdir("filemanager/.$userId.id.$user.-folder");
            return self::view("file");
        }
        else
        {
            //echo "it already exist";
            $files = scandir("filemanager/.$userId.id.$user.-folder");
            return self::view("file");
        }
    }

    public function upload()
    {
        //echo "uploading the file";
        $user= Session::get('user')->getName();
        $userId=Session::get('user')->getId();

        $folder = "filemanager/.$userId.id.$user.-folder";
        $target_file = $folder . basename($_FILES['fileToUpload']['name']);
        $uploadOk =1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        
    }

    public function delete()
    {
        echo "deleting file";
    }
}

?>