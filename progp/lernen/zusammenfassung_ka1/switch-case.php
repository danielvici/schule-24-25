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

    switch ($variable_name) {
        case "Daniel":
            echo "Dein Name ist Daniel!";
            break;
        case "Timo":
            echo "Dein Name ist Timo!";
            break;
        default:
            echo "Dein Name ist weder Daniel noch Timo!";
    }

?>
</body>
</html>