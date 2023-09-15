<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $naam = $_POST["naam"];
    $land = $_POST["land"];
    
switch($land){
    case "NL":
        echo 'Goedemorgen ' .$naam;
        break;
    case "EN":
        echo 'Good morning ' .$naam;
        break;
    case "FR":
        echo 'bonjour ' .$naam;
        break;
    case "ES":
        echo 'buen dia ' .$naam;
        break;
    case "IT":
        echo 'buongiorno ' .$naam;
        break;
    case "DE":
        echo 'guten morgen ' .$naam;
        break;
    case "Keuze":
        echo '<span style="color:#fa0000;"> Selecteer eerst een land! </span> ';
}
}


?>