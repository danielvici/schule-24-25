<?php 
$number = $array(3,5,1,2); // index 0 = 3, index 1 = 5, index 2 = 1, index 3 = 2
sort($number); // => $number = array(1,2,3,5); index: 0 = 1, index 1 = 2, index 2 = 3, index 3 = 5
asort($number); // => $number = array(1,2,3,4,5); index: 0 = 2, index 1 = 1, index 2 = 5, index 3 = 3

?>