<?php
    for($i = 1; $i <= 9; $i++) {
        $str .= '-'.$i;
        if($i == 9)
            $str .= '-';
    }

    echo $str;
?>