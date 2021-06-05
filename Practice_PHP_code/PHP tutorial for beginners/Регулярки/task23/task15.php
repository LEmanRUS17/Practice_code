<?php
    $str = 'aba aea aca aza axa a.a a+a a*a';
    echo $str.'<br>';	
    echo preg_replace('#a[a-fA-Z]a#', '!', $str);
?>