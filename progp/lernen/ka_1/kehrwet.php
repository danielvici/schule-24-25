<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
        .underline{
            text-decoration-line: underline;
        }
    </style>
</head>
<body>
    <?php 
        // Vorgegeben
        $obergrenze = 100;

        // CODE
        if ($obergrenze > 1) {
            for ($i = 1; $i < ($obergrenze +1); $i++ ){
                $kehrwert = 1 / $i;
                echo "Kehrwert von <a class='underline'>$i</a> ist <a class='underline'>$kehrwert</a> <br>";
            }   
        } else {
            echo "<p>Die Obergrenze muss über 1 sein. Sie ist derzeit bei $obergrenze.</p>";
        }
    ?>
</body>
</html>