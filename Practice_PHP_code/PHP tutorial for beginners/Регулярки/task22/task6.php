<?php
    $str = 'aa aba abba abbba abca abea';
    echo $str.'<br>';
    echo preg_replace('#ab?a#', '!', $str);
?>