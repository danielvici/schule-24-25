<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Volleyball: Spieler anzeigen</h1>
    <h3>Wälen sie im aus was sie sehen möchten:</h3>
    <form action="aufstellung.php">
        <select name="ausgabe_n" id="asugabe_id">
            <option value="startaufstellung">Startaufstellung</option>
            <option value="ersatzspieler">Ersatzspieler</option>
            <option value="kader">Kader</option>
        </select>
        <button type="submit">Anzeigen</button><br>
    </form>
</body>
</html>
<?php 

$info_auswahl = $_REQUEST["ausgabe_n"];

$startaufstellung = ["Armin", "Batu","Kai", "Sven", "Paul", "Milan"];
$ersatz = ["Chris", "Dennis", "Emin", "Goran", "Luca" ,"Nico"];
if ($info_auswahl != ""){
    echo "<h2>".$info_auswahl."</h2>";
    echo "----------------------------<br>";
} else{
    echo " ";
}

function ausgabe($wer){
    for($i=0; $i < count($wer); $i++){
        echo $wer[$i]."<br>";
    }
}

switch ($info_auswahl) {
    case "startaufstellung":
        ausgabe($startaufstellung);
        break;
    case "ersatzspieler":
        ausgabe($ersatz);
        break;
    case "kader":
        ausgabe($startaufstellung);
        ausgabe($ersatz);
        break;
    default:
        echo " ";
}

?>