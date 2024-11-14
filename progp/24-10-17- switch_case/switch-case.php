<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        $b = 1;
        if ($b == 0){
            echo "Variable b hat den Wert 0. <br>";
        }
        else if ($b == 1){
            echo "Variable b hat den Wert 1. <br>";
        } else if ($b == 2){
            echo "Variable b hat den Wert 2. <br>";
        }
        $i = 1;
        switch ($i) {
            case 2:
            case 4:
            case 6:
                echo "Variable b hat den Wert 2. <br>";
                break;
            default:
                echo "Variable b hat einen unbekannten Wert. <br>";
        }
    ?>
</body>
</html>