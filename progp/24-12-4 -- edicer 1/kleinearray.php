<?php 

    $sonnenstunden = [8.9, 5.7, 8.3, 9.0, 0.5];

    echo "<h2>for</h2>";

    for ($i = 0; $i < count($sonnenstunden); $i++) {
        echo "$sonnenstunden[$i]<br>";
    }

    echo "<h1>-------------</h1>";
    echo "<h2>foreach</h2>";

    $sonnenstunden[]=4.8;

    foreach ($sonnenstunden as $sonnen) {
        echo "$sonnen<br>";
    }

?>