<?php
    $str = 'a\a abc';
    echo $str.'<br>';	
    echo preg_replace('#a\\\\a#', '!', $str);
?>