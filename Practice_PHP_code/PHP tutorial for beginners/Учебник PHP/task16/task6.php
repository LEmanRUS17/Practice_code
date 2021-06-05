<?php
    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $result = [];

    foreach($arr as $elem) {
        if(isEven($elem))
            array_push($result, $elem);
    }

    var_dump($result);
    
    function isEven($num) {
        return $num % 2 == 0;
    }
?>