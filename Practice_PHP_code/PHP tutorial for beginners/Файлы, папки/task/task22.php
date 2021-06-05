<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

    var_dump(filesize('test.txt') / 1024); // размер файла в килобайтах
?>