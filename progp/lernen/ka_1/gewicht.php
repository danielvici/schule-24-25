<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
        .text-green {
            color: green;
        }
        .text-red {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Gewichtsprüfung</h1>
    <?php
        ini_set("display_errors", "on");
        // Vorgegeben
        $gewicht_min = 50;
        $gewicht_max = 80;
        

        // CODE
        $gewicht = $_REQUEST["name_gewicht"];

        if ($gewicht == "") {
            echo "<p>Sie müssen ein Gewicht eingeben.</p>";
        } else {
            echo "Gewicht: $gewicht <br>";

            if ($gewicht < $gewicht_min){
                $gewicht_diff = $gewicht_min - $gewicht;
                echo "<p class='text-red'>Springer ist mit $gewicht kg um $gewicht_diff kg zu leicht. </p>";
            } elseif ($gewicht > $gewicht_max) {
                $gewicht_diff = $gewicht - $gewicht_max;
                echo "<p class='text-red'>Springer ist mit $gewicht kg um $gewicht_diff kg zu schwer. </p>";
            } else {
                echo "<p class='text-green'>Gewicht OK <p>";
            }
        }

    ?>
    <a href="gewicht.html">ZURÜCK</a>
</body>
</html>