<?php
    $arr = [5, 10, 2, 3, 12, 43, 65, 7, 8, 3];
    $result = [];

    foreach($arr as $elem) {
        if(isNumberInRange($elem)) {
            array_push($result, $elem);
        }
    }
    var_dump($result);
    
    function isNumberInRange($num) {
        return $num > 0 && $num < 10;
    }
?>