<?php
    $tmp_path = $_FILES['MY_FILES']['tmp_name'];
    echo $tmp_path."<br/>";
    $file_name = $_FILES['MY_FILES']['name'];
    echo "File Name ".$file_name."<br/>";
    $file_size = $_FILES['MY_FILES']['size'];
    echo "File Size ".$file_size."<br/>";
    $file_type = $_FILES['MY_FILES']['type'];
    echo "File Type ".$file_type."<br/>";

    $upload_dir = 'image/';

    //Split Operation
    $new_type = explode('.',$file_name);
    //print_r($new_type);
    //md5
    //md5(time() . $fileName)
    //echo time();
    //echo md5(time().$new_type[0]);

    //Encryption
        //logesh123 sbndkjfsdf2809340832ndsklnfrr32uri
    //Decryption

    if($new_type[1] == 'jpg' || $new_type[1] == 'jpeg' || $new_type[1] == 'png' || $new_type[1] == 'gif')
    {
        $dest_path = $upload_dir.md5(time().$new_type[0]).".".$new_type[1];
        //$dest_path = $upload_dir.$new_type[0].".".$new_type[1];
       
        if(move_uploaded_file($tmp_path,$dest_path))
        {
            echo "File Uploaded Successfully!";
        }
        else{
            echo "Unable to Upload";
        }
    }
    else{
        echo "Invalid File Format!";
    }
     
    




?>