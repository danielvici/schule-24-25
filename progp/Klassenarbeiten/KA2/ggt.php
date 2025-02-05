<?php
// #################
// #      NAME     #
// # DANIEL CWIKLA #
// #################
echo "<h2>Größter Teiler</h2>";
$zahl_a = 1071;
$zahl_b = 1029;

function ggt(int $a, int $b):int {
    $ausgabe = "NIX";
    $gr_rest = array();
    if ($a > $b) {
        $rest = $b;
        echo "rechnen...<br>";
        while($rest != 0){
            $rest = $a % $rest;
            //echo $rest."<br>";
            $gr_rest[] = $rest;
        }
        array_pop($gr_rest);
        echo "Der größte Teiler ist: " . $gr_rest[count($gr_rest)-1];
        echo "<br> Zahlen: ".$a." und ".$b ;
    }else {
        echo"a darf nicht kleiner als b sein!<br>";
        $groester_teiler = -1;
        echo "Der größte Teiler ist: $groester_teiler";
        echo "<br> Zahlen: ".$a." und ".$b ;
    }
    
}
ggt($zahl_a, $zahl_b);

?>