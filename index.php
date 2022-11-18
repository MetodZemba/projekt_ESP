<html>
<head>
	<title>Registration Form php</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="form_assignment/CSS_style.css" media="screen">
</head>
<body>

    <h3>Hodnotiaci formulár</h3>

<form action="" method="post">
    <div class="form_r1">

    
    <label for="name">Meno:</label>
    <input type="text" id="name" name="name" value="" placeholder="Vaše meno" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="" placeholder="Váša emailová adresa" required><br>
    </div>
    <div class="form_URL">
    <label for="URL">URL pre nahratia obrázka:</label>
    <input type="URL" id="URL" name="URL" value="" placeholder="Webová adresa obrzáka"><br>
    </div>
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
    <p>Vaše navštivené parky:</p>
    <div class="checkbox">
        <div>
            <input type="checkbox" id="TANAP" name="TANAP" value="TANAP">
            <label for="TANAP" class="light">TANAP</label><br>
        </div>
        <div>
            <input type="checkbox" id="NAPANT" name="NAPANT" value="NAPANT">
            <label for="NAPANT" class="light">NAPANT</label><br>
        </div>
        <div>
            <input type="checkbox" id="NPVF" name="NPVF" value="NPVF">
            <label for="NPVF" class="light">NPVF</label><br>
        </div>
        <div>
            <input type="checkbox" id="NPSK" name="NPSK" value="NPSK">
            <label for="NPSK" class="light">NPSK</label><br>
        </div>
        <div>
            <input type="checkbox" id="NPP" name="NPP" value="NPP">
            <label for="NPP" class="light">NPP</label><br>
        </div>
        <div>
            <input type="checkbox" id="NPMF" name="NPMF" value="NPMF">
            <label for="NPMF" class="light">NPMF</label><br>
        </div>
        <div>
            <input type="checkbox" id="NPMP" name="NPMP" value="NPMP">
            <label for="NPMP" class="light">NPMP</label><br>
        </div>
        <div>
            <input type="checkbox" id="NPSR" name="NPSR" value="NPSR">
            <label for="NPSR" class="light">NPSR</label><br>
        </div>
        <div>
            <input type="checkbox" id="PIENAP" name="PIENAP" value="PIENAP">
            <label for="PIENAP" class="light">PIENAP</label><br>
        </div>
    </div>
    <p><label for="textarea">Váš názor parkov:</label></p>
    <textarea id="textarea" name="textarea" rows="3" placeholder="Váš názo navštivených parkov, plusy a mínusy..." required>
    </textarea><br>


    <label for="key_words">Kľučové slová:</label>
    <input list="keywords" name="key_words" id="key_words" placeholder="Kĺučové slová pre vaše hodnotenie" required>
    <datalist id="keywords">
        <option value="Slovenské parky">
        <option value="Parky">
        <option value="Rozloha Slovenských parkov">
        <option value="Slovensko a parky">
        <option value="Slovenská príroda">
    </datalist>

    <div class="buttons">
    <button type="submit">Send</button>
    <input type="reset" value="Reset" class="reset_btn">
    </div>
</form>


<?php
        echo 'Form';

        $sn1 = $_POST["firstname"];
        $sn2 = $_POST["lastname"];
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
