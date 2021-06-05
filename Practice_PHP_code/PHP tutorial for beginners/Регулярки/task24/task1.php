<?php
    $str = 'aaa@bbb eee7@kkk';
    echo $str.'<br>';	
    echo preg_replace('#([a-z0-9]+)@([a-z0-9]+)#', '$2@$1', $str);
?>