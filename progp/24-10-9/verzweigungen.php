<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontrollstrukturen: Verzweigungen</title>
    <style>
        .nok {
            color: red;
        }
        .ok {
            color: green;
        }
    </style>
</head>
<body>
    <!-- Datei: verzweigungen.php -->
    <h2>einfache Verzweigungen</h2>
    <?php
        $geschw = 80;
        // einfache verzweigung mit (if)
        if ($geschw > 80) {
            echo "<p class='nok'>zu schnell</p>";
        }
        echo "<h2>zweife Verzweigungen (if ... else)</h2>";
        // zweifache verzweigung mit (if .. else)
        if ($geschw > 80) {
            echo "<p class='nok'>zu schnell</p>";
        } else {
            echo "<p class='ok'>OK</p>";
        }
        echo "<h2>dreifache Verzweigungen (if ... elseif ... else)</h2>";
        // dreifache verzweigung mit (if.. elseif.. else)
        if ($geschw < 60) {
            echo "<p class='nok'>zu schnell</p>";
        } elseif ($geschw > 130) {
            echo "<p class='nok'>zu langsam</p>";
        } else {
            echo "<p class='ok'>OK</p>";
        }
    ?>
</body>
</html>