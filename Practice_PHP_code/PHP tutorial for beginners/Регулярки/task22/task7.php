<?php
    $str = 'ab abab abab abababab abea';
    echo $str.'<br>';
    echo preg_replace('#(ab)+#', '!', $str);
?>