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
            <option value="NL">Nederland</option>
            <option value="DE">Duitsland</option>
            <option value="EN">Engeland</option>
        </select>
        <br/>
        <input type="submit" name="submit" value="gegevens versturen"/>
</form>
<?php
if(isset($_POST["submit"])){
    $naam = $_POST["naam"];
    $land = $_POST["land"];
    if($land=='NL'){
        echo 'Goedemorgen'.$naam;
    }
    elseif($land=='DE'){

    }
    elseif($land=='EN'){
        echo 'Good morning'.$naam;
    }

}

?>
</body>
</html>

