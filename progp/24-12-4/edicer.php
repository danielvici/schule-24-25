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
            margin: 12px 0;
            padding: 8px;
            background-color: #333;
            color: white;
            font-family: sans-serif;
            font-weight: bold;
            text-align: center;
        }
        .board {
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="edicer.php">
        <label>Wie oft soll gewürfelt werden?</label>
        <input type="number" min="1" name="anzahl_wuerfel"><br>
        <button type="submit">Würfel</button>
    </form>
    <label>(Die Ergebnisse werden sortiert wie folgt sortiert: Klein >> Groß</label>
    <h1>-----------------------------</h1>
    <div class="board">
    <?php 
    $augen_array = [];

    $augen = rand(1,6);
    $anzahl = $_REQUEST['anzahl_wuerfel'];
    
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
    for ($i=0; $i<$anzahl; $i++){
        echo "<img width = '10%' src = '../bilder/$augen_array[$i].png' alt='$augen_array[$i] Augen'>\n";
    }
    $summe = array_sum($augen_array);
    echo "<div class='ausgabe'>Die Summe der Augenzahlen beträgt $summe</div>";
    echo "</div>"
    ?>
</body>
</html>