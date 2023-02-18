<?php
    //Read Mode
    $filename = "logesh.txt";
    $fRead = fopen($filename,"r+"); // Open file for reading
    if($fRead == false)
    {
        echo "Your file is not exist!";
    }
    else{
        //echo "Your files is available";
        $filesize = filesize($filename);
        //echo "My File size is =>".$filesize;
        $filedata = fread($fRead,$filesize);
        //echo "My Data is => ".$filedata;
        fwrite($fRead,"I am the best!");
        fclose($fRead);
    }

    //Write Mode
    $wFileName = "logesh.txt";
    $fWrie = fopen($wFileName,"w+");
    if($fWrie == false)
    {
        echo "Your files is not available";
    }
    else{
        fwrite($fWrie,"I am doing the files!");

        $filesize = filesize($wFileName);
        //echo "My File size is =>".$filesize;
        $filedata = fread($fWrie,$filesize);
        echo "My Data is => ".$filedata;

        fclose($fWrie);
    }

