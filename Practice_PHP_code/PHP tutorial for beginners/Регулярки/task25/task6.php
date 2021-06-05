<?php
    $str = 'aaa * bbb ** eee *** kkk ****';
    echo $str.'<br>';	
    echo preg_replace('#(?<!\*)\*{2}(?!\*)#', '!',$str);
?>