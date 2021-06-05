<?php
    $arr = array('a', '-', 'b', '-', 'c', '-', 'd');
    $a = array_search('-', $arr);
    $arr = array_splice($arr, $a, $a + 1);
    var_dump($arr);
?>