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
        // Datum als String in einem Array aufteilen
        $datum = "29.02.1955";
        $datum_array = explode(".",$datum); // => [20, 02, 1900]

        // (int) -> macht die variable in ein zahl
        $tag = (int) $datum_array[0];
        $monat = (int) $datum_array[1]; // bsp 02 => 2
        $jahr = (int) $datum_array[2];

        $cq = ceil($monat / 3);

        echo "(CEIL) Quartal: ". $cq ."<br>";
        echo "--------------------<br>";
         
        switch ($monat) {
            case 1:
            case 2:
            case 3: $scc = 1; break;
            case 4:
            case 5:
            case 6: $scc = 2; break;
            case 7:
            case 8:
            case 9: $scc = 3; break;
            case 10:
            case 11:
            case 12: $scc = 4; break;
            default: echo "Ungültiger Monat"; exit;
        }
        echo "(SC) QURTAL: ". $scc . "<br>";
    
    ?>
</body>
</html>