<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>BMI - Body Mass Index</h1>
        <h2>Daten Eingabe</h2>
    </div>

    <?php
        $gewicht = $_REQUEST['gewicht'];
        $groesse = $_REQUEST['groesse'];

        $bmi = $gewicht / (($groesse/100) ** 2);

        echo "<div>";
        echo "<p>Ihr Gewicht: ". $gewicht. " kg</p>";
        echo "Ihre Größe: ". $groesse. " cm</p>";
        echo "<p><strong>Ihr BMI: ". $bmi. "</strong></p>";

        if ($bmi < 18.5) {
            echo "<p>Sie sind untergewichtig.</p>";
        } elseif ($bmi >= 18.5 && $bmi < 25) {
            echo "<p>Sie sind normalgewichtig.</p>";
        } elseif ($bmi >= 25 ) {
            echo "<p>Sie sind übergewichtig.</p>";
        }
    ?>
    
</body>
</html>