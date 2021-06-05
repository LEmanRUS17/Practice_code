<?php 
    $arr = array('10', '20', '30', '50', '235', '3000');
    foreach($arr as $elem) {
        if($elem[0] == 1 || $elem[0] == 2 || $elem[0] == 5) {
            echo $elem."\n";
        }
    }
?>