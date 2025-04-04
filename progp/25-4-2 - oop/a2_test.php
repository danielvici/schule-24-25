
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Teilnehmer</h1>
<?php
ini_set("display_errors", "on");
require_once 'a2_klassen.php';
echo "<h2>Daniel</h2>";
$vz = new vollzeit("Daniel", "2000-01-01", 3000, 1000);
$vz->getInfo();
echo "<br>";
echo "<h2>Aurelion Sol</h2>";
$tz = new teilzeit("Aurelion Sol", "2000-01-01", 3000, 20, 15);
$tz->getInfo();
?>
<br>
<p>Über mir sollte php code ausgeführt werden</p> 
</body>
</html>