<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

    $arr = file('test.txt', FILE_IGNORE_NEW_LINES); // запись маасива строк (имя файла, модификатор)
    var_dump($arr);
?>