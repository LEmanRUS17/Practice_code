<?php
    $num = 40;
    for($a = 1; $a <= $num; $a++) {
        if($num % $a == 0) {
            $arr[$a - 1] = $a;
        }
    }
    var_dump($arr)
?>
