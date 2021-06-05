<?php
    $str = 'bbb /aaa\ bbb /ccc\\';
    echo $str.'<br>';	
    echo preg_replace('#/[a-z]+\\\\#', '!', $str);
?>