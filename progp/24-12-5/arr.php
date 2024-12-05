<?php 
echo "<h1>assoziativen eindimensionalen Array</h1>";
// assoziativen eindimensionalen Array
$anwesenheit=["Mo"=> 15, "Di" => 20];

echo "<h1>Ausgabe der Arrayinformation</h1>";
// Ausgabe der Arrayinformation
var_dump($anwesenheit);
echo "<br>";

echo "<h1>hinzufügen und Ausgabe eines Elements</h1>";
// hinzufügen und Ausgabe eines Elements
$anwesenheit["Mi"] = 22;
echo $anwesenheit ["Mi"]. "<br>";

echo "<h1>hinzufügen eines Elements und Ausgabe aller Arrayinfos inkl. Datentypen</h1>";
// hinzufügen eines Elements und Ausgabe aller Arrayinfos inkl. Datentypen
$anwesenheit["Do"] = 10;
var_dump($anwesenheit);
echo "<br>";

echo "<h1>Ausgabe von key und value mit einer Schleife</h1>";
// Ausgabe von key und value mit einer Schleife
foreach($anwesenheit as $key => $value)
echo $key." ".$value."<br>";
?>