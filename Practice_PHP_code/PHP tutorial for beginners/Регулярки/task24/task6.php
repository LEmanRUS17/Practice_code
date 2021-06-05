<?php
    $str = 'mymail@mail.ru, my.mail@mail.ru, my-mail@mail.ru, my_mail@mail.ru, mail@mail.com, mail@mail.by, mail@yandex.ru';
    echo $str.'<br>';	
    echo preg_match_all('#[a-z0-9_.-]+@[a-z_.-]+\.[a-z]{2,}#', $str, $matches);
    var_dump($matches);
?>