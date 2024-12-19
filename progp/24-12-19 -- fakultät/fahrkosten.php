
<div class="container">
    <h1>Fahrkosten Berechnung</h1>
    <p>Bitte geben Sie die folgenden Werte ein:</p>
<form action="">
    <label>Durschnittlicher Verbrauch: <input type="number" name="avg_verbrauch" min="1"></label><br>
    <label></label>Strecke: <input type="number" name="strecke" min="1"></label><br>
    <label>Preis pro Liter: <input type="float" name="preis_pro_liter" min="0.1"></label><br>
    <button type="submit" class="rechnen">BERECHNEN</button><br>
</form>
<?php

$verbrauch = $_REQUEST["avg_verbrauch"];
$strecke = $_REQUEST["strecke"];
$preis = $_REQUEST["preis_pro_liter"];

$ergebnis = $verbrauch / 100; // Liter pro 100km in Liter pro km
$ergebnis = $ergebnis * $strecke; // Liter pro km in Liter für die Strecke
$ergebnis = $ergebnis * $preis; // Liter für die Strecke in Preis

echo "Die Fahrt kostet: <span>$ergebnis €</span>";


?>
</div>
<style>
    .container {
        width: 50%;
        margin: 0 auto;
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        border: 10px solid #3dc21b;
    }
    span {
        color: #d32f2f;
        font-size: 36px;
        font-weight: bold;
    }
     *{
        text-align: center;
        font-size: 24px;
        margin: 10px;
    }
    .rechnen {
            display: flex;
            justify-content: center;
            box-shadow: 0px 0px 27px 8px #3dc21b;
            background: linear-gradient(to bottom, #44c767 5%, #5cbf2a 100%); 
            background-color: #44c767;
            border-radius: 38px;
            border: 1px solid #18ab29;
            display: inline-block;
            cursor: pointer;
            color: #ffffff;
            font-family: Arial;
            font-weight: bold;
            padding: 23px 48px;
            text-decoration: none;
            animation: pulse-blur 1.5s infinite;
            margin: 25px;
        }

        .rechnen:active {
            position: relative;
            top: 1px;
        }
        .rechnen:hover {
            background-color: red;
            box-shadow: 0px 0px 27px 8px red;
            background: linear-gradient(to bottom, red 5%, red 100%); 
            border-radius: 38px;
            border: 1px solid red;
            animation: pulse-blur-hover 1.5s infinite;
        }

        @keyframes pulse-blur {
            25% {
                box-shadow: 0px 0px 27px 8px #3dc21b;
            }
            50% {
                box-shadow: 0px 0px 37px 12px #3dc21b;
            }
            75% {
                box-shadow: 0px 0px 27px 8px #3dc21b;
            }
        
        }

        @keyframes pulse-blur-hover {
            25% {
                box-shadow: 0px 0px 27px 8px red;
            }
            50% {
                box-shadow: 0px 0px 37px 12px red;
            }
            75% {
                box-shadow: 0px 0px 27px 8px red;
            }

        }
</style>