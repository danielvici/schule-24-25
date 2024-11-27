<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monat im Quartal einordnen</title>
    <style>
        /* Grundlegendes Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fa;
            color: #333;
            padding: 20px;
        }

        /* Container für das gesamte Layout */
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* Überschrift */
        h1 {
            font-size: 1.8em;
            color: #333;
            margin-bottom: 15px;
        }

        /* Form-Elemente */
        label {
            font-size: 1.1em;
            margin-right: 10px;
        }

        select, button {
            font-size: 1em;
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        /* Stil für den Button */
        button {
            background-color: #007BFF;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Stil für den Quartalstext */
        .quartal-result {
            font-size: 1.2em;
            margin-top: 20px;
            padding: 15px;
            border-radius: 5px;
            background-color: #e9f7fa;
        }

        .text-bold {
            font-weight: bold;
            color: #007BFF;
        }

        /* Responsives Design */
        @media (max-width: 600px) {
            .container {
                padding: 15px;
            }

            h1 {
                font-size: 1.5em;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Monat im Quartal einordnen (switch-case)</h1>
        <p>Wählen Sie den Monat aus:</p>
        <form action="quartal-2.php" method="get">
            <div>
                <label for="monat">Monat: </label>
                <select name="monat" id="monat">
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
            </div>
            <div>
                <button type="submit">Quartal ermitteln</button>
            </div>
        </form>

        <div class="quartal-result">
            <?php
            if (isset($_REQUEST["monat"])) {
                $monat_auswahl = $_REQUEST["monat"];

                switch($monat_auswahl){
                    case "Januar":
                    case "Februar":
                    case "März":
                        echo "Der Monat <span class='text-bold'>$monat_auswahl</span> gehört zum 1. Quartal.";
                        break;
                    case "April":
                    case "Mai":
                    case "Juni":
                        echo "Der Monat <span class='text-bold'>$monat_auswahl</span> gehört zum 2. Quartal.";
                        break;
                    case "Juli":
                    case "August":
                    case "September":
                        echo "Der Monat <span class='text-bold'>$monat_auswahl</span> gehört zum 3. Quartal.";
                        break;
                    case "Oktober":
                    case "November":
                    case "Dezember":
                        echo "Der Monat <span class='text-bold'>$monat_auswahl</span> gehört zum 4. Quartal.";
                        break;
                    default:
                        echo "Unbekannter Monat";
                        break;
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
