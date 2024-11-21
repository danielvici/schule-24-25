<?php 
    $zahl = $_REQUEST["zahl"];

    $isPrime = true;
    if ($zahl <= 1) {
        $isPrime = false;
    } else {
        for ($i = 2; $i <= sqrt($zahl); $i++) {
            if ($zahl % $i == 0) {
                $isPrime = false;
                break;
            }
        }
    }
    
    if ($isPrime) {
        echo "Die Zahl $zahl ist eine Primzahl";
    } else {
        echo "Die Zahl $zahl ist keine Primzahl";
    }
?>