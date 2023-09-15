<!DOCTYPE html>
<html lang="en"> </html>
<head> 
    <meta  charset="UTF-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <title> PHP opdracht - vertaler</title>
</head>
<body>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $naam = $_POST["naam"];
    $land = $_POST["land"];
    if($land=='NL'){
        echo 'Goedemorgen ' .$naam;
    }
    elseif($land=='DE'){
        echo 'guten morgen '.$naam;

    }
    elseif($land=='EN'){
        echo 'Good morning '.$naam;
    }
    elseif($land=='FR'){
        echo 'bonjour '.$naam;
    }
    elseif($land=='ES'){
        echo 'Buen día '.$naam;
    }
    elseif($land=='IT'){
        echo 'Buongiorno '.$naam;
    }
    elseif($land=='Keuze'){
        echo '<span style="color:#fa0000;"> Selecteer eerst een land! </span>';
    }

}

?>
    <form method="post" action="">
        Naam: <input type="text" name="naam" placeholder="Uw naam" value="<?php if(isset($_POST["land"])){echo $_POST["naam"];}  ?>" required /><br/>
        Land: 
        <select name="land">
            <option value="Keuze">Maak uw keuze</option>
            <option value="NL" <?php if($land == "NL"){echo "selected";}?>>Nederland</option>
            <option value="DE" <?php if($land == "DE"){echo "selected";}?>>Duitsland</option>
            <option value="EN" <?php if($land == "EN"){echo "selected";}?>>Engeland</option>
            <option value="FR" <?php if($land == "FR"){echo "selected";}?>>Frankrijk</option>
            <option value="ES" <?php if($land == "ES"){echo "selected";}?>>Spanje</option>
            <option value="IT" <?php if($land == "IT"){echo "selected";}?>>Italie</option>
        </select>
        <br/>
        <input type="submit" name="submit" value="gegevens versturen"/>
</form>

</body>
</html>

