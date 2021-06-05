<?php
    $arr = array(1, 2, 3, 4, 5, 6, 7, 8);
    foreach($arr as $elem){
        echo array_shift($arr). " ";
        echo array_pop($arr). " ";
        }
?>