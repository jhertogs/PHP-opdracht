<?php  include_once("form.php") ?>

<!DOCTYPE html>
<html lang="en"> </html>
<head> 
    <meta  charset="UTF-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <title> PHP opdracht - vertaler</title>
</head>
<body>

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

