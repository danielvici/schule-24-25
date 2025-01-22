<?php
// #################
// #      NAME     #
// # DANIEL CWIKLA #
// #################

echo "<h2>Prüfsumme</h2>";
$zahl_vorgabe = 4581072;

function idValidator($id):int {
    $faktor = 1;
    $i = -1;
    echo "id".$id;
    $arr_id = str_split($id,1);
    while( $i < (count($arr_id))){
        $i++;
        echo "<br>".$i+1 .". ".$arr_id[$i];
        if ($i == 2 or $i == 5){
            $faktor = 3;
        }else {
            $faktor = 1;
        }
        $arr_faktor = array($faktor * $arr_id[$i]);
        print_r($arr_faktor);
        $ps = $ps+ $arr_faktor[$i];
        echo ", $ps";
    }
    echo"<br>---<br>$ps";
}
idValidator($zahl_vorgabe);
?>