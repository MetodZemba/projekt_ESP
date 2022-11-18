<html>
<head>
	<title>Registration Form php</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="CSS_style.css" media="screen">
</head>
<body>

    <h3>Formular vašej zručnosti</h3>

<form action="" method="post">
    
<div class="form_r1">

    <label for="name">Meno:</label>
    <input type="text" id="name" name="name" value="" placeholder="Vaše meno" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="" placeholder="Váša emailová adresa" required><br>
    </div>
    <div class="form_URL">

    <p>Vaše pohlavie:</p>
    <div class="pohlavie">
        <div>
            <input type="radio" id="muz" name="radio_check" value="Muž">
            <label for="muz" class="light">Muž</label><br>
        </div>
        <div>
            <input type="radio" id="zena" name="radio_check" value="Žena">
            <label for="zena" class="light">Žena</label><br>
        </div>
        <div>
            <input type="radio" id="ine" name="radio_check" value="Neuvedené">+
        <label for="ine" class="light">Nechcem uviesť</label><br>
        </div>
    </div>
    <p>Vaše programatorské zručnosti:</p>
    <div class="checkbox">
        <div>
            <input type="checkbox" id="C#" name="C#" value="C#">
            <label for="C#" class="light">C#</label><br>
        </div>
        <div>
            <input type="checkbox" id="C++" name="C++" value="C++">
            <label for="C++" class="light">C++</label><br>
        </div>
        <div>
            <input type="checkbox" id="python" name="python" value="python">
            <label for="python" class="light">Python</label><br>
        </div>
        <div>
            <input type="checkbox" id="php" name="php" value="php">
            <label for="php" class="light">PHP</label><br>
        </div>
        <div>
            <input type="checkbox" id="java" name="java" value="java">
            <label for="java" class="light">Java</label><br>
        </div>
    </div>
    <p><label for="textarea">Niečo o vás:</label></p>
    <textarea id="textarea" name="textarea" rows="2" placeholder="Napište nám niečo o vás" required>
    </textarea><br>

    <label for="vek">Vek:</label>
    <input list="keywords" name="vek" id="vek" placeholder="Váš vek" required>
    <datalist id="keywords">
        <option value="15-18">
        <option value="19-30">
        <option value="30-50">
        <option value="51+">
    </datalist>

    <div class="buttons">
    <button type="submit">Send</button>
    <input type="reset" value="Reset" class="reset_btn">
    </div>
</form>


<?php
        echo 'Form';

        $sn1 = $_POST["name"];
        $sn2 = $_POST["email];
        /*
        $file1 = fopen("php_form//info_form.txt","a") or die("Unable to open file!");
        
        fwrite($file1, $sn1);
        fwrite($file1, $sn1);
        fclose($file1);
        */
        echo $sn1;
        echo $sn2;
        
    ?>


</body>
</html>
