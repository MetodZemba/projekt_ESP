<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <style>
        .img_1 {
            width: 50%;
            height: auto;
        }
    </style>
</head>
<body>
<p>Here in your form and text</p>
<?php
    
    echo '<h1> Index3.php  .txt</h1>';

    $sn1 = $_GET["a"];

        
        $file1 = fopen("sensors.txt","r+") or die("Unable to open file!");
        $text1 = $sn1;
        
        fwrite($file1, $text1);
        fwrite($file1, "\n");
        fclose($file1);


        $file2 = fopen("sensors.txt","r") or die("Unable to open file!");
        $text2 = fread($file2,filesize("sensors.txt"));
        echo (int)$text2;
        fclose($file2);

        /*
        if ($num == 22){
            echo "<img src='č_svetlo/1_0_0.png' class = 'img_1' >";
        }
        else{
            echo "<img src='č_svetlo/1_1_1.png' class = 'img_1' >";
        }
        
        */
?>
</body>
</html>