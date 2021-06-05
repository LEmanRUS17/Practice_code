<?php
    $str = 'a.a aba aea';
    echo $str.'<br>';
    echo preg_replace('#a\.a#', '!', $str);
?>