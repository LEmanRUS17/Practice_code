<?php
    for($i = 100000; $i <= 999999; $i++) {
        if(luckyTicket($i))
            echo $i.'<br>';
    }

    function luckyTicket($num) {
        $arr = stringToArray($num);
        return $arr[0] + $arr[1] + $arr[2] == $arr[3] + $arr[4] + $arr[5];
    }

    function stringToArray($num) {
        return str_split($num, 1);
    }
?>