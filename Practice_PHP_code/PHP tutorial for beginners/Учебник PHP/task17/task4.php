<?php

    for($i = 1; $i <= 10000; $i++) {
        for($j = 1; $j <= 10000; $j++) {
            if(checkFriendlyNumbers($i, $j))
                echo $i.' '.$j.'<br>';
        }
    }

    function checkFriendlyNumbers($num1, $num2) { // проверить дружественние числа
        return arraySum(findDivisors($num1)) == arraySum(findDivisors($num2));
    }

    function findDivisors($num) { // найти делители 
        $result = [];
        for($i = 1; $i < $num; $i++) {
            if($num % $i == 0)
                array_push($result, $i);
        }
        
        return $result;
    }

    function arraySum($arr) { // сумма массива
        foreach($arr as $elem) {
            $summ += $elem;
        }
        return $summ;
    }
?>