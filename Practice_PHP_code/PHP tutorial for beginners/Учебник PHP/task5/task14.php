<?php
    $arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    foreach($arr as $elem) {
        $sum += $elem;
        $a++;
        if($sum > 10)
            break;
    }
    echo $a;
?>
