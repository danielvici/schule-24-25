<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="luca-quartal.php">
    <label for="monat">Monat
        <input name="monat" type="number" min=1 max=12>
    </label>
    <input type="submit" value="Berechnen">
</form>

<?php
$monat = $_REQUEST['monat'];

switch($monat){
    case 1:
        echo"du bist im 1 quatal";
        break;
    case 2:
        echo"du bist im 1 quatal";
        break;
    case 3:
        echo"du bist im 1 quatal";

    case 4:
        echo"du bist im 2 quatal";

    case 5:
        echo"du bist im 2 quatal";

    case 6:
        echo"du bist im 2 quatal";

    case 7:
        echo"du bist im 3 quatal";

    case 8:
        echo"du bist im 3 quatal";

    case 9:
        echo"du bist im 3 quatal";

    case 10:
        echo"du bist im 4 quatal";

    case 11:
        echo"du bist im 4 quatal";

    case 12:
        echo"du bist im 4 quatal";
}

?>
</body>
</html>