<?php
    $str = 'aba accca azzza wwwwa';
    echo $str.'<br>';
    echo preg_replace('#a.+?a#', '!', $str);
?>