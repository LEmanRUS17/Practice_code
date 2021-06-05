<?php
    var_dump(getCommonDivisors(12, 2340));

    function getCommonDivisors($num1, $num2) {
        $arrNum1 = getDivisors($num1);
        $arrNum2 = getDivisors($num2);
        return array_intersect($arrNum1, $arrNum2);
    }

    function getDivisors($num) {
        $arr = [];
        for($i = 1; $i <= $num; $i++ ) {
            if($num % $i == 0)
                array_push($arr, $i);
        }
        
        return $arr;
    }
?>