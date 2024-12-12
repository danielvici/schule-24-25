<?php 

$sost = ["8", "15","2","4","12","10","1"];
$tage = ["Montag", "Dienstag", "Mittwoch", "Donnerstag", "Freitag","Samstag", "Sontag"];

foreach ($sost as $key =>$value){
    $tag = $tage[$key];
    echo "<label>---$tag---</label><br>";
    echo "Am $tag waren es $value Stunde(n) Sonnenschein<br>";
    echo "Am Tag-Nr.: ". ($key+1). " gab es $value h Sonnenschein<br>";
}

?>