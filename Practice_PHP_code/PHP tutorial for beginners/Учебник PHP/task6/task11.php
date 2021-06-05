<?php
    $num = 'http://123456789';
    if(substr($num, 0, 7) == 'http://')
        echo 'Yes';
    else
        echo 'No';
?>
