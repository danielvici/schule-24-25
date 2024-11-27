<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Arrays in PHP</h1>
    <h2>Numerische Arrays</h2>
<?php
/* Nicht praktikabel:
$note_1 = 2.3;
$note_2 = 4..3;
...
$note_20 = 1.3;
*/
// Aray explizit füllen:
$noten_liste[0] = "2.3";
$noten_liste[1] = "4.3";
$noten_liste[2] = "5.2";
$noten_liste[3] = "2.2";
$noten_liste[4] = "1.3";

// Array implizit füllen:
$notenliste = [2.3, 4.3, 5.2, 2.2, 1.3];

// Array ausgeben:
echo "$notenliste"; // Funktioniert nicht
echo "<br>";

// Array zum Debuggen mt print_r ausgeben
echo "<pre>";
print_r($notenliste);
echo "</pre>";

// Einzelne Stellen eines Arrays ausgeben:
echo $notenliste[3]; // gibt 2.2 aus

// Neuen Wert hinzufügen (an's Ende)
$notenliste[] = 6.0;
echo "<pre>";
print_r($notenliste);
echo "</pre>";

// Bestehenden Wert ändern (überschreiben)
$notenliste[2] = 4.2;
echo "<pre>";
print_r($notenliste);
echo "</pre>";

// Bestehenden Wert löschen
// Achtung: Index wird nicht neu erstellt (enspr. Index fehlt jetzt)
unset($notenliste[1]);
echo "<pre>";
print_r($notenliste);
echo "</pre>";

// Array sortieren (nach  Werten sortieren)
sort($notenliste); // (Zuordnung index - value aufgelöst)
//asort ($noten_liste); 
// assoziatives Sortieren (Zuordnung index - value bleibt erhalten)
echo "<pre>";
print_r($notenliste);
echo "</pre>";

// Benutzerfreundliche Ausgabe des Arrays 
for($i = 0; $i < 5; $i++){
    echo "Note:".($i+1)." $notenliste[$i]<br>";
}
echo "<br>";
// Benutzerfreundliche Ausgabe des Arrays  mit foreach
// geht nur bei Arrays
$nr = 1;
foreach ($notenliste as $note){
    echo "Note $nr: $note <br>";
    $nr++;
}
echo "<br>";

// Durschnitt berechnen
    // Variante 1: (Kurz)
$durschnitt = array_sum($notenliste) / count($notenliste);
echo $durschnitt;
    // Variante 2:
$sum = 0;
for($i=0; $i < count($notenliste); $i++){
    $sum = $sum + $notenliste[$i];
}
$ds = $sum/count($notenliste);
echo "<p>Durschnitt: $ds</p>";


// Höchsten Wert ermitteln
    // umständlich (ohne Funktion)
$schlechteste = 1.0;
for($i=0; $i < count($notenliste); $i++){
    if ($notenliste[$i] > $schlechteste){
        $schlechteste = $notenliste[$i];
    }
}
echo "<p>Schlechteste Note: $schlechteste</p>";

    // mit funktion
$schlechteste = max($notenliste);
echo "<p>Schlechteste Note: $schlechteste</p>";


// niedrigste Wert ermitteln
    // umständlich (ohne Funktion)
    $schlechteste = 6.0;
    for($i=0; $i < count($notenliste); $i++){
        if ($notenliste[$i] < $schlechteste){
            $schlechteste = $notenliste[$i];
        }
    }
    echo "<p>Schlechteste Note: $schlechteste</p>";
    
        // mit funktion
    $schlechteste = min($notenliste);
    echo "<p>Schlechteste Note: $schlechteste</p>";
?>
</body>
</html>