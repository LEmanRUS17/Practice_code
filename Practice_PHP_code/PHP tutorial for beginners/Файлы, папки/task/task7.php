<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

    $text = file_get_contents('test.txt'); // чтение числа из файла

    file_put_contents('test.txt', pow($text, 2)); // запись числа возведеного в квадрат в файл
?>