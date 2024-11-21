<style>
    .ergebnis {
        background-color: lightblue;
        border: 2px solid black;
        margin: 5px;
    }
    span {
        font-weight: bold;
    }
</style>
<h1>Reiskörner auf Schachbrett</h1>
<?php

$felder = 64;
$koerner =1;
$gewichtProReiskorn= 0.02;

$gesamtReiskörner = 0;
$gesamtGewicht = 0;

for ($i = 1; $i < $felder; $i++) {
    $gesamtReiskoerner +=$koerner;

    $gewichtFeld = $koerner * $gewichtProReiskorn;
    $gesamtGewicht += $gewichtFeld;

    echo "<p class='ergebnis'>Körner auf dem <span>$i.</span> Feld. Körner: <span>$koerner</span>.</p> ";
    // Körner verdoppeln
    $koerner = $koerner*2;
}
echo "Gewicht: <span>".number_format($gesamtGewicht, 3)."</span> g; <span>". number_format($gesamtGewicht/1000)."</span> kg";
?>