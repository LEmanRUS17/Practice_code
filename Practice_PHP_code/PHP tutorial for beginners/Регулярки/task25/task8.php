<?php
    $str = 'aaa * bbb ** eee *** kkk ****';
    echo $str.'<br>';	
    echo preg_replace('#(?<=([a-z]))\1#', '!',$str);
?>