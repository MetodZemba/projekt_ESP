<?php
        
        $sn1 = $_GET["a"];
        $txt = "Donald Duck\n";

        $file1 = fopen("info_form.txt","a") or die("Unable to open file!");
        
        if ($sn1 == 4){
            fwrite($file1, $txt);
        }
        fclose($file1);

        if ($sn1 == 4){
            echo $txt;
            echo $sn1;
        }
    
    ?>