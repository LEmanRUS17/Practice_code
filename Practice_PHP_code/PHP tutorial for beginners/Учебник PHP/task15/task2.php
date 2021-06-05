<?php
    $arr = array();

    for($i = 0; $i < 10; $i++) {
        for($j = 1; $j < $i + 1; $j++) {
            $arr[$i] .= $i;
        }
    }

    foreach($arr as $elem) {
        echo $elem.'<br>';
    }
?>