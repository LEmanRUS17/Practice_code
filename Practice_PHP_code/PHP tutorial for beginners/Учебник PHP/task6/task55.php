<?php
    $str = 'var_test_text';
    $arr = explode('_', $str);
    foreach($arr as $elem)
        $elem = ucfirst($elem);
    var_dump($arr);
?>
