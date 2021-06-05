<?php
    $str = 'ave a#a a2a a$a a4a a5a a-a aca';
    echo $str.'<br>';	
    echo preg_replace('#\s#', '!', $str);
?>