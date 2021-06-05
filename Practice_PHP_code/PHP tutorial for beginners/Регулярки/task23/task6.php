<?php
    $str = 'a1a a22a a333a a4444a a55555a aba aca';
    echo $str.'<br>';	
    echo preg_replace('#a\d*a#', '!', $str);
?>