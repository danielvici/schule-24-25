<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$summe = 0;
echo "<p>Schleife 10</p>";
for ($i = 1; $i <= 10; $i++) {
    $summe += $i;
}
echo "<p>Summe: $summe</p>";
echo "<p>Schleife 100</p>";
for ($i = 1; $i <= 100; $i++) {
    $summe += $i;
}
echo "<p>Summe: $summe</p>";
echo "<p>Schleife 1000</p>";
for ($i = 1; $i <= 1000; $i++) {
    $summe += $i;
}
echo "<p>Summe: $summe</p>";
?>
</body>
</html>