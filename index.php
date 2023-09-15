<?php 
$naam = ""; $land = "";
function keepselect($selectedland){
    $land = "";
    if($land == $selectedland){echo "selected";}
}
 ?>
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
            <option value="NL" <?php keepselect("NL"); ?>>Nederland</option>
            <option value="DE" <?php keepselect("DE");?>>Duitsland</option>
            <option value="EN" <?php keepselect("EN"); ?>>Engeland</option>
            <option value="FR" <?php keepselect("FR"); ?>>Frankrijk</option>
            <option value="ES" <?php keepselect("ES"); ?>>Spanje</option>
            <option value="IT" <?php keepselect("IT"); ?>>Italie</option>
        </select>
        <br/>
        <input type="submit" name="submit" value="gegevens versturen"/>
</form>
<?php include_once("form.php")  ?>
</body>
</html>

