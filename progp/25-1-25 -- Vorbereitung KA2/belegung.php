<?php 
function sucheMinBelegung($zimmerliste, $weiblich) {
    $minIndex = -1;
    $belegung = 1.0;
    $minBelegung = 1;
    for ($idx = 0; $idx < zimmerliste.length; $idx++) {
        if ($zimmerliste[$idx].gibWeiblicheGeschlecht() == true){
            $belegung = $zimmerliste[$idx].gibAnzahlGaeste() / $zimmerliste[$idx].gibAnzahlBetten();
            if ($belegung < $minBelegung){
                $minBelegung = $belegung;
                $minIndex = $idx;
            }
        }

    }
}

?>