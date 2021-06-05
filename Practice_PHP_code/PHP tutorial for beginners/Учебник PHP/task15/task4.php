<?php
    $arr = array(1, 4, 3, 4, 5, 6, 7, 8, 9);

    for($i = 0; $i < count($arr); $i++) {
        $summ += $arr[$i];
        if($summ > 10) {
            echo $i + 1;
            break;
        }
    }
?>