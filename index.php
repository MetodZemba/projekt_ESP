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
    header("Refresh:2");

    echo '<h1> Index1.php  .txt</h1>';
    $sn1 = $_GET["a"];
    
    if($sn1 != 0){
    $file_data = $sn1.PHP_EOL;
    $file_data .= file_get_contents('sensors.txt');
    file_put_contents('sensors.txt', $file_data);
    }

    $file2 = fopen("sensors.txt","r") or die("Unable to open file!");
    $text2 = fread($file2,filesize("sensors.txt"));
    $num = (int)$text2;
    echo (int)$text2;
    

    if ($num == 22){
        echo "<img src='č_svetlo/1_0_0.png' class = 'img_1' >";
    }
    else{
        echo "<img src='č_svetlo/1_1_1.png' class = 'img_1' >";
    }
    fclose($file2);
    
    echo date('H:i:s Y-m-d');


    
?>
</body>
</html>