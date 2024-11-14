<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo "While Schleife<br>";
        echo "------------------<br>";
        $i = 0;
        $nr = 0;

        echo "WHILE 1:<br>";
        while ($i<10){
            echo $i."<br>";
            $i++;

        }
        echo "------------------<br>";
        echo "WHILE 2:<br>";
        while ($i>10){
            echo $i."<br>";
            $i--;

        }
        echo "------------------<br>";
        echo "WHILE 3 (AUFGABE):<br>";
        while ($nr<100){
            $nr++;
            echo $nr.". Ich darf im Unterricht nicht schwätzen<br>";
        }
    ?>
</body>
</html>