<?php
    
    $arr = array('a', 'b', 'c', 'd', 'e');
    $flag = false; //считаем, что элемента 'c' нету в массиве

    foreach($arr as $elem) {
        if($elem == 'c') {
            $flag = true; //элемент есть - переопределим переменную $flag
            break;
        }
    }

    if ($flag === true) {
        echo 'Есть';
    } else {
        echo 'Нет';
    }
?>