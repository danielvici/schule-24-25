<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    $variable_name="Daniel";

    if ($variable_name=="Daniel") {
        echo "Dein Name ist Daniel!";
    }


    if ($variable_name=="Daniel") {
        echo "Dein Name ist Daniel!";
    } else {
        echo "Dein Name ist nicht Daniel!";
    }
   
    if ($variable_name=="Daniel") {
        echo "Dein Name ist Daniel!";
    } elseif ($variable_name=="Timo") {
        echo "Dein Name ist Timo!";
    } else {
        echo "Dein Name ist weder Daniel noch Timo!";
    }

?>
</body>
</html>