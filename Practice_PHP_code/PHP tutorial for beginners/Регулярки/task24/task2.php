<?php
    $str = 'a1b2c3';
    echo $str.'<br>';	
    echo preg_replace('#\d#', '$0$0', $str);
?>