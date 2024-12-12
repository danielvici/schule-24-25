<style>
    * {
        text-align: center;
    }
</style>
<h1>COPYRIGHT DANIEL</h1>
<h2><a href="https://github.com/danielvici">GITHUB</a></h2>
<?php
// DAS DING IST EIN SMILE
$matrix = array("zeile1" => array(93,6,0,32,52,117,32,86,120), // Y
                "zeile2" => array(32,86,177,177,155,207,185,120,49), // Y
                "zeile3" => array(92,253, 112,53,87,30, 105, 212,55), // Y
                "zeile4" => array(67, 212,18, 179,126,247,10 ,170,17), // Y
                "zeile5" => array(38, 190,43, 121,28,4 ,44, 230,17),// Y
                "zeile6" => array(1, 184,25, 175,194,241, 125, 185,30), // Y
                "zeile7" => array(28, 205,16,89,44,9, 87, 137,61),// Y
                "zeile8" => array(6, 35,162,243,172,221 ,180,24 ,101), // Y
                "zeile9" => array(57,7,74,76,17, 17 ,123,47, 2)// Y
);

echo "<pre style='font-family: Courier New;'>";

foreach ($matrix as $row) {
    $output = ""; 
    foreach ($row as $value) {
        if ($value < 128) {
            $output .= " "; 
        } else {
            $output .= "X"; 
        }
    }
    echo $output . "\n";
}

echo "</pre>";

?>
<p>Das Ding ist ein Smile.</p>