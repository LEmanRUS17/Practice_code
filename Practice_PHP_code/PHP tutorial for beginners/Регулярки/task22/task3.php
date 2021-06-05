<?php
    $str = 'aba aca aea abba adca abea';
    echo $str.'<br>';
    echo preg_replace('#ab.a#', '!', $str);
?>