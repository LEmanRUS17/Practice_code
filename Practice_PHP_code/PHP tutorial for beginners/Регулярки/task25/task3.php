<?php
    $str = 'aaab caaa faaa baaa';
    echo $str.'<br>';	
    echo preg_replace('#aaa(?=b)#', '!',$str);
?>