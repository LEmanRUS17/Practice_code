<?php
    $arr = array ('green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой');
    $a = 0;
	foreach($arr as $key=>$elem) {
        $en[$a] = $key;
        $ru[$a] = $elem;
        $a++;
    }
    var_dump($en);
    var_dump($ru);
?>