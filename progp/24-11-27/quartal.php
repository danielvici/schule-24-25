<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .border{
            border: 1px solid black;
        }
        .m-5{
            margin: 5px;
        }
        .p-10{
            padding: 10px;
        }
        .text-bold {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="border p-10">
        <h1>Monat im Quartal einordnen (switch-case)</h1>
        <p>Wählen Sie den hier Monat aus:</p>
        <form action="quartal.php">
            <label for="monat">Monat: </label>
            <select name="monat" id="monate">
                <option value="Januar">Januar</option>
                <option value="Februar">Februar</option>
                <option value="März">März</option>

                <option value="April">April</option>
                <option value="Mai">Mai</option>
                <option value="Juni">Juni</option>

                <option value="Juli">Juli</option>
                <option value="August">August</option>
                <option value="September">September</option>

                <option value="Oktober">Oktober</option>
                <option value="November">November</option>
                <option value="Dezember">Dezember</option>
            </select>
            <button type="submit">Quartal ermitteln</button>
        </form>
    </div>
    <div class="p-10 border">
        <h1>Monat im Quartal einordnen (switch-case)</h1>
        <?php
        $monat_auswahl = $_REQUEST["monat"];

       switch($monat_auswahl){
        case "Januar":
        case "Februar": 
        case "März": 
            echo "Der Monat <spans class='text-bold'>$monat_auswahl</spans> gehört zum 1. Quartal";
            break;
        case "April":
        case "Mai": 
        case "Juni": 
            echo "Der Monat <spans class='text-bold'>$monat_auswahl</spans> gehört zum 2. Quartal";
            break;
        case "Juli":
        case "August": 
        case "September": 
            echo "Der Monat <spans class='text-bold'>$monat_auswahl</spans> gehört zum 3. Quartal";
            break;
        case "Oktober":
        case "November": 
        case "Dezember": 
            echo "Der Monat <spans class='text-bold'>$monat_auswahl</spans> gehört zum 4. Quartal";
            break;
        default: 
            echo "Unbekannter Monat";
            break;
       }
        ?>
    </div>
</body>
</html>