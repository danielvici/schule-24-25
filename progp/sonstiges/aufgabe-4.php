<?php
$n = 7;
$k = -2;
$i = 0;
while ($n != 1 && $i < 3){
    $i++;
    if ($n % 2 == 0) {
        $n = ($n/2);
        echo $n ;
    } else {
        $n = ((2 $k) + 1) $n + 1;
        $k--;
        echo $n ;
    }
}
?>