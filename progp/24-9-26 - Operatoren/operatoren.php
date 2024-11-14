<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    /*Rechen Operatoren*/
    $zahleins=3*2+2.5*4-3;
    echo $zahleins."<br>";

    $zahlzwei=3*(2+2.5)*4-3;
    echo $zahlzwei."<br>";

    $zahldrei=23/4;
    echo $zahldrei."<br>";

    $zahlenvier=23%4;
    echo $zahlenvier."<br>";
    /* Vergleich Operatoren*/
    /* > größer als, >= größer gleich, 
    < kleiner als, <= kleiner gleich, 
    == gleich, != ungleich*/

    /*Logische Operatoren
    && AND (und)
    || OR (oder)
    ! NOT (NICHT)
    true und false sind Werte, nicht Operatoren.
    */

    $zahl5=5;
    $zahl5+=7; /* Addiert der Zahl 7 und gibt den neuen Wert zurück */
    echo $zahl5."<br>";
    $zahl5-=3; /* Subtrahiert die Zahl 3 und gibt den neuen Wert zurück */
    echo $zahl5."<br>";
    $zahl5*=3; /* Multipliziert die Zahl mit 3 und gibt den neuen Wert zurück */
    echo $zahl5."<br>";
    $zahl5/=9; /* Dividiert die Zahl durch 9 und gibt den neuen Wert zurück */
    echo $zahl5."<br>";
    
    $a=5;
    echo $a."<br>";
    $a++; /* Fügt der Zahl 1 hinzu.*/
    echo $a."<br>";
    $a--; /* Zieht der Zahl 1 ab*/
    echo $a."<br>";
?>
</body>
</html>