<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            margin: 12px 0;
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

        @keyframes pulse-blur {
            0% {
                box-shadow: 0px 0px 27px 8px #3dc21b;
            }
            50% {
                box-shadow: 0px 0px 37px 12px #3dc21b;
            }
            100% {
                box-shadow: 0px 0px 27px 8px #3dc21b;
            }
        }

        .kleine-info{
            font-style: italic;
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
    </style>
</head>
<body>
    <div class="kopf-seite">
        <div>
            <h1 class="ueberschrift">E DICER</h1><br>
            <a class="wuerfeln" href="edicer-weiter.php">Würfeln</a><br>
            <div class="info">
                <p class="kleine_info">Die Ergebnisse werden sortiert wie folgt sortiert: Klein >> Groß</p>
                <p class="kleine_info">powered by Daniel</p>
            </div>
        </div>
    </div>
    <div class="board">
    <?php 
    $augen_array = [];

    $anzahl = 5;
    // Array füllen
    for ($i=1; $i<=$anzahl; $i++){
        $augen = rand(1,6);
        $augen_array[] = $augen;
        //echo "<img width = '10%' src = '/bilder/$augen.png' alt='$augen Augen'>\n";
    }
    // Array ausgeben
    /*echo "<pre>";
    print_r($augen_array);
    echo"</pre>";
    */
    sort($augen_array);
    $haeufigkeit = array_count_values($augen_array);
    sort($haeufigkeit);

    // Die Würfel zeigen 
    for ($i=0; $i<$anzahl; $i++){
        echo "<img width = '10%' src = '../bilder/$augen_array[$i].png' alt='$augen_array[$i] Augen'>\n";
    }

    // Ausgabe der Augenzahlen
    $summe = array_sum($augen_array);
    echo "<div class='ausgabe'>";
    echo "<h2> Die Summe der Augenzahlen beträgt $summe </h2>";
    echo "</div>";
    echo "<div class='gewinn'>";

// GEWINN ERMITTELN
    // KNIFFEL
    if (count(array_unique($augen_array))==1){ // Fünf gleiche Zahlen = Kniffel
        echo "<h1>🎉 KNIFFEL! :) 🎉</h1>";
        echo "<h2>5️⃣</h2>";
    }
    // VIERERPASCH
    elseif ($haeufigkeit === [1,4]){ // das geht auch um 3 gleiche zu bekommen
        echo "<h1>4️⃣ VIERERPASCH :) 🎉</h1>";
    }
    // FULL HOUSE
    elseif ($haeufigkeit === [2,3]) { 
        echo "<h1>3️⃣ FULL HOUSE :) 🎉</h1>";
    }
    // DREIERPASCH
    elseif ($haeufigkeit === [1,1,3]) { 
        echo "<h1>3️⃣ DREIERPASCH :) 🎉</h1>";
    }
    // DOPPEL ZWEIERPASCH
    elseif ($haeufigkeit === [1,2,2]) { 
        echo "<h1>2️⃣ DOPPEL ZWEIERPASCH </h1>";
    }
    // ZWEIERPASCH
    elseif ($haeufigkeit === [1,1,1,2]) { 
        echo "<h1>2️⃣ ZWEIERPASCH :/ 🆗</h1>";
    }
    // KEIN GEWINN
    else{
        echo "<h1>❌ KEIN GEWINN.❌</h1>";
        echo "<h2>:( </h2>";
    }
    echo "</div>";
    ?>
</body>
</html>
