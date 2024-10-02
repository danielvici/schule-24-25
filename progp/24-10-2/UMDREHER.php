<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMDREHER</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <h1>UMDREHER</h1>
        <?php
            $nr_1 = $_REQUEST['nummer_eins']; // 5
            $nr_2 = $_REQUEST['nummer_zwei']; // 10
            $nr_tausch = $nr_1;
            // 10         10

            //5      5
            $nr_1 = $nr_2;
            // 5      10
            $nr_2 = $nr_tausch;
            echo "
            <div class='div_input'>
                <label for='nr_1' class='l if'>Nummer 1:<label class='dr'>". $nr_1."</label></label>
                <br><label for='nr_2' class='l if'>Nummer 2: <label class='dr'>". $nr_2."</label></label>
            </div>
            "
        ?>
    </div>
</body>
</html>