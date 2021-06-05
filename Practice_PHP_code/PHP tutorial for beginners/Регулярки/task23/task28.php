<?php
    $str = 'a\a a\\\\a a\\\\\\a';
    echo $str.'<br>';	
    echo preg_replace('#a\\\\{3}a#', '!', $str);
?>