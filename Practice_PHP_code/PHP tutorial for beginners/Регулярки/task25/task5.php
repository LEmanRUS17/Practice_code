<?php
    $str = 'aaa * bbb ** eee * **';
    echo $str.'<br>';	
    echo preg_replace('#(?<!\*)\*(?!\*)#', '!',$str);
?>