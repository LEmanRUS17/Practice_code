<?php
    setcookie('test', '123', time()+360);
    echo $_COOKIE['test'];
    
?>