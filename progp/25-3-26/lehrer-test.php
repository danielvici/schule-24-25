<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
ini_set("display_errors", "on");
require_once "lehrer-class.php";
require_once "schueler-class.php";
require_once "personen-class.php";

// --------------------
// L E H R E R  T E S T
// --------------------

echo "<h2>Lehrer</h2>";
$l = new Lehrer("Michael", "Staudt", 13);
$l->ausgabe();
if($l->befoerdern()){
    echo "<p>Beförderung erfolgreich!</p>";
    echo "Neue Stufe: ".$l->getGehaltsstufe()."</p>";
}else { 
    echo "<p>Beförderung nicht erfolgreich, da höchste Stufe erreicht</p>";
}


// ------------------------
// S C H U E L E R  T E S T
// ------------------------

echo "<h2>Schüler</h2>";
$s = new Schueler("daniel", "vici123", "2BKI1");
$s->ausgabe();

// --------------------
// P E R S O N  T E S T
// --------------------

echo "<h2>Personen</h2>";
$p = new Person("danielvici", "123");
$p->ausgabe();

?>   
<br>
<p>Über mir sollte php code ausgeführt werden</p> 
</body>
</html>