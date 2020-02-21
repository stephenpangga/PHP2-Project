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
                <td> <?= $file?> </td>
                <td> <a href = "/file/delete?name=<?=$file?>" ><button onclick="confirmDelete(this.id)" id="<?=$file?>"> Delete </button> </a></td>
            <?php endif;?>
    </tr>
    <?php endforeach;?>
</table>
</body>

<?php
///onclick = "deleteFile(this.id)" id="'. $filename .'"
?>

<form name= "upload" method = "POST" action = "/file/upload" enctype="multipart/form-data">
<input type= "file" name="fileToUpload" id ="fileToUpload">
<button type = "submit"> Upload </button>
</form>



<script>

    function confirmDelete(filename)
    {
        if(confirm('please confirm deletion of the' + filename))
        {
            window.location.replace('delete?name=' +filename);
        }
    }
</script>