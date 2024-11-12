<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Rate die Zahl!</h1>
    <form action="raten.php">
        <label for="id_zahl">Zahl:</label>
        <input type="number" name="name_zahl" id="id_zahl">
        <button type="submit">Raten</button>
    </form>
    <?php
        $zahl = $_REQUEST['input_zahl'];
        $random = rand(1, 100);
        if ($zahl == $random) {
            echo "<p>Richtig!</p>";
            if ($zahl % 2 == 0) {
                echo "<p>Die Zahl ist gerade!</p>";
            } else {
                echo "<p>Die Zahl ist ungerade!</p>";
            }
        } else {
            echo "Falsch!";
            if ($zahl % 2 == 0) {
                echo "<p>Die Zahl ist gerade!</p>";
            } else {
                echo "<p>Die Zahl ist ungerade!</p>";
            }
        }
    ?>
</body>
</html>