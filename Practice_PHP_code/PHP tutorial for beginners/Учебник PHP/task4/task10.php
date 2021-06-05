<?php 
    $arr = array(2, 5, 9, 15, 0, 4);
    foreach($arr as $elem) {
        if($elem > 3 and $elem < 10)
            echo $elem."\n";
    }
?>