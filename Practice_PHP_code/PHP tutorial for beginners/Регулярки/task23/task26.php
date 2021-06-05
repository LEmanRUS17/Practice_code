<?php
    $str = 'xbx aca aea abba adca abea';
    echo $str.'<br>';	
    echo preg_replace('#\b#', '!', $str);
?>