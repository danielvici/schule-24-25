<form action="notenrechnung.php">
    <label>Erreichte Punkte: <input type="number" min="1" name="input_erreichte_punkte"></label><br>
    <label>Max Punkte Punkte: <input type="number" min="1" name="input_max_punkte"></label><br>
    <button type="submit" class="rechnen">!!! BERECHNEN !!!</button><br>
</form>

<?php 

function berechneNote($pist, $pmax){
    $note = 6 - 5*$pist / $pmax;
    return $note;
}
function main(){
    if ($_REQUEST["input_erreichte_punkte"] != "" || $_REQUEST["input_max_punkte"] != "") {
        $erreichte_punkte = $_REQUEST["input_erreichte_punkte"];
        $max_punkte = $_REQUEST["input_max_punkte"];
        if ($erreichte_punkte > $max_punkte){
            echo "Erreichte Punkte darf <span style='color:red;'>nicht</span> größer als Max Punkte sein!";
        }else {
            echo "<div> Die Note ist: ";
            echo berechneNote($erreichte_punkte, $max_punkte);
            echo "</div>";
        }
    } else {
        echo "Bitte geben sie eine Zahl ein";
    }
}

main();
?>
<style>
    *{
        text-align: center;
        font-size: 48px;
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