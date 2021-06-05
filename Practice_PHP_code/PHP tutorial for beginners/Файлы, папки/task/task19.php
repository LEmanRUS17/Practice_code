<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

    if (file_exists('test.txt') === true) {
        unlink('test.txt');
    } else {
        file_put_contents('test.txt', 'test');
    }

?>