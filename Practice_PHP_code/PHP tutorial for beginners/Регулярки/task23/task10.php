<?php
    $str = 'aba aea aca aza axa';
    echo $str.'<br>';	
    echo preg_replace('#a[bex]a#', '!', $str);
?>