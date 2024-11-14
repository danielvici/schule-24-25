<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Rechner</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f6;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-weight: bold;
            color: #555;
        }

        input[type="number"] {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 1rem;
            width: 100%;
        }

        button {
            padding: 12px;
            background-color: #1e90ff;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1rem;
            position: relative;
            z-index: 10; /* Höher als die oberen Elemente */
        }

        button:hover {
            background-color: #005bb5;
        }

        .result-container {
            margin-top: 20px;
        }

        .result-container strong {
            font-size: 1.1rem;
        }

        .orange {
            color: orange;
        }

        .green {
            color: green;
        }

        .red {
            color: red;
        }

        .bmi-label {
            display: inline-block;
            width: 100px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>BMI-EINGABE FORMULAR</h2>
        <form>
            <label for="kgr-cm">KÖRPERGRÖßE</label><a>(in cm)</a>
            <input type="number" min="20" max="300" id="kgr-cm" value="130" name="kgr" required>
            <label>cm</label>
            <button type="submit">Berechnen</button>
        </form>

        <div class="result-container">
        <?php
            $groesse = $_REQUEST['kgr'];
            $gewicht = 30;
            $i=0;

            if ($groesse == 0){
                echo "<p style='color:#000000;'>KEINE ZAHL ANGEBEN</p><br>";
            } else {
                echo "<h2>BMI - Berechnungsergebnisse</h2>";
                echo "Körpergröße: <strong>".$groesse." cm</strong><br><br>";

                while ($gewicht < 190){
                    $bmi = $gewicht / (($groesse/100) ** 2);
                    $bmi_rounded = round($bmi, 2);

                    // Bestimme die BMI-Kategorie
                    if ($bmi < 18.5) {
                        $class = "orange"; // untergewichtig
                        $label = "Untergewicht";
                    } elseif ($bmi >= 18.5 && $bmi < 25) {
                        $class = "green"; // normalgewicht
                        $label = "Normalgewicht";
                    } else {
                        $class = "red"; // übergewichtig
                        $label = "Übergewicht";
                    }

                    // Zeige das Ergebnis mit entsprechender Farbe
                    echo "<div><span class='bmi-label'>Gewicht: ".$gewicht." kg </span> -> BMI: <strong class='".$class."'>".$bmi_rounded." (".$label.")</strong></div><br>";
                    $i++;
                    $gewicht +=10;
                }
            }
        ?>
        </div>
    </div>

</body>
</html>
