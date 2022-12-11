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
    // https://www.auris-audio.cz/files/static_pages_files/images/zdroje%20hluku%20%20-%20hladiny%20hluku%20v%20dB(1).jpg
    $count = 0;
    $sound_z = 40;
    $sound_o = 70;

    $temp_max = 25;

    echo '<h1>Factory Dashboard </h1> ';
    $sound = $_GET["snd"];
    $temp = $_GET["tmp"];
    $card = $_GET["crd"];
    
    if($sound != 0 && $temp != 0){
    $file_data = "| $sound | $temp | $card |".PHP_EOL;
    $file_data .= file_get_contents('sensors.txt');
    file_put_contents('sensors.txt', $file_data);
    $count = $count + 1;

    }

    $file2 = fopen("sensors.txt","r") or die("Unable to open file!");
    $text2 = fread($file2,filesize("sensors.txt"));
    $text_line = explode("|",$text2);


    $sound_txt = (int)$text_line[1];
    $temp_txt = (int)$text_line[2];
    $card_txt = (int)$text_line[3];
    if($card_txt == 1){
        $door_stat = "open";
    }
    else{
        $door_stat = "closed";
    }
    

    if($sound_txt >= $sound_o){
        if($temp_txt > $temp_max && $card_txt == 1){
            echo "<img src='č_svetlo/1_1_1.png' class = 'img_1' >";
            echo "č_svetlo/1_1_1.png";
        }
        if($temp_txt > $temp_max && $card_txt == 0){
            echo "<img src='č_svetlo/1_0_1.png' class = 'img_1' >";
            echo "č_svetlo/1_0_1.png";
        }
        if($temp_txt < $temp_max && $card_txt == 0){
            echo "<img src='č_svetlo/1_0_0.png' class = 'img_1' >";
            echo "č_svetlo/1_0_0.png";
        }
        if($temp_txt < $temp_max && $card_txt == 1){
            echo "<img src='č_svetlo/1_1_0.png' class = 'img_1' >";
            echo "č_svetlo/1_1_0.png";
        }
    }
    elseif ($sound_txt >= $sound_z) {
        if($temp_txt > $temp_max && $card_txt == 1){
            echo "<img src='o_svetlo/1_1_1.png' class = 'img_1' >";
            echo "o_svetlo/1_1_1.png";
        }
        if($temp_txt > $temp_max && $card_txt == 0){
            echo "<img src='o_svetlo/1_0_1.png' class = 'img_1' >";
            echo "o_svetlo/1_0_1.png";
        }
        if($temp_txt < $temp_max && $card_txt == 0){
            echo "<img src='o_svetlo/1_0_0.png' class = 'img_1' >";
            echo "o_svetlo/1_0_0.png";
        }
        if($temp_txt < $temp_max && $card_txt == 1){
            echo "<img src='o_svetlo/1_1_0.png' class = 'img_1' >";
            echo "o_svetlo/1_1_0.png";
        }
    }
    else{
        if($sound_txt < $sound_z && $temp_txt > $temp_max && $card_txt == 1){
            echo "<img src='č_svetlo/1_1_1.png' class = 'img_1' >";
            echo "č_svetlo/1_1_1.png";
        }
        if($sound_txt < $sound_z && $temp_txt > $temp_max && $card_txt == 0){
            echo "<img src='č_svetlo/1_0_1.png' class = 'img_1' >";
            echo "č_svetlo/1_0_1.png";
        }
        if($sound_txt < $sound_z && $temp_txt < $temp_max && $card_txt == 0){
            echo "<img src='z_svetlo/1_0_0.png' class = 'img_1' >";
            echo "z_svetlo/1_0_0.png";
        }
        if($sound_txt < $sound_z && $temp_txt < $temp_max && $card_txt == 1){
            echo "<img src='č_svetlo/1_1_0.png' class = 'img_1' >";
            echo "č_svetlo/1_1_0.png";
        }
    }

    echo("<meta http-equiv='refresh' content='2'>"); //Refresh by HTTP 'meta'
    echo date('H:i:s Y-m-d');
    echo "<br>";
    echo "
            <p><b>Room noise level:</b> {$sound_txt}</p>
            <p><b>Room temperature:</b> {$temp_txt}</p>
            <p><b>Room door:</b> {$door_stat}</p>
        "; 
    
    
    
    
    
    
    fclose($file2);
    
    


    
?>
</body>
</html>