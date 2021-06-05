<?php
    $arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
    $num = 5;
    echo hasElem($arr, $num);

    function hasElem($arr, $num) {
        foreach($arr as $elem) {
            if($elem == $num) {
                return 'да';
            }
        }

        return 'нет';
    }
?>