<?php
    $num = 31;
    echo checkPrimeNum($num);

    function checkPrimeNum($num) {
        for($i = 2; $i < $num; $i++) {
            if($num % $i == 0) {
                return 'нет';
            }
        }

        return 'да';
    }
    
?>