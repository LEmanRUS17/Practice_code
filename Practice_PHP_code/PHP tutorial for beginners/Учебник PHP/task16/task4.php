<?php
    for($i = 1; $i <= 2020; $i++) {
        if(getDigitsSum($i) == 13) {
            echo $i.'г.<br>';
        }
    }

    function getDigitsSum($num) {
        $arr = stringToArray($num);
        return array_sum($arr);
    }

    function stringToArray($num) {
        return str_split($num, 1);
    }
?>