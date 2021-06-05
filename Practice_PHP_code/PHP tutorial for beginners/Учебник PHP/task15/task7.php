<?php
    $arr = [];
    $num = 1;
    for($i = 0; $i < 3; $i++) {
        for($j = 0; $j < 3; $j++) {
            $arr[$i][$j] = $num;
            $num++;
        }
    }

    foreach($arr as $elem) {
        foreach($elem as $hasElem) {
            echo $hasElem;
        }
        echo '<br>';  
    }
?>