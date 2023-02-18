<?php
    $filename = "tmp.txt";
    $file = fopen($filename,"r"); // Opening File with only Read Mode
    if($file == false)
    {
        //echo("Error in opening file");
        exit();
    }

    $filesize = filesize($filename); // Getting the size of the file
   // echo "File Size=>".$filesize;
    $text = fread($file,$filesize); // Fetching data from the existing file
    fclose($file);
    //echo $text;

    $ofilename = "tmp.txt";
    $ofile = fopen($ofilename,"w"); // Opening file with only writ mode
    if($ofile == false)
    {
        //echo("Error in opening");
        exit();
    }
    fwrite($ofile,"Welcome Manibharathi I am good suguna\n");
    fclose($ofile);

    $readWriteFile = "mylog.txt";
    $rFile = fopen($readWriteFile,"r+");
    if($rFile == false)
    {
        echo("Error in opening");
        exit();
    }
    $rFileSize = filesize($readWriteFile);
    $texts = fread($rFile,$rFileSize);
    echo "File Text =>".$texts;
    fwrite($rFile,"This is for my log good morning");
    fclose($rFile);


    

