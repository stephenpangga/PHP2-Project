<h1> File Manager </h1>


<body>
<table>
    <thead>
        <tr>
            <th> Name </th>
            <th> Type </th>
            <th> Action</th>
        </tr>
    </thead>
    <?php 
        $user= Session::get('user')->getName();
        $userId=Session::get('user')->getId();
            $files = scandir("filemanager/.$userId.id.$user.-folder");
    foreach($files as $file):
    //i need a checker to not show directory files?>
    <tr>
        <?php if(is_dir($file) == 'directory'):?>
            <?php else:?>
                <td> <?= $file?> </td>
                <td> <?= is_dir($file)? 'jpg' : 'regular file'?> </td>
                <td> <a href = "file/delete" ><button> Delete </button> </a></td>
            <?php endif;?>
    </tr>
    <?php endforeach;?>
</table>
</body>

<?php
///onclick = "deleteFile(this.id)" id="'. $filename .'"
?>

<form name= "upload" method = "POST" action = "file/upload" enctype="multipart/form-data">
<input type= "file" name="fileToUpload" id ="fileToUpload">
<button type = "submit"> Upload </button>
</form>
