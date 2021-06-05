<?php
    echo getDigitsSum(1293);

    function getDigitsSum($num) {
        $arr = stringToArray($num);
        return array_sum($arr);
    }

    function stringToArray($num) {
        return str_split($num, 1);
    }
?>