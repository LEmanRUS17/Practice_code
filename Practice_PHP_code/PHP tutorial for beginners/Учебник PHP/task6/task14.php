<?php
    $num = 'https://123456789.jpg';
    $a = strlen($num) - 4;
    if(substr($num, $a, 4) == '.png' || substr($num, $a, 4) == '.jpg')
        echo 'Yes';
    else
        echo 'No';
?>
