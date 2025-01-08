<style>
    span {
        font-weight: bold;
    }
</style>
<?php
// Vorbereitung KA2

// 1. Portokosten
// UML. holePortokosten(gewicht: float): integer

/* UML Schreibweise einer Methode/Funktion
Allgemein
myFunction(para1: type1, para2: type2, ...): retType

Beispiel
holePortokosten(gewicht: float): integer

*/
// ##############
// # Funktionen #
// ##############
// SG 1 -> IN KA 1 AUFGABE
echo "<h1>Portokosten</h1>";

function holePortokosten(float $gewicht):int {
    $porto = 0.0;
    if ($gewicht > 0.0 && $gewicht < 1.0){
        $porto = 150;
    } elseif ($gewicht >= 1.0 && $gewicht < 5.0){
        $porto = 540;
    } elseif ($gewicht >= 5.0 && $gewicht <= 25.0){
        $porto = 1290;
    } else {
        $porto = -1;
    } return $porto;
}

// ########
// # TEST #
// ########

$gewicht = 1000;
$gewicht_f = number_format($gewicht, 2, ",", ".");
$porto = holePortokosten($gewicht);

if ($porto == -1){
    echo "<p>Das Gewicht <span>$gewicht</span> ist nicht zulässig. Es ist zu <span>Schwer</span></p>";
} else {
    $porto_euro = $porto / 100;
    $porto_euro_f = number_format($porto_euro, 2, ",", ".");    
    echo "<p>Ihr Paket mit <span>$gewicht</span> kg kostet <span>$porto_euro_f</span> €</p>";
}



// SG 2
echo "<h1>Quersumme</h1>";
// 37652 => Quersumme = 3+7+6+5+2 = 23
// UML. berechneQuersumme(zahl: int): int
$qr_zahl = 37652;

echo "<p>Zahl: <span>$qr_zahl</span></p>";

function berechneQuersumme(int $zahl):int {
    $quersumme = 0;
    while ($zahl > 0){
        $quersumme += $zahl % 10;
        $zahl = intdiv($zahl, 10);
    }
    return $quersumme;
}

echo "Berechnete Quersumme: " + berechneQuersumme($qr_zahl);
?>