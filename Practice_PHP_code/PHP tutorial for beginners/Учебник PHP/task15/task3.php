<?php
    arrayFill('x', 5);
    
    function arrayFill($num, $lengthArr) {
        $arr = array();
        for($i = 0; $i < $lengthArr; $i++) {
            $arr[$i] = $num;
        }

        return $arr;
    }
?>