<!DOCTYPE html>
<html lang="en"> </html>
<head> 
    <meta  charset="UTF-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <title> PHP opdracht - vertaler</title>
</head>
<body>
    <form method="post" action="">
        Naam: <input type="text" name="naam" placeholder="Uw naam"required /><br/>
        Land: 
        <select name="land">
            <option value="Keuze">Maak uw keuze</option>
            <option value="NL">Nederland</option>
            <option value="DE">Duitsland</option>
            <option value="EN">Engeland</option>
            <option value="FR">Frankrijk</option>
            <option value="ES">Spanje</option>
            <option value="IT">Italie</option>
        </select>
        <br/>
        <input type="submit" name="submit" value="gegevens versturen"/>
</form>
<?php
if(isset($_POST["submit"])){
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
</body>
</html>

