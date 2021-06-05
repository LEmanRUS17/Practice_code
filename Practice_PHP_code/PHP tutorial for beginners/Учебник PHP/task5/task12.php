<?php
    $arr = array(1, 2, -1, -2, 3, -3);
    foreach($arr as $key=>$elem)
        $arr[$key] = abs($elem);
    var_dump($arr);
?>
