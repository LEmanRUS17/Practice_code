<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

    $text = file_get_contents(('test.txt'));
    $arr = explode(PHP_EOL, $text);
    var_dump($arr);
?>