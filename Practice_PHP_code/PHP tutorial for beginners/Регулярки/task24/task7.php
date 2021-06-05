<?php
    $str = 'mymail@mail.ru, my.mail@mail.ru, my-mail@mail.ru, my_mail@mail.ru, mail@mail.com, mail@mail.by, mail@yandex.ru';
    echo $str.'<br>';	
    echo preg_match('#^[a-z0-9-]+\.[a-z]{2,}$#', $str);
    var_dump($matches);
?>