<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

    $text = file_get_contents('test.txt'); // чтение содержимого файла
    file_put_contents('test.txt', $text . '!'); // запись в файл прочитанный текст и добавление нового
?>