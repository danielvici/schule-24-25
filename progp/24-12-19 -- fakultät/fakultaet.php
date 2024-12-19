<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fakultät Berechnung</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
            padding: 50px;
            background-image: url('weihnachten_1.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: 100%;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
        }
        h1 {
            color: #d32f2f;
        }
        input[type="number"] {
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #d32f2f;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #b71c1c;
        }
        span {
            color: #d32f2f;
            font-weight: bold;
        }
        .text_2 {
            font-size: 20px;
            margin-top: 20px;
        }
    </style>
</head>
<body background-image:progp\bilder\weihnachten_1.jpg>
    <div class="container">
        <h1>Fakultät Berechnung</h1>
        <form method="post">
            <label for="number">Geben Sie eine Nummer ein:</label><br>
            <input type="number" id="number" name="number" required><br>
            <input type="submit" value="Berechnen">
        </form>
        <?php
        function fak($n) {
            if ($n < 0) {
                return "Ungültige Eingabe";
            }
            if ($n == 0) {
                return 1;
            }
            $result = 1;
            for ($i = 1; $i <= $n; $i++) {
                $result *= $i;
            }
            return $result;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = intval($_POST["number"]);
            echo "<p class='text_2'>Die Fakultät von <span>$number</span> ist <span>" . fak($number) . "</span></p>";
        }
        ?>
    </div>
</body>
</html>