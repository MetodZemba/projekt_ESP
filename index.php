<?php
        
        $sn1 = $_GET["a"];
        
        $file1 = fopen("info_form.txt","a") or die("Unable to open file!");
        
        fwrite($file1, $sn1);
        fclose($file1);
    
    ?>