<?php
    $num = 'https://123456789.png';
    $a = strlen($num) - 4;
    if(substr($num, $a, 4) == '.png')
        echo 'Yes';
    else
        echo 'No';
?>
