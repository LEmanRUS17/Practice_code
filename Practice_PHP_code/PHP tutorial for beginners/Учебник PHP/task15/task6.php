<?php
    $arr = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];

    foreach($arr as $elem) {
        foreach($elem as $pasElem) {
            foreach($pasElem as $KElem) {
                $summ += $KElem;
            }
            
        }
    }

    echo $summ;
?>