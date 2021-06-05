<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

    // Если файла нет, он будет создан
    file_put_contents('test.txt', '123 test qwe'); 
?>