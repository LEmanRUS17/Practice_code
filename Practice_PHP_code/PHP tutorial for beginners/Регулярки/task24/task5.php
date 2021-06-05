<?php
    $str = 'mymail@mail.ru';
    echo $str.'<br>';	
    echo preg_match('#^[a-z0-9_.-]+@[a-z_.-]+\.[a-z]{2,}$#', $str);
?>