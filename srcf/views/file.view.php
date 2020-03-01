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
            $files = scandir("srcf/filemanager/.$userId.id.$user.-folder");
    foreach($files as $file):
    //i need a checker to not show directory files?>
    <tr>
        <?php if(is_dir($file) == 'directory'):?>
            <?php else:?>
                <td> <?= $file?> </td>
                <td> <?= $file?> </td>
                <td> <button onclick="confirmDelete(this.id)" id="<?=$file?>"> Delete </button></td>
            <?php endif;?>
    </tr>
    <?php endforeach;?>
</table>
</body>

<?php
///onclick = "deleteFile(this.id)" id="'. $filename .'"
//<form name= "upload" method = "POST" action = "/file/upload" enctype="multipart/form-data">
?>

<form name="myForm" action="/file/upload" onsubmit="return validateForm()" method="POST" enctype="multipart/form-data">
<input type= "file" name="fileToUpload" id ="fileToUpload">
<button type = "submit" > Upload </button>
</form>

<script>

    function confirmDelete(filename)
    {
        if(confirm('please confirm deletion of the' + filename))
        {
            //the last part of the link is the name of the file to be sent as parameter
            window.location.replace('/file/delete/' +filename);
        }
    }
    function validateForm() 
    {
        var x = document.forms["myForm"]["fileToUpload"].value;
        if (x == "") 
        {
            alert("Please choose a file");
        return false;
        }
    }

</script>