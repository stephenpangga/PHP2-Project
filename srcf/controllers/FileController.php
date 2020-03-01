<?php

class FileController extends Controller
{
    public function index()
    {
        $user= Session::get('user')->getName();
        $userId=Session::get('user')->getId();
        
        if(is_dir("srcf/filemanager/.$userId.id.$user.-folder") == false)
        {
        //create the folder for the specific user.
        //folder name will be userid.id.name.-folder
            mkdir("srcf/filemanager/.$userId.id.$user.-folder");
            return self::view("file");
        }
        else
        {
            //echo "it already exist";
            $files = scandir("srcf/filemanager/.$userId.id.$user.-folder");
            return self::view("file");
        }
    }

    public function upload()
    {
        //echo "uploading the file";
        
        $user= Session::get('user')->getName();
        $userId=Session::get('user')->getId();

        $folder = 'srcf/filemanager/.'.$userId.'.id.'.$user.'.-folder/';
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

    public function delete($filename)
    {
        $user= Session::get('user')->getName();
        $userId=Session::get('user')->getId();

        $basedir = 'srcf/filemanager/.'.$userId.'.id.'.$user.'.-folder/';
        
        //$filename = $_GET['name'];

        //if the file doesn't exist, just return to the page. to avoid warning that object that does not exist.
        if(empty($filename))
        {
            return self::view('/file');
        }
        else
        {
            unlink($basedir . $filename);
            //echo "deleting file";
            //return self::view('/file');
            header("Location: /file");
        }        
    }
}

?>