<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

    // записывается в место имеющегося текста
    echo file_put_contents('test.txt', '123 test'); // file_put_contents(название файла, текст для записи)
    //echo file_get_contents('test.txt');
?>