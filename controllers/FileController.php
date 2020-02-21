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

        $folder = 'filemanager/.'.$userId.'.id.'.$user.'.-folder/';
        $target_file = $folder .basename($_FILES['fileToUpload']['name']);
        $uploadOk =1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
            //echo "The file" . basename($_FILES["fileToUpload"]["name"]). "has been uploaded.";
            return self::view("file");
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        
    }

    public function delete()
    {
        $user= Session::get('user')->getName();
        $userId=Session::get('user')->getId();

        $basedir = 'filemanager/.'.$userId.'.id.'.$user.'.-folder/';
        $filename = $_GET['name'];

        unlink($basedir . $filename);

        echo "deleting file";
        return self::view('/file');
    }
}

?>