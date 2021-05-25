<?php

$index_1 = 0;

do {
    $array_index = array_keys($products);
    $print = $array_index[$index_1];

    echo "Product : " . $print . "<br/>";

    $index_1++;
    $index_2 = 0;
    do {
        $array_index2 = array_values($products[$print]);
        $print2 = $array_index2[$index_2];

        echo $print2 . "<br/>";

        $index_2++;
    } while ($index_2 < count($products[$print]));
    echo '<br><br>';

} while ($index_1 < count($products));


