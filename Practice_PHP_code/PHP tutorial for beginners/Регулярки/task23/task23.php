<?php
    $str = 'ааа ббб ёёё ззз ййй ААА БББ ЁЁЁ ЗЗЗ ЙЙЙ';
    echo $str.'<br>';	
    echo preg_replace('#aaa$#', '!', $str);
?>