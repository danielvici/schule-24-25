<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zeugnisnoten</title>
    <link rel="stylesheet" href="..\css\schwarz-weiß.css">
</head>
<body>
    <div class="main">
        <h3>Ausgabe: </h3>
        <?php 
            $englisch = $_REQUEST['englisch'];
            $deutsch = $_REQUEST['deutsch'];
            $mathe = $_REQUEST['mathe'];

            $durchschnitt = ($englisch + $deutsch + $mathe) / 3;
            switch ($englisch){
                case 1:
                    $englisch_msg = "Sehr Gut";
                    break;
                case 2:
                    $englisch_msg = "Gut";
                    break;
                case 3:
                    $englisch_msg = "Befriedigend";
                    break;
                case 4:
                    $englisch_msg = "Ausreichend";
                    break;
                case 5:
                    $englisch_msg = "Mangelhaft";
                    break;
                case 6:
                    $englisch_msg = "Ungenügend";
                    break;
            }

            switch ($deutsch){
                case 1:
                    $deutsch_msg = "Sehr Gut";
                    break;
                case 2:
                    $deutsch_msg = "Gut";
                    break;
                case 3:
                    $deutsch_msg = "Befriedigend";
                    break;
                case 4:
                    $deutsch_msg = "Ausreichend";
                    break;
                case 5:
                    $deutsch_msg = "Mangelhaft";
                    break;
                case 6:
                    $deutsch_msg = "Ungenügend";
                    break;
            }

            switch ($mathe) {
                case 1:
                    $mathe_msg = "Sehr Gut";
                    break;
                case 2:
                    $mathe_msg = "Gut";
                    break;
                case 3:
                    $mathe_msg = "Befriedigend";
                    break;
                case 4:
                    $mathe_msg = "Ausreichend";
                    break;
                case 5:
                    $mathe_msg = "Mangelhaft";
                    break;
                case 6:
                    $mathe_msg = "Ungenügend";
                    break;
            }

        echo "Die Leistung in Englisch ist ". $englisch_msg . ".<br>";
        echo "Die Leistung in Deutsch ist ". $deutsch_msg . ".<br>";
        echo "Die Leistung in Mathe ist ". $mathe_msg . ".<br><br>";
        echo "Der Durchschnitt der Noten beträgt: ". $durchschnitt. ".<br>";
        ?>
    </div>
</body>
</html>