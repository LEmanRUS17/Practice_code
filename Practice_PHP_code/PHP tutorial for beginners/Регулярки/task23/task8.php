<?php
    $str = 'ave a#b a2b a$b a4b a5b a-b acb';
    echo $str.'<br>';	
    echo preg_replace('#a\Wb#', '!', $str);
?>