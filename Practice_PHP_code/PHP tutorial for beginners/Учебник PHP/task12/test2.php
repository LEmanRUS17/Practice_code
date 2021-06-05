<?php
    $arr = array('a', 'b', 'c', 'd', 'e');
    echo hasElem($arr); //выведет true или false

    function hasElem($arr) {
        foreach($arr as $elem) {
            if($elem == 'c') {
                return true; //элемент 'c' найден
            }
        }

        return false; //элемент 'c' не найден
    }
?>