<?php
        echo 'Form';

        $sn1 = $_GET["firstname"];
        $sn2 = $_GET["lastname"];

        $file1 = fopen("info_form.txt","a") or die("Unable to open file!");
        
        fwrite($file1, $sn1);
        fwrite($file1, $sn1);
        fclose($file1);

        echo $sn1;
        echo $sn2;
        
    ?>