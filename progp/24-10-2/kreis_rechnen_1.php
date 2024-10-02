<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ergebnis</title>
    <link rel="stylesheet" href="style.css"></link>
</head>
<body>
    <h1>Ergebnis:</h1>
    <div class="main">
        <?php
            /* Kreis*/
            $radius= $_REQUEST['radius'];
            $flaeche = M_PI * ($radius * $radius);
            $umfang = 2 * M_PI * $radius;
            echo "<p>Der <label class='dr'>Kreisradius</label> beträgt: <label class='dr'>". $radius. "</label> cm. </p>";
            echo "<p>Der <label class='dr'>Kreisfläche</label> beträgt: <label class='dr'>". $flaeche ."</label> cm². </p>";
            echo "<p>Der <label class='dr'>Kreisumfang</label> beträgt: <label class='dr'>". $umfang ."</label> cm. </p>";

        ?>
        <div>
            <button onclick="window.location.href='kreis_rechnen_1.html'">Zurück</button>
        </div>
    </div>
    <footer>
        <p>von daniel</p>
    </footer>
</body>
</html>