<?php
    $arr = array(1, 2, 3, 4, 5);
    $result = array_splice($arr, 2, 0, ['a', 'b', 'c']);
    var_dump($result);
?>