<?php
    $str = '1234567890';
    $arr = str_split($str, 2);
    $str = implode('-', $arr);
    echo $str;
?>
