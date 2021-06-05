<?php
    $num = 'https://123456789.jpg';
    if(strlen($num) > 5) {
        echo substr($num, 0, 5).'...';
    }
    else
        echo $num;
?>
