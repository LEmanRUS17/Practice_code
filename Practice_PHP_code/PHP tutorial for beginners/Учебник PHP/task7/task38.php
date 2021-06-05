<?php
    $arr = range(1, 20);
    $arr = array_chunk($arr, 4);
    var_dump($arr);
?>