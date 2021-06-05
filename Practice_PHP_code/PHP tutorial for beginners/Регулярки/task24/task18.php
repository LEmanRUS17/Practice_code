<?php
    $str = 'http://site.ru, http://site.com';
    echo $str.'<br>';	
    echo preg_replace('#https?://([a-z0-9-]+\.[a-z]{2,})#', '<a href="$0">$1</a>',$str);
?>