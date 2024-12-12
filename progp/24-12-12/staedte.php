<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maschalla Tabelle</title>
    <style>
        *{
            text-align: center;
        }
        table{
            border: 1px solid black;

        }
        .table-kopf{
            background-color: lightgrey;
        }
    </style>
</head>
<body>
    <table border="0" cellpadding="0" width="380">
        <tr>
            <td width="150" class="table-kopf">Stadt</td>
            <td width="100" class="table-kopf">Land</td>
            <td width="130" class="table-kopf">Einwohner in Mio</td>
        </tr>

        <?php
        
        $staedte = array("stadt1"=> array("Bombay","India","12.916"),
                        "stadt2"=> array("Buenos Aires","Argentinien","11.624"),
                        "stadt3"=> array("Seoul","Süd Korea","11.019"),
                        "stadt4"=> array("Jakurata","Indonesien","10.226"),
                        "stadt5"=> array("Delhi","Indien","10.095"),
                        "stadt6"=> array("Manila","Philippinen","10.032"),
                        "stadt7"=> array("Karachi","Pakistan","10.032"),
                        "stadt8"=> array("Sao Paulo","Brasilien","9.921"),
                        "stadt9"=> array("Istanbul","Türkei","9.018"),
                        "stadt10"=> array("Shanghai","China","8.914"),
                        );
        
        foreach($staedte as $ausgabe){
            list($stadt, $land, $ew)  = $ausgabe;
            echo "<tr><td>$stadt</td><td>$land</td><td>$ew</td></tr>";
        }
        ?>

    </table>
</body>
</html>