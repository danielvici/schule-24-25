<!---
Erstellen Sie ein numerisches Array $messwerte in dem Messwerte aufgelistet sind mit
folgenden Werten:
12.0, 11.5, 14.0, 12.2, 12.0

Ermitteln Sie jeweils den Durchschnitt, den maximalen und den minimalen Messwert.
Benutzen Sie zur Berechnung des Durchschnitts eine Schleife und beim min/max eine
Schleife in Verbindung mit einer Verzweigung.
Geben Sie die entsprechenden Werte aus.
Erweiterung:
Formulieren Sie jeweils eine Funktion für die obigen Probleme

-->
<?php 
    $messwerte =[12.0, 11.5, 13.0, 12.2, 12.0];
    // Functions
    function avg($array){
        $ergebnis = 0;
        for ($i = 0; $i < count($array); $i++){
            $ergebnis+=$array[$i];
        }
        $ergebnis/= count($array);
        return $ergebnis;
    }
    $max_array = max($messwerte);
    $min_array = min($messwerte);
    echo "Durschnitt: ". avg($messwerte).", Höchster Wert: $max_array, kLEINSTER aRRAY: $min_array."; 

?>