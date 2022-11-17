<?php
        echo '<h1>Form/h1>';

        $sn1 = $_GET["name"];
        $sn2 = $_GET["email"];

        $file1 = fopen("info_form.txt","a") or die("Unable to open file!");
        
        fwrite($file1, $sn1);
        fwrite($file1, $sn1);
        fclose($file1);
        
    ?>