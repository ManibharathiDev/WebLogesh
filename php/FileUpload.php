<?php
        $fileTmpPath = $_FILES['MY_FILE']['tmp_name'];

        $fileName = $_FILES['MY_FILE']['name'];
    
        $fileSize = $_FILES['MY_FILE']['size'];
    
        $fileType = $_FILES['MY_FILE']['type'];

        echo "File Temp Path =>".$fileTmpPath."<br/>";

        echo "File Name =>".$fileName."<br/>";

        echo "File Size =>".$fileSize."<br/>";

        echo "File Type =>".$fileType."<br/>";

        $fileNameCmps = explode(".", $fileName);

        $fileExtension = strtolower(end($fileNameCmps));

        echo $fileExtension." ".$fileNameCmps[1]."<br/>";

        $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

        $validExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc');

        if(in_array($fileExtension,$validExtensions))
        {
            echo "Valid File Extension<br/>";

            //$uploadDir = 'E:\Phps\upload';

            $uploadDir = 'upload/';

            $dest_path = $uploadDir . $newFileName;
            $message ="";
            if(move_uploaded_file($fileTmpPath, $dest_path)) 

             {

                 $message = 'File uploaded successfully.';

             }

             else 
             {
                $message = 'File Not uploaded';
             }

             echo $message;
        }
?>