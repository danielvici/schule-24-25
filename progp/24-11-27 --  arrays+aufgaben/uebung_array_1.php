<?php
// Aufgab:
// Array Erstellen 20 Zufälligen Zahlen mit rand()
// Berechne die Summe, durschnitt, Median(der mittlere wert des Arrays), Quadratischer Mittelwert,
// Quadratischer Mittelwert), Anzahl der Geraden und ungeraden
$zahlen = []; // Leeres Array deklarieren

for ($i = 1; $i <= 20; $i++) {
    $random_zahl = rand(1,100);
    echo "$i: $random_zahl <br>";
    $zahlen[] = $random_zahl;
}
echo "<pre>";
print_r($zahlen);
echo "</pre>";

?>