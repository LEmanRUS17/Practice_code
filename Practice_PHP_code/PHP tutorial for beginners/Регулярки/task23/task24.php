<?php
    $str = 'aeeea aeea aea axa axxa axxxa';
    echo $str.'<br>';	
    echo preg_replace('#a(e+|x+)a#', '!', $str);
?>