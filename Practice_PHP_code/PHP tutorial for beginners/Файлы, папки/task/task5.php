<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

    $arr = ['1.txt', '2.txt', '3.txt'];

    foreach ($arr as $elem) {
        file_put_contents($elem, ''); 
    }  
?>