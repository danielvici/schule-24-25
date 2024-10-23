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

        // echo gettype($tag) => gibt den type von der varible

        // SCHALTJAHR??
        $istSchaltJahr = false;
        // && => UND
        // || => ODER
        if ($jahr % 4 == 0 && $jahr % 100 != 0 || $jahr % 400 == 0){
            $istSchaltJahr = true;
        }
        // MONATE
        switch ($monat){
            // Monate mi 31 Tagen:
            case 1: case 3: case 5: case 7:  case 8:case 10: case 12: 
                $tage_max = 31; break;
            // Monate mit 30 Tagen:
            case 4: case 6: case 9: case 11:
                $tage_max = 30; break;
            // Februar
            case 2: // Prüfen Schaltjahr
                if (!$istSchaltJahr) $tage_max = 28; 
                else $tage_max = 29;
                break;
            default: $tage_max = -1; // Fehlerfall
        }

        echo "<p> Der Monat ".$monat."-te hat Monat hat ". $tage_max. "Tage </p>";

        // Eigentliche Überprüfung
        $datumIstGueltig = false;
        if(
            $tag    >= 1 && $tag    <= $tage_max 
         && $monat  >= 1 && $monat  <= 12 
         && $jahr   >= 0 && $jahr   <= 3000)
        {

            $datumIstGueltig = true;
        }
        if ($datumIstGueltig) echo "<p><strong>Das Datum '$datum' ist gültig!</strong></p>";
        else echo "<p><strong>Das Datum '$datum' ist ungültig</strong></p>";
    ?>
</body>
</html>