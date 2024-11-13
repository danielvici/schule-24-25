<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .text-bold {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
        ini_set("display_errors", "on");
        // Vorgegeben
        $ak = 100000; // Anfangskapital
        $zs = 4.3; //Zinssatz in Protenz

        // Eigene 
        $cj = 0; // derzeitiges jahr
        $k = $ak; // derzeitigs KApital
        // CODE
        while ($k <= 1000000){
            $z = $k * $zs /100;
            $k = $k + $z;
            $cj++;
        }
        echo "<br> Bei einem Anfangskapital von $ak Euro und einem Zinssatz von $zs% sind Sie in <a class='text-bold'>$cj Jahren</a> Millionär";
    ?> 
</body>
</html>