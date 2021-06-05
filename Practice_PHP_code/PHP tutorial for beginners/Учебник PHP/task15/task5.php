<?php
    $arr = [[1, 2, 3], [4, 5], [6]];

    foreach($arr as $elem) {
        foreach($elem as $pasElem) {
            $summ += $pasElem;
        }
    }

    echo $summ;
?>