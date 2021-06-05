<?php
    var_dump(getDivisors(120));

    function getDivisors($num) {
        $arr = [];
        for($i = 1; $i <= $num; $i++ ) {
            if($num % $i == 0)
                array_push($arr, $i);
        }
        
        return $arr;
    }
?>