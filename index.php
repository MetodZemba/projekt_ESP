<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="10">
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

    echo '<h1> Index2.php  .txt</h1>';
    $sound = $_GET["snd"];
    $temp = $_GET["tmp"];
    $card = $_GET["crd"];
    
    if($sound != 0 && $temp != 0 && $card != 0){
    $file_data = "| $sound | $temp | $card |".PHP_EOL;
    $file_data .= file_get_contents('sensors.txt');
    file_put_contents('sensors.txt', $file_data);
    }

    $file2 = fopen("sensors.txt","r") or die("Unable to open file!");
    $text2 = fread($file2,filesize("sensors.txt"));
    $text_line = explode("|",$text2);


    $sound_txt = (int)$text_line[0];
    $temp_txt = (int)$text_line[1];
    $card_txt = (int)$text_line[2];
    
    echo "$sound_txt, $temp_txt, $card_txt";
    

    if ($sound_txt < 40){
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