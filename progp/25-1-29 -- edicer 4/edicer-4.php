<?php 
session_start();

$augen_array = [];
$einsatz = 1;
$anzahl = 5;

if (!isset($_SESSION['kontostand'])){
    $_SESSION['kontostand'] = 100;
}
$gewinn = 0;

for ($i = 0; $i < $anzahl; $i++){
    $augen = rand(1, 6);
    $augen_array[] = $augen;
}

sort($augen_array);

function auswerten($augen_arr) {
    $gewinn_stufen = [
        0 => ["<h3>❌ KEIN GEWINN.❌</h3>", 0],
        1 => ["<h3>2️⃣ ZWEIERPASCH</h3>", 1],
        2 => ["<h3>2️⃣ DOPPEL ZWEIERPASCH</h3>", 2],
        3 => ["<h3>3️⃣ DREIERPASCH</h3>", 3],
        4 => ["<h3>🛣️ Kleine Straße</h3>", 5],
        5 => ["<h3>🏠 FULL HOUSE</h3>", 10],
        6 => ["<h3>🛣️ Große Straße</h3>", 15],
        7 => ["<h3>4️⃣ VIERERPASCH</h3>", 20],
        8 => ["<h3>🎉 KNIFFEL! 🎉</h3>", 100],
    ];

    $haeufigkeit = array_count_values($augen_arr);
    sort($haeufigkeit);

    if (count(array_unique($augen_arr)) == 1) return $gewinn_stufen[8]; // Kniffel
    if ($haeufigkeit === [1, 4]) return $gewinn_stufen[7]; // Viererpasch
    if ($augen_arr === [1, 2, 3, 4, 5] || $augen_arr === [2, 3, 4, 5, 6]) return $gewinn_stufen[6]; // Große Straße
    if ($haeufigkeit === [2, 3]) return $gewinn_stufen[5]; // Full House
    if (in_array([1, 1, 1, 1], $haeufigkeit)) return $gewinn_stufen[4]; // Kleine Straße
    if ($haeufigkeit === [1, 1, 3]) return $gewinn_stufen[3]; // Dreierpasch
    if ($haeufigkeit === [1, 2, 2]) return $gewinn_stufen[2]; // Doppel Zweierpasch
    if ($haeufigkeit === [1, 1, 1, 2]) return $gewinn_stufen[1]; // Zweierpasch

    return $gewinn_stufen[0]; // Kein Gewinn
}

$auswertung = auswerten($augen_array);
$_SESSION['kontostand'] -= 2;
$_SESSION['kontostand'] += $auswertung[1];
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>eDicer</title>
    <style>
        .text-bold {
    font-weight: bold;
}
.w {
    width: 10%;
}
.ausgabe{
    padding: 8px;
    background-color: #333;
    color: white;
    font-family: sans-serif;
    font-weight: bold;
    text-align: center;
}
.gewinn{
    margin: 1px;
    padding: 8px;
    background-color: darkgreen;
    color: white;
    font-family: sans-serif;
    font-weight: bold;
    text-align: center;
}
.board {
    text-align: center;
}
.wuerfeln {
    display: flex;
    justify-content: center;
    box-shadow: 0px 0px 27px 8px #3dc21b;
    background: linear-gradient(to bottom, #44c767 5%, #5cbf2a 100%); 
    background-color: #44c767;
    border-radius: 38px;
    border: 1px solid #18ab29;
    display: inline-block;
    cursor: pointer;
    color: #ffffff;
    font-family: Arial;
    font-size: 28px;
    font-weight: bold;
    padding: 23px 48px;
    text-decoration: none;
    animation: pulse-blur 1.5s infinite;
}

.wuerfeln:active {
    position: relative;
    top: 1px;
}
.wuerfeln:hover {
    background-color: red;
    box-shadow: 0px 0px 27px 8px red;
    background: linear-gradient(to bottom, red 5%, red 100%); 
    border-radius: 38px;
    border: 1px solid red;
    animation: pulse-blur-hover 1.5s infinite;
}

@keyframes pulse-blur {
    25% {
        box-shadow: 0px 0px 27px 8px #3dc21b;
    }
    50% {
        box-shadow: 0px 0px 37px 12px #3dc21b;
    }
    75% {
        box-shadow: 0px 0px 27px 8px #3dc21b;
    }

}

@keyframes pulse-blur-hover {
    25% {
        box-shadow: 0px 0px 27px 8px red;
    }
    50% {
        box-shadow: 0px 0px 37px 12px red;
    }
    75% {
        box-shadow: 0px 0px 27px 8px red;
    }
}

.kleine_info{
    font-style: italic;
    text-align: center;
    display: flex;
    justify-content: center;
}
.kopf-seite {
    justify-content: center;
    display: flex;
    text-align: center;
}
.ueberschrift {
    font-weight: bold;
}
.info {
    margin: 30px;
}
.casino_bild {
    border-radius: 25px;
}
    </style>
</head>
<body>
    <div class="kopf-seite">
        <div>
            <h1 class="ueberschrift">E DICER</h1><br>
            <a class="wuerfeln" href="edicer-4.php">Würfeln</a><br>
            <div class="info">
                <p class="kleine_info">Jeder Wurf kostet 1€</p>|
                <p class="kleine_info">Die Ergebnisse werden sortiert wie folgt sortiert: Klein >> Groß</p><br>
                <p class="kleine_info">powered by <a href="https://danielvici.de">Daniel</a></p>
                <img class="casino_bild" src="..\bilder\casino.jpeg" alt="Casino" width="450" height="200">
            </div>
        </div>
    </div>
    <div class="board">
        <?php foreach ($augen_array as $auge): ?>
            <img width="10%" src="../bilder/<?= $auge ?>.png" alt="<?= $auge ?> Augen">
        <?php endforeach; ?>
    </div>
    <div class="ausgabe">
        <h4>Die Summe der Augenzahlen beträgt <?= array_sum($augen_array) ?></h4>
    </div>
    <div class="gewinn">
        <?= $auswertung[0] ?>
        <p>Dein Gewinn ist <?= $auswertung[1] ?> €</p>
        <p>Guthaben: <?= $_SESSION['kontostand'] ?> €</p>
    </div>
</body>
</html>
