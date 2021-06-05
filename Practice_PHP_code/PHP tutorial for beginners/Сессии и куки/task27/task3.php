<?php
    setcookie('test', 1, time() + 3600);

    printf('Вы посетили наш сайт %b раз!', $_COOKIE['test']);
?>