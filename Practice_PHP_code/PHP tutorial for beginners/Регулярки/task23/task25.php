<?php
    $str = 'aeeea aeea aea axa axxa axxxa';
    echo $str.'<br>';	
    echo preg_replace('#a(ee|x+)a#', '!', $str);
?>