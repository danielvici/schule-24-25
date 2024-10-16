<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alkoholspiegel</title>
    <link rel="stylesheet" href="..\css\blau-theme.css">
</head>
<body>
<body >
    <div><h1>Rechner</h1></div>

    <div>
        <?php 
            $gewicht = $_REQUEST['gewicht'];
            $getrunken = $_REQUEST['anzahl_getrunken'];
            $sex = $_REQUEST['usr_sex'];

            $alkoholmenge = $getrunken * 5.5 * 8;

            if ($sex == "sex_male"){
                $verteilungsfaktor = 0.7;
            } elseif ($sex == "sex_female"){
                $verteilungsfaktor = 0.6;
            }

            $alkoholspiegel = round(($alkoholmenge / ($verteilungsfaktor * $gewicht)) * 0.8 - 0.5, 2);

            if ($alkoholspiegel >= 0.3) {
                echo "<p> Ihr Alkoholspiegel liegt bei <label class='dr'>". $alkoholspiegel ."</label> Promille. Sie dürfen nicht mehr Auto fahren.</p>";
            } else if ($alkoholspiegel < 0.3){
                echo "<p> Ihr Alkoholspiegel liegt bei <label class='dr'>". $alkoholspiegel ."</label> Promille. Sie dürfen Auto fahren.</p>";
            } else {
                echo "<p> Es ist ein Fehler aufgetreten...</p>";
                echo "<p>----</p>";
                echo "<p>Bitte überprüfen Sie Ihre Eingaben!</p>";
            }

        ?>
    </div>


    <footer>
        <p>Gemacht von Daniel.</p>
    </footer>
</body>
</body>
</html>