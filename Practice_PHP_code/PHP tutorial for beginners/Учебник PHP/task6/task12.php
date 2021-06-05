<?php
    $num = 'https://123456789';
    if(substr($num, 0, 7) == 'http://' || substr($num, 0, 8) == 'https://')
        echo 'Yes';
    else
        echo 'No';
?>
