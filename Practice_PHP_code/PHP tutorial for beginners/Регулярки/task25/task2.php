<?php
    $str = 'baaa caaa faaa baaa';
    echo $str.'<br>';	
    echo preg_replace('#(?<!b)aaa#', '!',$str);
?>