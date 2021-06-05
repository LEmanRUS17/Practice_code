<?php
    $len = "A";
    if(ord($len) >= 65 and ord($len) <= 90)
        echo 'Big';
    elseif(ord($len) >= 97 and ord($len) <= 122)
        echo 'Litl';
    else
        echo 'Error';
?>
