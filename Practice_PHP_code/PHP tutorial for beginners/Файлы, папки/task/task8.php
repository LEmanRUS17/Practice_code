<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

    $arr = ['1.txt', '2.txt', '3.txt']; // массив с именами файлов
    $str = '';                          // строка для записи
    
    foreach ($arr as $elem) {
        $str .= file_get_contents($elem);
    }

    file_put_contents('new.txt', $str); // создание файла и запись строки в файл
?>