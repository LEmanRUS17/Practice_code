<?php
    $str = 'aaab aaac aaaf baaa';
    echo $str.'<br>';	
    echo preg_replace('#aaa(?!b)#', '!',$str);
?>