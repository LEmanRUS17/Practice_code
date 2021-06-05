<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

    $arr = ['1.txt', '2.txt', '3.txt']; // массив с именами файлов
    
    foreach ($arr as $elem) {
        $text = file_get_contents($elem);
        file_put_contents($elem, $text . '!');
    }    
?>