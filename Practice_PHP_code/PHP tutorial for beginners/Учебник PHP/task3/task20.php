<?php 
    $day = 40;
    if($day >= 1 and $day <=10) {
        echo 1;
    }
    elseif ($day >= 11 and $day <=20) {
        echo 2;
    }
    elseif ($day >= 21 and $day <=31) {
        echo 3;
    }
    else {
        echo 0;
    }
?>