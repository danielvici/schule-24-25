
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
require_once 'teilnehmer.php';
require_once 'tnintern.php';
echo "<h2>Daniel</h2>";
$tl = new tnintern("vici123", "daniel", "2BKI1", "IT");
$tl->getDaten();
echo "<br>";
echo "<h2>Aurelion Sol</h2>";
$tl = new tnintern("sol", "aurelion", "mage", "midde");
$tl->getDaten();
?>
<br>
<p>Über mir sollte php code ausgeführt werden</p> 
</body>
</html>