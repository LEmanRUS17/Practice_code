<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

    $arr = ['dir1', 'dir2', 'dir3'];

    foreach ($arr as $elem) {
        mkdir($elem);
    }
    
?>