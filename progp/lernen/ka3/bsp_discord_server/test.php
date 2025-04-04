<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grundgerüst</title>
</head>
<body>
    <h1>Nicht Discord API</h1>
</body>
</html>

<?php
require_once "klassen.php";
echo "<h2>Text Channel</h2>";
$tc = new text_channel(1, "Rasselbande", 500, "Paulaner Garten", "umisakii" );
$tc->gettextchannel();
echo "<h2>Voice Channel</h2>";
$vc = new voice_channel(1, "Rasselbande", 500, ["danielvici123", "umisakii", "Pepper(oni)"] );
$vc->getvoicechannel();