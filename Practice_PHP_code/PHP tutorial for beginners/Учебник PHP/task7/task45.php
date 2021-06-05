<?php
    $str = '1234567890';
    $arr = str_split($str, 1);
    $str = array_sum($arr);
    echo $str;
?>