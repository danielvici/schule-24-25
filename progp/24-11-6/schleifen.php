<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Kontrollstrukturen: Schleifen</h1>
    <?php

    echo "<h2>For-Schleife (kopfgesteuerte Schleifen)</h2>";

    // for(Startwert, Wiederholbedingung (mit Endwert), Schrittweite)
    for ($i = 0; $i < 10; $i++) { // Schleifen Kopf
        echo "Zahl: $i<br>";  // Schleifen Rumpf
    }

    echo "========================<br>";

    for ($i = 10; $i >= 0; $i--) {
        echo "Zahl: $i<br>";
    }

    echo "========================<br>";

    for ($i = 0; $i < 10; $i += 20) {
        echo "Zahl: $i<br>";
    }

    echo "<h2>While-Schleifen (kopfgesteuerte Schleifen)</h2>";

    $i = 1; // Startwert
    while($i <= 10) { // Schleifen Kopf mit Wiederholbedingung(Endwert)
        echo "Zahl: $i<br>";  // <- Schleifen Rumpf
        $i++; // Schrittweite
    }

    echo "========================<br>";

    $i = 10;
    while ($i >= 1) {
        echo "Zahl: $i<br>";
        $i--;
    }

    echo "========================<br>";

    $i = -100;
    while ($i <= 100) {
        echo "Zahl: $i<br>";
        $i+=20;
    }
    ?>
</body>
</html>