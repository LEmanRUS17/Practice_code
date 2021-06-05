<?php
    $str = 'bbb <b> hello </b>, <b> world </b> eee';
    echo $str.'<br>';	
    echo preg_replace('#<b>(.+?)</b>#', '!', $str);
?>