<?php
    $password = 'html123';
    if(strlen($password) > 5 and strlen($password) < 10)
        echo 'password is suitable';
    else
        echo 'need to come up with a different password';
?>
